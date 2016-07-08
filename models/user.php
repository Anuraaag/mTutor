<?php
	class UserModel extends Model {
		private function checkLogin($email, $password, &$userType, &$userId, &$userName, &$status) {
			$passwd = MD5($password);
			$this->query('SELECT name, email, status, user_type, u_id from users WHERE email = :email and password = :password');
			$this->bind(':email', trim($email));
			$this->bind(':password', trim($passwd));
			$row = $this->single();
			if ($row){
				$status = $row['status'];
				if ($row['status'] == 0)
					return false;
				$userType = $row['user_type'];
				$userId = $row['u_id'];
				$userName = $row['name'];
				return true;
			}
			return false;
		}

		private function mailidExists($mailid) {
			$this->query('SELECT name, email from registration WHERE email = :email');
			$this->bind(':email', trim($mailid));
			$row = $this->single();
			if ($row){
				return true;
			}
			$this->query('SELECT name, email from users WHERE email = :email');
			$this->bind(':email', trim($mailid));
			$row = $this->single();
			if ($row){
				return true;
			}
			return false;
		}
		public function login(){
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$errMsg =  "";
			$errCode = 0;
			$userType = STUDENT;
			$status = -1;
			if($post['submit']) {
				if (Utils::isMailIdValid($post['email']) == false) {
					$errMsg = "Please enter valid mail id or passowrd.";
					$errCode = 1;
				} else if ($post['email'] == '' || $post['password'] == '') {
					$errMsg = "Mail Id or passowrd can't be empty.";
					$errCode = 2;					
				} else if (strlen($post['email']) < 8  || strlen($post['email']) > 32 ||strlen($post['password']) < 8  || strlen($post['password']) > 32 ) {
					$errMsg = "Email and Password length should be between 8 to 32";
					$errCode = 3;					
				} else if ($this->checkLogin($post['email'], $post['password'], $userType, $userId, $userName, $status) == true){
					// check from DB if user is active and its password matches
					$errCode = 0;
					$errMsg = "";					
				} else {
					// check from DB if user is active and its password matches
					$errCode = 1;
					$errMsg = "Password or email didn't match.";
				}

				if ($errCode != 0){
					Messages::setMsg($errMsg, 'error');
				} else {
					// check to redirect to register or dashboard
					$_SESSION['is_logged_in'] = true;
					$_SESSION['user_data'] = array(
						"uid"	=> $userId,
						"name"	=> $userName,
						"email"	=> $post['email']
					);
					$loc = "Location: ".ROOT_URL;
					if ($userType == TUTOR)
						$loc .= "tutor";
					else 
						$loc .= "stud";
					if ($status == 1)
						$loc .= "/register";
					else
						$loc .= "/dashboard";
					header($loc);
				}
			}
			return;
		}

		public function forget(){
			return;
		}
		
		public function changepwd() {
			return;
		}		

		public function activate($id) {
			// check if activation id exists in table if yes, 
			// check if id has not expired, if yes
			// set data as activated, move details to user table
			$modelData = array('error' => 0,
				'message' => 'Your account is successfully activated. Click continute button to login.');

			if ($id == '') {
				$modelData['error'] = 1;
				$modelData['message'] = "Invalid Activation Code or Expired.";
			} else {
				$this->query('Select * from registration WHERE activation_url = :actv_url');
				$this->bind(':actv_url', trim($id));
				$row = $this->single();
				if ($row){
					$email = $row['email'];
					$password = $row['password'];
					$userType = $row['user_type'];
					$mobile = $row['mob_number'];
					$name = $row['name'];
					$uid = $userType. sprintf('%06d',$row['id']);
					//check time stamp;
					//$message .= "email=".$email."password=".$password."userType=".$userType."mobile=".$mobile;
					//$message .=implode(" ",$row);
					$activation_time = strtotime($row['ac_creation_date']);
					$curtime = time();
					$interval =   $curtime - $activation_time;   
					if ($interval < 172800) {
						// success full activation.
						$this->query('Update registration SET active_status = 1 WHERE activation_url = :actv_url');
						$this->bind(':actv_url', trim($id));
						$this->single();
						// insert user table
						//$this->query("INSERT INTO users (email, password, user_type, mob_number, status, ac_creation_date, u_id) VALUES('sandeep', 'password', 'T', 'mobno', 1, '2016-07-06 21:43:52', 'T0000004')");
						$this->query("INSERT INTO users (name, email, password, user_type, mob_number, status, ac_creation_date, u_id) VALUES(:name, :email, :password, :usertype, :mobno, 1, :createdate, :uid)");
						$this->bind(':name', $name);
						$this->bind(':email', $email);
						$this->bind(':password', $password);
						$this->bind(':usertype', $userType);
						$this->bind(':mobno', $mobile);
						$this->bind(':createdate', date("Y-m-d H:i:s"));
						$this->bind(':uid', $uid);
						$this->execute();
						// Verify
						if($this->lastInsertId()){
							$modelData['error'] = 1;
							$modelData['message'] = "Account has been successfully activated.";
						}
					} else {
						$modelData['error'] = 1;
						$modelData['message'] = "Activation has expired.";
					}
				} else {
						$modelData['error'] = 1;
						$modelData['message'] = "Invalid Activation Code or Expired.";
				}
			}
			return $modelData;
		}		

		public function register() {
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			//echo "<pre>";print_r($post);echo "</pre>";
			if ($post['submit']) {
				if ($post['fieldName'] == '' || $post['fieldEmail'] == '' || 
					$post['fieldPassword'] == '' || $post['fieldConfirm'] == '' || 
					$post['user'] == '' || $post['fieldCaptcha']  == '') {
					Messages::setMsg('Please fill in all fields', 'error');
					return;
				} else if ($post['fieldPassword'] != $post['fieldConfirm']) {
					Messages::setMsg('Password and Confirm password mismatches.', 'error');
					return;					
				} else if ($this->mailidExists($post['fieldEmail']) == true){
					// check if email is already registered.
					Messages::setMsg('This email is already registered.', 'error');
					return;					
				} else {
					// check name, user and other fields have lengths within limits
					$passwd = MD5($post['fieldPassword']);
					$activeurl = struuid(true);
					$userType = Utils::getUserType($post['user']);
					$this->query('INSERT INTO registration (name, email, password, user_type, activation_url, active_status) VALUES(:name, :email, :password, :usertype, :actv_url, :active_status)');
					$this->bind(':name', trim($post['fieldName']));
					$this->bind(':email', trim($post['fieldEmail']));
					$this->bind(':password', $passwd);
					$this->bind(':usertype', $userType);
					$this->bind(':actv_url', $activeurl);
					$this->bind(':active_status', 0);
					$this->execute();
					// Verify
					if($this->lastInsertId()){
						Messages::setMsg('Thanks for registering us. Please check your mail for activation url', 'success');
						return;
					} 
					Messages::setMsg('There is some registration error, please try after some time or contact our support team.', 'error');									
				}
			} 			
			return;
		}		
	}
?>

