<?php
	class User extends Controller {
		protected function register() {
			echo "<h1>Controller User->register() called";
			return;
		}

		protected function login() {
			//echo "<h1>Controller User->login() called";
			$viewModel = new UserModel();
			$this->returnView($viewModel->login(), true);
			return;
		}

		protected function logout() {
			echo "<h1>Controller User->logout() called";
			return;
		}

		protected function forget() {
			echo "<h1>Controller User->forget() called";
			return;
		}
	}
?>

