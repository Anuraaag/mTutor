<?php
	require "message1.php";
	/**
	* 
	*/
	class tnc_view
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
  <title>Terms and conditions</title>
  
  
  <link rel="stylesheet" type="text/css" href="/mtutor/css/bootstrap.css">;

<script src="/mtutor/js/jquery-1.12.4.min.js"></script>
  <script src="/mtutor/js/bootstrap.js"></script>   
</head>
<body>
<div class="container">
  <h1>Terms and Conditions</h1>
<hr style="border-width: 0.3em;" />
  <br>
<div class = "panel panel-info" >
        <div class = "panel-heading" style="font-size: 1.8em;">
          General
        </div>
        <br>
        <ul type="disc">
          <li> First Terms............</li>
          <li> Second Terms............</li>
          <li> Third Terms............</li>


        </ul>
   </div>   
    <br>
<div class = "panel panel-info" >
        <div class = "panel-heading" style="font-size: 1.8em;">
          For Parent/Student
        </div>
        <br>
        <ul type="disc" >
          <li> First Terms............</li>
          <li> Second Terms............</li>
          <li> Third Terms............</li>


        </ul>
   </div>   
    <br>
<div class = "panel panel-info" >
        <div class = "panel-heading" style="font-size: 1.8em;">
          For Tutor
        </div>
        <br>
        <ul type="disc">
          <li> First Terms............</li>
          <li> Second Terms............</li>
          <li> Third Terms............</li>


        </ul>
   </div>   
</div>
</body>
</html>
PAGEDOC;
		echo $showpage;

		}
	}
	$obj= new tnc_view();
	$obj->display();
?>	

