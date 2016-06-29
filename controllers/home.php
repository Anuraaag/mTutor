<?php
	class Home extends Controller {
		protected function Index() {
			$viewModel = new HomeModel();
			$this->returnView($viewModel->Index(), true);
		}

		protected function About() {
			$viewModel = new HomeModel();
			$this->returnView($viewModel->About(), true);
		}

		protected function Contact() {
			$viewModel = new HomeModel();
			$this->returnView($viewModel->Contact(), true);
		}
	}
?>
