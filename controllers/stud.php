<?php
	class Stud extends Controller {
		protected function register() {
			$viewModel = new StudModel();
			$this->returnView($viewModel->register(), true);
			return;
		}
	}
?>

