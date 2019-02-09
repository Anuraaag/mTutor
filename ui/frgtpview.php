<?php

	require "message1.php";

	class frgtpview
	{
		public function display()
		{
		   $showpage = <<< pagedoc

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title> Forgot Password </title>
<link rel="stylesheet" type="text/css" href="/mtutor/css/bootstrap.css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<body>
	 <!-- Header -->    <!-- Header -->


<div class="container">
	<br><h3 style="font-size: 30px; text-align: center;" class="col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 ">Forgot Password</h3>
	<div class=" col-md-6 col-md-offset-3 col-xs-12 col-sm-12">
	  <div style="padding: 40px 40px 40px 40px">
		
		<form class="form-horizontal" action="do_4gotpswd.php" method="post" >

			<div class="panel panel-default">				

				<div class="panel-heading " >
					<p> Forgot your password? Enter the e-mail address of your account to reset your password, otherwise you can <a href="#"> Try again </a> </p>
				</div>

pagedoc;
		echo $showpage;
		$messobj = new Message(7,"Aww Snap!!","Warning");
		$messobj -> display();


		$showpage2 = <<< pagedoc2
				<div class="panel-body">
						
						<div class="form-group" >
						    <br>
							<label for="email" class="col-md-2 col-md-offset-1"> <h4>Email:</h4> </label>
							<div class="col-md-8">
							<input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required />
							</div>
						</div>
				</div>


				<div class="panel-footer" style="height:60px">
				  <span class="col-md-3">
					<button type="submit" class="btn btn-primary">Submit</button>
					
				  </span>
				</div>

			</div>
	    </form>
	</div>
</div>
		
</div>

<!-- Footer -->    <!-- Footer -->
 


<script src="/mtutor/js/jquery.js"></script>
<script src="/mtutor/js/bootstrap.js"></script>

</body>
</html>
pagedoc2;

			echo $showpage2;
		}
	}

	$obj = new frgtpview();
	$obj -> display();


?>