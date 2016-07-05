<?php
  
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

	
	class changepwview
	{
		 private $title = "mtutor - change password";       	 

		public function display()
		{		   
			 	$headpage = new header();
        		$headpage->setTitle($this->title);
           		$headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));        	
        		$headpage->display();
       			$bodyheader = new Bheader();
        		$bodyheader->display();

		   $showpage = <<<PAGEDOC
<div class="container content" >
	<br><h3 style="font-size: 30px" class="col-md-4 col-md-offset-1">Change Your Password</h3>
	<div class=" col-md-6 col-md-offset-3 col-xs-12 col-sm-12">
		<div style="padding: 10px 10px 10px 10px; border-color: red">
		<form class="form-horizontal" action="dologin.php" method="post" name="form1" >
			<div class="panel panel-default ">
				<div class="panel-heading" style="height: 70px; font-size: 20px">
					Set Your New Password:
				</div>
				<div class="panel-body" >
						<div class="form-group" >
							<label for="emailField" class="col-xs-9 col-md-5">Enter Old Password</label>
								<div class="col-xs-8 col-md-8" style="width:250px">
									<input type="password" class="form-control col-xs-4 " id="oldpw" name="oldpw"  placeholder="OLD Password"   maxlength="20" minlength="8" required/>
								</div>
						</div>
						<div class="form-group">						
							<label for="password" class="col-xs-9 col-md-5">Enter New Password</label>
								<div class="col-xs-8 col-md-8" style="width:250px; ">
									<input type="password" class="form-control" id="newpw" name="newpw" placeholder="NEW Password" maxlength ="20" minlength="8" required/>
								</div>
						</div>			
						<div class="form-group">						
							<label for="password" class="col-xs-9 col-md-5">Confirm New Password</label>
								<div class="col-xs-8 col-md-8" style="width:250px;">
									<input type="password" class="form-control" id="password" name="password" placeholder="NEW Password" maxlength ="20" minlength="8" required/>
								</div>
						</div>			
				</div>
				<div class="panel-footer">
					<span><button type="button" class="btn btn-primary btn-md col-xs-offset-1 col-md-offset-3" style="text-align: center" onclick="check()" >Confirm</button>
					<button type="button" class="btn btn-default btn-md col-xs-offset-2 col-md-offset-2">Cancel</button></span>
				</div>
			</div>
			</form>
		</div>		
	</div>
 </div>
PAGEDOC;
		echo $showpage;
  		$footer = new BFooter();
$script = '<script>
function check()
{
	if(document.getElementById("password").value == document.getElementById("newpw").value)
	{
		document.forms.form1.submit();
	}
	else
	{
		alert("Passwords do not match");
	}
}
</script>';
		$footer->addScript($script);
  		$footer->display();
	}

}

	$obj = new changepwview();
	$obj -> display();

?>