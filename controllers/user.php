<?php
	class User extends Controller {
		protected function register() {
			$viewModel = new UserModel();
			$this->returnView($viewModel->register(), true);
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
			$viewModel = new UserModel();
			$this->returnView($viewModel->forget(), true);
			return;
			//echo "<h1>Controller User->forget() called";
			return;
		}

		protected function changepwd() {			
			$viewModel = new UserModel();
			$this->returnView($viewModel->changepwd(), true);
			return;
		}

		protected function activate() {			
			$viewModel = new UserModel();
			$this->returnView($viewModel->activate(), true);
			return;
		}
		
	}
?>

