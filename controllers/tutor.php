<?php
	class Tutor extends Controller {
		protected function Register() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->Register(), true);
		}

		protected function Register1() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->Register1(), true);
		}

		protected function Register2() {
			echo "<h1>Register2 called</h2>";
			//$viewModel = new TutorModel();
			//$this->returnView($viewModel->Register2(), true);
		}

		protected function SendMessage() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->SendMessage(), true);
		}

		protected function DashBoard() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->DashBoard(), true);
		}

		protected function Search() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->search(), true);
			return;
		}

		protected function Profile() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->Profile(), true);
			return;
		}

		protected function searchres() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->searchres(), true);
			return;
		}

		protected function publicpro() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->publicpro(), true);
			return;
		}

	}
?>

