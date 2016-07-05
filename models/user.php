<?php
	class UserModel extends Model {
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
			if($post['submit']) {
				if (Utils::isMailIdValid($post['email']) == false) {
					$errMsg = "Please enter valid mail id or passowrd.";
					$errCode = 1;
				} else if ($post['email'] == '' || $post['password'] == '') {
					$errMsg = "Mail Id or passowrd can't be empty.";
					$errCode = 2;					
				} else {
					// check from DB if user is active and its password matches
					$errCode = 0;
					$errMsg = "Password or email didn't match.";
				}

				if ($errCode != 0){
					Messages::setMsg($errMsg, 'error');
				} else {
					$_SESSION['is_logged_in'] = true;
					$loc = "Location: ".ROOT_URL;
					if ($userType == TUTOR)
						$loc .= "tutor";
					else 
						$loc .= "stud";
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

		public function activate() {
			return;
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
					$activeurl = struuid(true);;
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

