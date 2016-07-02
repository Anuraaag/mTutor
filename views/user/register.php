<?php

  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

	/**
	* 
	*/
	class registerView
	{
		private $title = "mTutor - register new account";

		public function display()
		{
			$headpage = new header();
			$headpage->setTitle($this->title);
			
			if (config::$debug == TRUE)
			  $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));
			else
			  $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min"));
			$headpage->display();

			$bodyheader = new Bheader();
			$bodyheader->display();
			# code...
			$showpage = <<< PAGEDOC
				<!DOCTYPE html> 
					<html lang="en">  
					<head>    
						<meta charset="utf-8">    
						<meta http-equiv="X-UA-Compatible" content="IE=edge">    
						<meta name="viewport" content="width=device-width, initial-scale=1">
					    <title>Register New Account</title>    
					    <link rel="stylesheet" type="text/css" href="/mtutor/css/bootstrap.css">
					    <!--[if lt IE 9]>      
					    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>      
					    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>    
					    <![endif]-->   
					    
					    <script type="text/javascript">
					    	
					    	function validateall()
					    	{
						    	var x = document.getElementById("confirmField").value;
						    	var y = document.getElementById("passwordField").value;
						    	if (!(x.match(y)))
						    	{
						    		window.alert("Password does not match.");
						    		return false;
						    	}
						    	else
						    	{
						    		return true;
						    	}
						    	
					    	}
					    </script>   
					</head>  
					<body>        
					    <h1 class = "text-center">Register Here For Free</h1>               
					    <script src="/mtutor/js/jquery.js"></script>
					    <script src="/mtutor/js/bootstrap.js"></script>  
					    <div class="container">
					    	<div class="row">
					    		
					    		<div class="col-md-5 col-xs-4 col-md-offset-7">
							    	<form class="form-horizontal" action="doRegister.php" method="post">
					    			<div class = "panel panel-default" style="float: right;">
					    				<div class = "panel-heading">
					    					REGISTER
					    				</div>
					    				<div class="panel-body">
							    				<div class="form-group">
							    				<label for="nameField" class="col-md-4 col-xs-2">Name</label>
							    				<div class="col-md-7 col-xs-4">
							    					<input type="text" class = "form-control" id = "nameField" placeholder="Your name" name="fieldName" required maxlength = "32" pattern = "[A-Z a-z]*"/>
							    				</div>
							    				</div>

							    				<div class="form-group">
							    				<label for="emailField" class="col-md-4 col-xs-2">Email-id</label>
							    				<div class="col-md-7 col-xs-4">
							    					<input type="email" class = "form-control" id = "emailField" placeholder="Your email-id" name="fieldEmail" required pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
							    				</div>
							    				</div>

							    				<div class="form-group">
							    				<label for="passwordField" class="col-md-4 col-xs-2">Password</label>
							    				<div class="col-md-7 col-xs-4">
							    					<input type="password" class = "form-control" id = "passwordField" placeholder="Your password" name="fieldPassword" required maxlength="20" minlength="8"/>
							    				</div>
							    				</div>

							    				<div class="form-group">
							    				<label for="confirmField" class="col-md-4 col-xs-2">Confirm Password</label>
							    				<div class="col-md-7 col-xs-4">
							    					<input type="password" class = "form-control" id = "confirmField" placeholder="Confirm your password" name="fieldConfirm" required maxlength="20" minlength="8" />
							    				</div>
							    				</div>

							    				<div class="form-group">
							    				<span class="radio">
							    				 	<label class= "col-md-4 col-xs-2" for="user">   
							    				 		<input class="col-md-4 col-xs-4" type="radio" value="Tutor" name = "user" required/> Tutor 
							    				 	</label>

							    				 	<label class= "col-md-4 col-xs-2" for="user">   
							    				 		<input class="col-md-4 col-xs-4" type="radio" value="Non-Academic Professionals" name = "user">Non- Academic Professionals 
							    				 	</label>
							    				 
							    				 	<label class= "col-md-4 col-xs-2" for="user">   
							    				 		<input class="col-md-4 col-xs-4" type="radio" value="Student" name = "user">Student 
							    				 	</label>
							    				 </span>
							    				</div>

							    				<div class="form-group">
							    				<label for="captchaField" class="col-md-4 col-xs-2">Captcha</label>
							    				<div class="col-md-7 col-xs-4">
							    					<input type="text" class = "form-control" id = "captchaField" placeholder="Captcha" name="fieldCaptcha" required />
							    				</div>
							    				</div>
							    		</div>
							    		<div class="panel-footer">
							    			<button type = "submit" class="btn btn-primary btn-sm" onclick="validateall()">Register </button> 
							    			<a href = "#" class="pull-right">Login </a>
							    		</div>
					    			</div>
					    			</form>
					    		</div>
					    	</div>
					    </div>
					</body> 
					</html>
PAGEDOC;
			echo $showpage;
			    $footer = new BFooter();
    			$footer->display();
		}
	}

		$obj = new registerView();
		$obj->display();
	
?>


