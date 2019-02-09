<?php
	require "message1.php";
	/**
	* 
	*/
	class privacy_view
	{
		
		public function display()
		{
			$showpage=<<< PAGEDOC
			<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Privacy policy</title>
  <link rel="stylesheet" type="text/css" href="/mtutor/css/bootstrap.css">
   <script src="/mtutor/js/jquery-1.12.4.min.js"></script>

	<script src="/mtutor/js/bootstrap.js"></script>  
	</head>
	<body>
	<div class="container">
	<br>
  	<h2 style="font-size: 4em; font-family: lato;">Privacy Policy</h2>
	<hr style="border-width: 0.3em;" />
  	<br>
        <ul type="disc">
          <li> First Terms............</li>
          <li> Second Terms............</li>
          <li> Third Terms............</li>
          <li> First Terms............</li>
          <li> Second Terms............</li>
          <li> Third Terms............</li>
          <li> First Terms............</li>
          <li> Second Terms............</li>
          <li> Third Terms............</li>


        </ul>
      
   </div>
   </body>
   </html>

PAGEDOC;
		echo $showpage;

		}
	}
	$obj= new privacy_view();
	$obj->display();
?>	