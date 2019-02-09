<?php
  	include_once ('inc/header.php');
  	include_once ('inc/bheader.php');
  	include_once ('inc/bfooter.php');

	class StudDashboard {

		private $title ="mTutor- Student Dashboard";
		public function __construct() {
		  $this->links[0] = ROOT_URL.'img/pro_pic.png';
		  $this->links[1] = ROOT_URL.'stud/update';
		  $this->links[2] = ROOT_URL.'user/getsubjectlist/';
		  $this->links[3] = ROOT_URL.'user/getclasslist/';
		   
		  //TODO.. get pk from student table
		  $this->pk='s1234';
		}

		public function display(&$data){
			$headpage = new header();
			$headpage->setTitle($this->title);
			if (config::$debug == TRUE)
			  $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome", "bootstrap-editable", "select2", "select2-bootstrap"));
			else
			  $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min", "bootstrap-editable.min", "selec2.min", "select2-bootstrap"));
			$headpage->display();

			$bodyheader = new Bheader();
			$bodyheader->display();
			$showpage = <<< PAGEDOC
			    <div class="container content">
			    	<h2 class="text-center"> DASHBOARD - STUDENT </h2>
				    <div class="row">
					    <div class="col-md-3">
					    	<div class="panel panel-default">
					    		<div class="panel-heading">
					    			<img src="/mtutor/img/pro_pic.png" class="img-responsive img-thumbnail center-block"><br>
					    			<p class="text-center">{$data['name']}<br>
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
					    	<div class="row">
					    		<!--add profile-->
					    		<div class="col-md-10 well well-sm">					    			
					    			<p><label for="address"> Email: </label>
					    			<a href="#" id="email" data-type="text" data-rows="2" data-title="Enter email">{$data['email']}</a></p> 
					    			<p><label for="address"> Address: </label>
					    			<a href="#" id="address" data-name="address" data-type="textarea" data-url="{$this->links[1]}" data-rows="2" data-title="Enter address" data-pk="{$this->pk}">{$data['address']}</a></p> 				
					    			<p><label for="gender">Pincode:</label>
					    			<a href="#" id="pincode" data-name="pincode" data-type="text" data-url="{$this->links[1]}" data-rows="2" data-title="Enter pincode" data-pk="{$this->pk}">{$data['pincode']}</a> </p>
					    			<p><label for="city"> City: </label>
					    			<a href="#" id="city" data-name="city" data-type="text" data-url="{$this->links[1]}" data-rows="2" data-title="Enter city" data-pk="{$this->pk}">{$data['city']}</a> </p>					    			
					    			<p><label for="state">State:</label>
					    			<a href="#"  id="state" data-name="state" data-type="text" data-url="{$this->links[1]}" data-rows="2" data-pk="{$this->pk}" data-title="Enter state">{$data['state']}</a> </p>
					    			<p><label for="gender">Gender:</label>
					    			<a href="#"  id="gender" data-type="select" data-url="{$this->links[1]}" data-pk="{$this->pk}" data-title="Enter Gender"></a></p>
					    			<p><label for="school">School Name:</label>
					    			<a href="#"  id="school" data-type="text" data-url="{$this->links[1]}" data-pk="{$this->pk}" data-title="Enter School">{$data['school']}</a> </p>
					    			<p><label for="class">Class:</label>
					    			<a href="#"  id="class" data-type="select2" data-url="{$this->links[1]}" data-pk="{$this->pk}" data-rows="2" data-value="{$data['class']}"  data-title="Enter School"></a> </p>
					    			<p><label for="subjects">Subjects:</label>
					    			<a href="#"  id="subjects" data-type="select2" data-url="{$this->links[1]}" data-pk="{$this->pk}" data-value="{$data['subjectids']}" data-title="Enter Subjects">{$data['subjects']}</a> </p>
					    			<p><a href="#" id="country" data-type="select2" data-pk="1" data-value="ru" data-url="/post" data-title="Select country"></a></p>
					    			<p><a href="#" id="country1" data-type="select2" data-pk="1" data-value="ru, gb" data-url="/post" data-title="Select country"></a></p>
					    			<form class="form-horizontal" action="doprofile.php" method="post">
					    			  	<div class="form-group">
						    			  <label for="fieldSubject" class="col-md-2 col-xs-2 "style="padding-left: 1em;">Subjects: </label>
						    			  <div class="col-md-7 col-xs-4">
						    			    <select multiple="multiple" placeholder="Subjects" id="fieldSubject" name="fieldSubject[]" class="subjectname form-control" disabled>
						    			      <option value="3620194" selected="selected">select2/select2</option>
						    			      <option value="317757" selected="selected">Modernizr/Modernizr</option>
						    			    </select>
						    			  </div>
						    			  <button id="btnSubmit" type = "submit" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-ok"></i></button>
						    			  <button id="btnCancel" type = "reset" class="btn btn-sm"><i class="glyphicon glyphicon-remove"></i></button>
						    			  <button id="btnEdit" class="btn btn-sm"><i class="glyphicon glyphicon-pencil"></i></button>						    			  
					    			  	</div>
					    			 </form>
					    		</div>
					    		<!--end profile-->
					    	</div>
					    	<div class="row">
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
						</div> <!-- End of Row-->
				    </div>
			    </div>
PAGEDOC;
			echo $showpage;
			$footer = new BFooter();
			if (config::$debug == TRUE)
				$footer->addScript('<script src="/mtutor/js/bootstrap-editable.js"></script>');
			else
				$footer->addScript('<script src="/mtutor/js/bootstrap-editable.min.js"></script>');
			if (config::$debug == TRUE)
				$footer->addScript('<script src="/mtutor/js/select2.full.js"></script>');
			else
				$footer->addScript('<script src="/mtutor/js/select2.full.min.js"></script>');

			$script = <<<SCRIPTDOC
<script>
			$(document).ready(function(){
				$.fn.editable.defaults.mode = 'inline';
				$('#gender').editable({
					value: '{$data['gender']}',    
					source: [
						{value: 'M', text: 'Male'},
						{value: 'F', text: 'Female'},
					]				
				});
				$('#subjects').editable({
					inputclass: 'input-large',
					select2: {
					    tags: ['Hindi', 'English', 'Mathematics', 'Environmental Studies', 'Geography', 'Sanskrit', 'Physics', 'Chemistry'],
					    tokenSeparators: [",", " "]
					}
				});
				$('#class').editable({
					source: [
			            {"id":"c012","text":"Class 12"},
			            {"id":"c011","text":"Class 11"},
			            {"id":"c010","text":"Class 10"},
			            {"id":"c009","text":"Class 9"},
			            {"id":"c008","text":"Class 8"},
			            {"id":"c007","text":"Class 7"},
			            {"id":"c004","text":"Class 4"},
			            {"id":"c003","text":"Class 3"},
			            {"id":"c002","text":"Class 2"},
			            {"id":"c001","text":"Class 1"}],
					select2: {
						placeholder: 'Select Class',
						minimumInputLength: 2
					}
				});

				$('#country').editable({
				    source: [
				          {id: 'gb', text: 'Great Britain'},
				          {id: 'us', text: 'United States'},
				          {id: 'ru', text: 'Russia'}
				       ],
				    select2: {
				       multiple: true
				    }
				});


				$('#address').editable();
				$('#pincode').editable();
				$('#city').editable();
				$('#state').editable();
				$('#school').editable();

				$( ".subjectname" ).select2({        
				    ajax: {
				        url: function (params) {
				          console.log(params.term);
				          return "{$this->links[2]}" + params.term;
				        },
				        dataType: 'json',
				        delay: 250,
				        data: function (params) {
				            return;
				        },
				        processResults: function (data) {
				            // parse the results into the format expected by Select2.
				            // since we are using custom formatting functions we do not need to
				            // alter the remote JSON data
				            return {
				                results: data
				            };
				        },
				        cache: true
				    },
				    minimumInputLength: 2,
				    maximumSelectionLength: 4,
				}); 

				$('#country1').editable({
				    select2: {
				        placeholder: 'Select Country',
				        allowClear: true,
				        minimumInputLength: 3,
				        id: function (item) {
				            return item.CountryId;
				        },
				        ajax: {
				            url: '/getCountries',
				            dataType: 'json',
				            data: function (term, page) {
				                return { query: term };
				            },
				            results: function (data, page) {
				                return { results: data };
				            }
				        },
				        formatResult: function (item) {
				            return item.CountryName;
				        },
				        formatSelection: function (item) {
				            return item.CountryName;
				        },
				        initSelection: function (element, callback) {
				            return $.get('/mtutor/ui/getCountryById.php', { query: element.val() }, function (data) {
				                callback(data);
				            });
				        } 
				    }  
				});

				$('#btnSubmit').hide();
				$('#btnCancel').hide();
				
				$('#btnEdit').click(function(){
					$("#fieldSubject").attr('disabled', !$("#fieldSubject").attr('disabled'));
					$('#btnEdit').hide();
					$('#btnSubmit').show();
					$('#btnCancel').show();
            		return false;
				});
				
				$('#btnCancel').click(function(){
					$("#fieldSubject").attr('disabled', !$("#fieldSubject").attr('disabled'));
					$('#btnEdit').show();
					$('#btnSubmit').hide();
					$('#btnCancel').hide();
					return false;
				});


			 });

</script>
SCRIPTDOC;
			$footer->addScript($script);
			$footer->display();
		}
	} 
	$page = new StudDashboard();
	$page->display($viewmodel);
?>