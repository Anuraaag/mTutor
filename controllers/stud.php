<?php
	class Stud extends Controller {
		protected function register() {
			$viewModel = new StudModel();
			$this->returnView($viewModel->register(), true);
			return;
		}

		protected function dashboard() {
			$viewModel = new StudModel();
			$this->returnView($viewModel->dashboard(), true);
			return;
		}

		protected function search() {
			$viewModel = new StudModel();
			$this->returnView($viewModel->search(), true);
			return;			
		}
	}
?>

