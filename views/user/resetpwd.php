<?php
  
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

	
	class Resetpwd
	{
		 private $title = "mtutor - reset password";       	 

		public function display()
		{		   
			 	$headpage = new header();
        		$headpage->setTitle($this->title);
           		$headpage->setstyles(array("bootstrap", "font-awesome", "mtutor"));        	
        		$headpage->display();
       			$bodyheader = new Bheader();
        		$bodyheader->display();

		   $showpage = <<<PAGEDOC
		  
<script>
function check()
{
	if(document.getElementById("pw").value == document.getElementById("newpw").value)
	{
		document.forms.form1.submit();
	}
	else
	{
		alert("Passwords do not match");
	}
}

</script>

</head>
<body>
	<div class="container" style="padding: 50px 50px 50px 50px" >
	<h3 style="font-size: 30px" class="col-md-4 col-md-offset-1">Reset Your Password</h3>
	<div class=" col-md-6 col-md-offset-3 col-xs-12 col-sm-12" style="padding-top: 20px">
		
		<form class="form-horizontal" name="form1" >
			<div class="panel panel-default ">
				
				<div class="panel-heading" style="height: 70px; font-size: 20px">
					Set Your New Password				</div>
				:

				<div class="panel-body" >

						<div class="form-group">						
							<label for="password" class="col-xs-9 col-md-5">Enter New Password</label>
								<div class="col-xs-8 col-md-8" style="width:250px; ">
									<input type="password" class="form-control" id="newpw" name="newpw" placeholder="NEW Password" maxlength ="20" minlength="8" required/>
								</div>
						</div>

						<div class="form-group">						
							<label for="password" class="col-xs-9 col-md-5">Confirm New Password</label>
								<div class="col-xs-8 col-md-8" style="width:250px;">
									<input type="password" class="form-control" id="pw" name="password" placeholder="NEW Password" maxlength ="20" minlength="8" required/>
								</div>
						</div>			
				</div>

				<div class="panel-footer">
					<button type="button" class="btn btn-primary btn-md col-md-offset-1" onclick="check()" > Save and Continue </button>
					<button type="button" class="btn btn-default btn-md col-xs-offset-2 col-md-offset-2">&nbsp; Cancel &nbsp;</button>
				</div>
			</div>
			</form>
				
	</div>
 </div>

PAGEDOC;
		echo $showpage;
  		$footer = new BFooter();
  		$footer->display();
	}

}

	$obj = new Resetpwd();
	$obj -> display();

?>
