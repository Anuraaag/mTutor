<?php
  	include_once ('inc/header.php');
  	include_once ('inc/bheader.php');
  	include_once ('inc/bfooter.php');

	class StudDashboard {

		private $title ="mTutor- Student Dashboard";
		public function display(){
			$headpage = new header();
			$headpage->setTitle($this->title);
			if (config::$debug == TRUE)
			  $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome", "sumoselect"));
			else
			  $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min", "sumoselect.min"));
			$headpage->display();

			$bodyheader = new Bheader();
			$bodyheader->display();
			$showpage = <<< PAGEDOC
			    <div class="container content">
			    	<h2 class="text-center"> DASHBOARD - STUDENT </h2>
			    	<div class="row">
			    		<div class="col-md-6">
			    			<img src = "bg3.jpg" class="img-responsive img-circle center-block" width="200" height="200">
			    		</div>
			    		<div class="col-md-6">
			    			<img src="bg3.jpg" class="img-responsive img-circle center-block" width="200" height="200">
			    		</div>
			    	</div>
				    <div class="row">
					    <div class="col-md-3">
					    	<div class="panel panel-default">
					    		<div class="panel-heading">
					    			<img src="/mtutor/img/pro_pic.png" class="img-responsive img-thumbnail center-block"><br>
					    			<p class="text-center">Arjun Handa<br>
					    			Silver Member</p>
					    		</div>

					 			<div class="panel-body">
					 				<ul class="nav nav-pills nav-stacked">    
					 				<li class="active"><a href="#"><span class="glyphicon glyphicon-th-list"> Dashboard</span></a></li>    
					 				<li><a href="#"><span class="glyphicon glyphicon-user"> Profile</span></a></li>    
					 				<li><a href="#"><span class="glyphicon glyphicon-envelope"> Invite For Reviews</span></a></li> 
					 				<li><a href="#"><span class="glyphicon glyphicon-star"> Courses</span></a></li>
					 				<li><a href="#"><span class="glyphicon glyphicon-refresh"> Find a Tutor</span></a></li>
					 				<li><a href="#"><span class="glyphicon glyphicon-cog"> Account</span></a></li>
					 				</ul>
					 			</div>

					 			<div class="panel-footer">
					 				<button type = "submit" class="btn btn-primary btn-sm">Sign Out </button>
					 			</div>
					    	</div>
					    </div>
					    <div class="col-md-9">
						    <div class="panel panel-default">
						    	<div class="panel-heading">
						    		<ul class="nav nav-tabs nav-justified" data-toggle="buttons">
						    			<li class="active"> <a href="#" data-toggle = "tab"> Enquiries </a> </li>
						    			<li> <a href="#" data-toggle="tab"> Contacted </a> </li>
						    			<li> <a href="#" data-toggle="tab"> Hired </a> </li>
						    		</ul>	
						    		
						    		</div>
						    	<div class="panel-body">
						    		<div class="row">
										<div class="col-md-12" style="border: 2px solid gray;">
											Number Of Enquiries
										</div>
										<div class="col-md-12" style="border: 2px solid gray;">
											<div class="row">
												<div class="col-md-1">
													<div id="circle">
											    		<span class="innerTEXT"> N </span>
													</div>
												</div>
												<div class="col-md-8">
													Name,Address
												</div>
											</div>
										</div>
										<div class="col-md-12" style="border: 2px solid gray;">
											<div class="row">
												<div class="col-md-1">
													<div id="circle">
											    		<span class="innerTEXT"> N </span>
													</div>
												</div>
												<div class="col-md-8">
													Name,Address
												</div>
											</div>
										</div>
										<div class="col-md-12" style="border: 2px solid gray;">
											<div class="row">
												<div class="col-md-1">
													<div id="circle">
											    		<span class="innerTEXT"> N </span>
													</div>
												</div>
												<div class="col-md-8">
													Name,Address
												</div>
											</div>
										</div>
										<div class="col-md-12" style="border: 2px solid gray;">
											<div class="row">
												<div class="col-md-1">
													<div id="circle">
											    		<span class="innerTEXT"> N </span>
													</div>
												</div>
												<div class="col-md-8">
													Name,Address
												</div>
											</div>
										</div>
										<div class="col-md-12" style="border: 2px solid gray;">
											<div class="row">
												<div class="col-md-1">
													<div id="circle">
											    		<span class="innerTEXT"> N </span>
													</div>
												</div>
												<div class="col-md-8">
													Name,Address
												</div>
											</div>
										</div>
										<div class="col-md-12" style="border: 2px solid gray;">
											<div class="row">
												<div class="col-md-1">
													<div id="circle">
											    		<span class="innerTEXT"> N </span>
													</div>
												</div>
												<div class="col-md-8">
													Name,Address
												</div>
											</div>
										</div>	
						    	</div>
						    	<div class="panel-footer">
						    		<div class="row">
							    		<div class="col-md-6">
							    		<a  href="#" class="btn btn-primary btn-sm">Previous </a> 
							    		</div>
							    		<div class="col-md-6">
					    				<a href = "#" class="btn btn-primary btn-sm pull-right">Next </a>
					    				</div>
				    				</div>
						    	</div>
						    </div>
						</div>
				    </div>
			    </div>
PAGEDOC;
			echo $showpage;
			$footer = new BFooter();
			$footer->display();
		}
	} 
	$page = new StudDashboard();
	$page->display();
?>