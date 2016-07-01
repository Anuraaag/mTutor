<?php

include_once ('inc/header.php');
include_once ('inc/bheader.php');
include_once ('inc/bfooter.php');

/**
* 
*/
class profile_r1_view 
{
	public $title="mtutor-profile registeration of tutor page 1";

	function display1() {
    $headpage = new header();
    $headpage->setTitle($this->title);
 
    if (config::$debug == TRUE)
      $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));
    else
      $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min"));
    $headpage->display();

    $bodyheader = new Bheader();
    $bodyheader->display();
    
	}

	function display2()
	{
		$footer = new BFooter();
    	$footer->display();
	}
	
}
	
	$obj=new profile_r1_view();
	$obj->display1();


?>	

	<div class = "container">
	 <div class="panel panel-default" style="border-bottom: none;">
	 <div class="panel panel-primary">
	 <div class="panel-heading ">Complete your profile</div>
	 </div>
	 
		<div class="row">

			<div class="board">
				<ul class="nav nav-tabs">
					<div class="liner" style="margin: auto;"></div>
					<li class="active" style="width:20%;"><a style="width:70px; height:70px;margin:auto;" href="#"><span class="round-tabs"><i class="glyphicon glyphicon-home"></i></span></a></li>
					<li class="disabled" style="width:20%;"><a style="width:70px; height:70px;margin:auto;" href="#"><span class="round-tabs"><i class="glyphicon glyphicon-user"></i></span></a></li>
					<li class="disabled" style="width:20%;"><a style="width:70px; height:70px;margin:auto;" href="#"><span class="round-tabs"><i class="glyphicon glyphicon-gift"></i></span></a></li>
					<li class="disabled" style="width:20%;"><a style="width:70px; height:70px;margin:auto;" href="#"><span class="round-tabs"><i class="glyphicon glyphicon-comment"></i></span></a></li>
					<li class="disabled" style="width:20%;"><a style="width:70px; height:70px;margin:auto;" href="#"><span class="round-tabs"><i class="glyphicon glyphicon-ok"></i></span></a></li>
				</ul>
			</div>
			
			
		</div>
			
			
	    	<form class="form-horizontal" action="dologin.php" method="post" action="dologin.php">
			<div class = "panel panel-default" style="border-left: 0em; border-right: 0em;">
				<div class = "panel-heading">
					PERSONAL DETAILS
				</div>
				<br>

	    				<div class="form-group" >
	    				<label for="nameField" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Name</label>
	    				<div class="col-md-7 col-xs-4">
	    					<input type="text" class = "form-control" id = "nameField" placeholder="Your name" name="fieldName" required />
	    				</div>
	    				</div>

	    				<div class="form-group">
	    				<label for="emailField" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Email-id</label>
	    				<div class="col-md-7 col-xs-4">
	    					<input type="email" class = "form-control" id = "emailField" placeholder="Your email-id" name="fieldEmail" required/>
	    				</div>
	    				</div>

	    				<div class="form-group">
	    				<label for="Phone Number" class="col-md-4 col-xs-2"style="padding-left: 2em;"> Mobile Number</label>
	    				<div class="col-md-7 col-xs-4">
	    					<input type="text" class = "form-control" id = "phonenofield" placeholder="Your mobile number." name="fieldPhone" required maxlength="10" minlength="8"/>
	    				</div>
	    				</div>

	    				<div class="form-group">
	    				<label for="Phone Number" class="col-md-4 col-xs-2"style="padding-left: 2em;"> Landline Number</label>
	    				<div class="col-md-7 col-xs-4">
	    					<input type="text" class = "form-control" id = "phonenofield" placeholder="Your landline number" name="fieldPhone" required maxlength="10" minlength="8"/>
	    				</div>
	    				</div>

	    				<div class="form-group">
	    				<label for="confirmField" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Date of Birth</label>
	    				<div class="col-md-7 col-xs-4">
	    					<input type="date" class = "form-control" id = "confirmField" placeholder="Date of birth" name="fieldBirth" required />
	    				</div>
	    				</div>

	    				<div class="form-group">
	    				
	    				<label for="gender" class="col-md-4 col-xs-2" style="padding-left: 2em;">Gender</label>
	    				 	<label class= "col-md-3 col-xs-2">   
	    				 		Male <input class="col-md-3 col-xs-4" type="radio" value="Male" name = "gender"/>
	    				 	</label>
	    				 
	    				 	<label class= "col-md-3 col-xs-2">   
	    				 		Female <input class="col-md-3 col-xs-4" type="radio" value="Female" name = "gender">
	    				 	</label>
	    				 
	    				</div>

	    				<div class="form-group">
	    				<label for="address" class="col-md-4 col-xs-2" style="padding-left: 2em;">Address</label>
	    				<div class="col-md-7 col-xs-4">
	    					<input type="textarea" class = "form-control" id = "address" placeholder="Your Address" name="fieldAddress" rows="3" required />
	    				</div>
	    				</div>
	    				
	    				<div class="form-group">
	    				<label for="Pincode" class="col-md-4 col-xs-2" style="padding-left: 2em;">Pincode</label>
	    				<div class="col-md-7 col-xs-4">
	    					<input type="text" class = "form-control" id = "pincode" name="fieldPincode" placeholder="Pincode" maxlength="6" required />
	    				</div>
	    				</div>

	    				<div class="form-group">
	    				<label for="address" class="col-md-4 col-xs-2" style="padding-left: 2em;">City</label>
	    				<div class="col-md-7 col-xs-4">
	    					<input type="textarea" class = "form-control" id = "address" placeholder="Your City name " name="fieldAddress" rows="3" required />
	    				</div>
	    				</div>

	    				<div class="form-group">
	    				<label for="address" class="col-md-4 col-xs-2" style="padding-left: 2em;">State</label>
	    				<div class="col-md-7 col-xs-4">
	    					<input type="textarea" class = "form-control" id = "address" placeholder="Your state name " name="fieldAddress" rows="3" required />
	    				</div>
	    				</div>

	    				<div class="form-group">
	    				<label for="address" class="col-md-4 col-xs-2" style="padding-left: 2em;">Country</label>
	    				<div class="col-md-7 col-xs-4">
	    					<input type="textarea" class = "form-control" id = "address" placeholder="Your Country name " name="fieldAddress" rows="3" required />
	    				</div>
	    				</div>

	    				<div class="form-group">
	    				
	    				<label for="gender" class="col-md-4 col-xs-2" style="padding-left: 2em;">Do you own a vehicle?</label>
	    				 	<label class= "col-md-3 col-xs-2">   
	    				 		Yes <input class="col-md-3 col-xs-4" type="radio" value="Male" name = "gender"/>
	    				 	</label>
	    				 
	    				 	<label class= "col-md-3 col-xs-2">   
	    				 		No <input class="col-md-3 col-xs-4" type="radio" value="Female" name = "gender">
	    				 	</label>
	    				 
	    				</div>
	    				

<div class="panel-footer">
	    			<button type = "submit" class="btn btn-primary btn-sm" onsubmit="return validateall()">Save  </button> 
	    			<button type = "submit" class="btn btn-primary btn-sm" onsubmit="return validateall()">Submit </button>
	    			
	    		
</div>

			</form>
			
		
		


	    		
			</div>	
		
		</div>
		<br><br><hr>
		
	
<?php
$obj->display2();

?>
  		