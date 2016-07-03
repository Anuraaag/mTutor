<?php
	class UserModel extends Model {
		public function login(){
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
				} else {
					$this->query('INSERT INTO registration (email, password, user_type, activation_url, active_status) VALUES(:email, :password, :usertype, :actv_url, :active_status)');
					//$this->bind(':name', $post['fieldName']);
					$this->bind(':email', $post['fieldEmail']);
					$this->bind(':password', $post['fieldPassword']);
					$this->bind(':usertype', 'T');
					$this->bind(':actv_url', '88c47f82-072a-4a49-be6e-82d2ad24c21e');
					$this->bind(':active_status', 1);
					$this->execute();
					// Verify
					//if($this->lastInsertId()){
					Messages::setMsg('Thanks for registering us. Please check your mail for activation url', 'success');
					return;				
				}
			} 			
			return;
		}		
	}
?>

