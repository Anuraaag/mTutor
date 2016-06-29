<?php
	//session start
	session_start();

	// includes
	include ('inc/config.php');
	include ('classes/messages.php');
	include ('classes/main.php'); 
	include ('classes/controller.php');
	include ('classes/model.php');
	include ('controllers/home.php');
	include ('controllers/user.php');	
	include ('models/home.php');
	include ('models/user.php');

	$mainPage = new Main($_GET);
	$controller = $mainPage->createController(); 
	if($controller) {
		$controller->executeAction();
	}
?>