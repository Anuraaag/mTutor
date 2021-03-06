<?php

	require "message1.php";

	class loginview
	{
		public function display()
		{
		   $showpage = <<< PAGEDOC
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>mTutor-Login</title>
<link rel="stylesheet" type="text/css" href="/mtutor/css/bootstrap.css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
	 <!-- Header -->
        <div class="container col-xs-12" style="background-image: url(../ui/header_poly.jpg); height: 120px;width:1350px ; margin-left: 7px; margin-right: 7px">
            <div class="header row" >
                <div class="logo span4">
                    <h2 style="font-family: Berlin Sans FB; color:#E67E22 ; font-size: 55px ; margin-left: 30px"><a style=" color: #FF5733; " href="#">mTutor</a></h2>
                </div>
            </div>
        </div>
        <hr>      
	</div>
	 <!--Header End-->

	<div class="container" style="padding-top:100px">
PAGEDOC;
        echo $showpage;
    
    $msgobj = new Message(1, "Try Again!", "Warning");
	$msgobj->display();

	$showpage1 = <<<PAGEDOC1
	<div class=" col-md-4 col-md-offset-8 col-xs-12 col-sm-12">

		<div style="padding: 30px 30px 30px 30px">
		<form class="form-horizontal" action="dologin.php" method="post">
			<div class="panel panel-default">
				<div class="panel-heading">
					LOGIN
				</div>
				<div class="panel-body">
						<div class="form-group">
							<label for="emailField" class="col-xs-3 col-md-3">Email</label>
								<div class="col-xs-10 col-md-10">
									<input type="email" class="form-control" id="email" name="email" placeholder="Your Email" maxlength ="20" minlength="8" required />
								</div>
						</div>
						<div class="form-group">						
							<label for="password" class="col-xs-3 col-md-3">Password</label>
								<div class="col-xs-10 col-md-10">
									<input type="password" class="form-control" id="password" name="password" placeholder="Your Password" maxlength ="20" minlength="8" required/>
								</div>
						</div>					
				</div>
				<div class="panel-footer">
					<span><button type="submit" class="btn btn-danger btn-sm " style="float: left; padding-left: 5px; ">Login</button>
					<a href="#" style="margin-right: 0px">Register New User</a></span>
					<br><br><a href="#">Forgot Password?</a>
				</div>
			</div>
			</form>
		    
		</div>		
	</div>
 </div>

	<hr>
            <div class="container" style="height: 300px; width: 1350px; background-image: url(../ui/footer.jpg);">              
                <form class="form col-md-3 col-md-offset-8 col-xs-10 " action="assets/contact.php" method="post" name="cform" style="margin-top: 30px; margin-right: 30px; width: 250px">
                    <h3>Contact Us</h3>
                        <input type="text" name="name" class="form-control" placeholder="Name" >
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <textarea name="message" placeholder="Message" class="form-control"></textarea>
                        <button class="btn btn-default" type="submit">Submit</button>
                </form>                      
            </div> <!-- end container -->

	<script src="/mtutor/js/jquery-1.12.4.js"></script>
	<script src="/mtutor/js/bootstrap.js"></script>	
</body>
</html>
PAGEDOC1;
		echo $showpage1;
		}	

	}

	$obj = new loginview();
	$obj -> display();


?>