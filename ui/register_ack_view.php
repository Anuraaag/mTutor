<?php
	require "message1.php";
	/**
	* 
	*/
	class register_ack_view
	{
		
		public function display()
		{
			$showpage=<<< PAGEDOC
			<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Register acknowledgment</title>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<link rel="stylesheet" type="text/css" href="/mtutor/css/bootstrap.css">
  
  




<div class="container"> 
  <div class="panel panel-default col-md-offset-3 col-md-5 col-xs-12 col-xs-offset-0" style="margin-left: 325px">
    <h2 class="text-center col-xs-12" style="height: 50px">Thanks for registering!!</h2>
    <div class="panel-body col-xs-12 col-xs-offset-0">
 
    <div class="col-lg-2  col-md-10 col-md-offset-4 col-sm-6 col-xs-6 col-xs-offset-5" style="height: 70px; width: 150px">
    <img src="./tick.png" class="img-responsive" style="height: 100%; width: 200%" >
    </div>
    
    <div class="col-md-12">     
  		<h2>You have been successfully registered.<br>We have sent you an activation link to your email id </h2>
    </div>
		
		<a href="#" class="btn btn-info btn-lg col-md-4 col-md-offset-4">
      <span class="glyphicon glyphicon-ok " style="text-align: center;"></span> Ok
    </a>
  </div>
  </div>
</div>
<script src="/mtutor/js/jquery-1.12.4.min.js"></script>
  <script src="/mtutor/js/bootstrap.js"></script> 
</body>
</html> 
PAGEDOC;
		echo $showpage;

		}
	}
	$obj= new register_ack_view();
	
	$obj->display();
?>	