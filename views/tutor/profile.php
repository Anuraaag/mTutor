<?php
  
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

	
	class private_prof
	{
		 private $title = "mtutor - Private Profile";       	 

		public function display()
		{		   
			 	$headpage = new header();
        		$headpage->setTitle($this->title);
           		$headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));        	
        		$headpage->display();
       			$bodyheader = new Bheader();
        		$bodyheader->display();

		   $showpage = <<<PAGEDOC
<body>
	<div class="container content">
		<div class="row">							
			<div class="col-md-3 col-md-offset-2" style="margin-top:80px">
				<div class="col-md-10">
				<img src="pro_pic.jpg" style="width:125px;" class= "col-md-offset-2 img-thumbnail img-responsive" alt="profile photo">
				<a href="#"><span class="col-md-1 col-md-offset-7 fa fa-pencil" style="margin-top:-120px"  data-toggle="popover" data-trigger="hover" data-content="Change" ></span></a>
				</div>
				
				<div class="col-md-8 col-md-offset-2" >Tutor's Rating:<br>
					<span class="fa fa-star"> </span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star-half-empty"></span>
					<span class="fa fa-star-o"></span><b><br><br>
				</div>						
			

				<div class="col-md-10 thumbnail">
					  	<p style="text-align:center">Profile Completed </p>
	   	 				<div class="progress" >
	  						<div class="progress-bar  progress-bar-success progress-bar-striped active"
	  					 	role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">80%</div>
						</div>
					</div>

					<!-- progress-->

					<div class="col-md-10 thumbnail">
	                	<ul class="nav nav-pills nav-stacked">    												

	    					<li ><a data-toggle="pill" href="#reviews" > 
	    					<span class="glyphicon glyphicon-user"></span> Reviews</a></li>
	 												    
	 				    	<li><a data-toggle="pill" href="#location">
	 						<span class="glyphicon glyphicon-map-marker"></span> Location</a></li>

	    					<li><a data-toggle="pill" href="#find_students">
	    					<span class="glyphicon glyphicon-search"> </span> Find Queries  </a></li>
	    					
	    					<li><a data-toggle="pill" href="#payment_collection">
	    					<span class="glyphicon glyphicon-usd"> </span> Payment Collection </a></li>										
	  				    </ul>
	  				</div> 
	  			
	  				<form class="form-search col-md-10 thumbnail">
	  					<div class="input-append">
	  						<input type="text" class="search-query form-control col-md-10"/><br><br>
	  						<button type="button" class="btn btn-primary">Change Number</button>
	  					</div>
	  				</form>
	  			

	  				<div class="col-md-10 well well-sm" style="background-color:lightblue">
							<label> Address: </label>
						<a href="#"><span class="fa fa-pencil pull-right" data-toggle="popover" data-trigger="hover" data-content="Edit" ></span></a>
						<textarea class="col-md-12" style="font-size:12px; background-color:lightblue; border-color:lightblue" disabled> State, District, Pincode, City, Area </textarea>											
					</div>


	  				<form class="form-search col-md-10 thumbnail">
	  					<div class="input-append">
	  						<input type="text" class="search-query form-control col-md-10"/><br><br>
	  						<button type="button" class="btn btn-warning">Send Message</button>
	  					</div>
	  				</form>
	  			   				  										
				</div>  <!--end of column 1-->

				<div class="col-md-6">							
					
				<div class="col-md-9 well well-sm" style="margin-top:80px; background-color:lightblue">
					<div class="col-md-10">
						<label> Name:</label>
				    </div>
				    <a href="#"><span class="fa fa-pencil pull-right" data-toggle="popover" data-trigger="hover" data-content="Edit" ></span></a>
				    <textarea id="name" name="name" class="col-md-12" style="background-color:lightblue; font-size:12px; border-color:lightblue" disabled> Your Name </textarea>

				   <div class="col-md-10">
						<p> Gender: <a href="#"> <span class="fa fa-pencil pull-right" style="margin-right:-90px;" data-toggle="popover" data-trigger="hover" data-content="Edit" ></span></a> </p>
				    </div>	
				</div>

									
				<div class="col-md-9 well well-sm" style="background-color:lightblue">
					<div class="col-md-10">
						<label> About: </label>
				    </div>
				    <a href="#"><span class="fa fa-pencil pull-right" data-toggle="popover" data-trigger="hover" data-content="Edit" ></span></a>
				    <textarea id="about" name="about" class="col-md-12" style="height:80px; font-size:12px; border-color:lightblue; background-color:lightblue;" disabled> About Yourself
				    </textarea>	
				</div>							
				

				<div class="col-md-9 well well-sm" style="background-color:lightblue">
					<div class="col-md-10">
						<label> Experience: </label>
				    </div>
				    <a href="#"><span class="fa fa-pencil pull-right" data-toggle="popover" data-trigger="hover" data-content="Edit" ></span></a>
				    <textarea id="experience" name="experience" class="col-md-12" style="font-size:12px; border-color:lightblue; background-color:lightblue" disabled> About Your Experience </textarea>
				</div>									
													

				<div class="col-md-9 well well-sm" style="background-color:lightblue">
					<div class="col-md-10">
						<label> Educational Qualification: </label>
				    </div>
				    <a href="#"><span class="fa fa-pencil pull-right" data-toggle="popover" data-trigger="hover" data-content="Edit" ></span></a>
				    <textarea id="edu_qual" name="edu_qual" class="col-md-12" style="font-size:12px; border-color:lightblue; background-color:lightblue" disabled> Your Educational Qualification </textarea>
				</div>	

				<div class="col-md-9 well well-sm" style="background-color:lightblue">
					<div class="col-md-10">
						<label> Subjects &amp; Classes: </label>
				    </div>
				    <a href="#"><span class="fa fa-pencil pull-right" data-toggle="popover" data-trigger="hover" data-content="Edit" ></span></a>
				    <textarea id="subjects" name="subjects" class="col-md-12" style="height:50px; font-size:12px; border-color:lightblue; background-color:lightblue" disabled>Subjects:                                                                                                                     Classes/Courses:                                                                                                Board: </textarea>
				</div>
				
				<div class="col-md-9" style="border:1px solid; padding:10px 10px 10px 10px">					
					<h5 style="text-align:center">Time Slots Availability</h5>
					<div class="col-md-10 timeslot">
						<table>  	    				
		    				<div id="head_nav">
		    					<tr>
		   					        <th>Time</th>
							        <th>Mon</th>
							        <th>Tue</th>
							        <th>Wed</th>
							        <th>Thr</th>
							        <th>Fri</th>
							        <th>Sat</th>
							        <th>Sun</th>
							    </tr>
							</div>  
							<div>
							    <tr>
							        <th>Morning</th>
							        <div>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            </div>					        
							    </tr>
							    <tr>
							        <th>Noon</th>
							        <div>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							        </div>
							    </tr>

							    <tr>
							        <th>Evening</th>
							        <div>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							        </div>
							    </tr>

							    <tr>
							        <th>Night</th>
							        <div>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							        </div>
							    </tr>
							</div>
						</table>
					</div>	  		
				</div>			<!-- section end-->

  			</div>	
  	  	</div>	
  </div>	  	
PAGEDOC;
		echo $showpage;
  		$footer = new BFooter();
$script = <<<SCRIPTDOC
<script>
		$(document).ready(function(){
    		$(".nav-tabs a").click(function(){
       			$(this).tab('show');
       		});
   			$('td').click(function() 
				{
    			    if ($(this).hasClass('HighLight'))
        			{ 
            			$(this).removeClass('HighLight');
        			}
        			else
        			{
            			$(this).addClass('HighLight');
        			}
    			});

				$('[data-toggle="popover"]').popover();
           });
</script>
SCRIPTDOC;
  		$footer->addScript($script);
  		$footer->display();
	}

}

	$obj = new private_prof();
	$obj -> display();

?>

