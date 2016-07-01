<?php
	
	include_once ('inc/header.php');
  	include_once ('inc/bheader.php');
  	include_once ('inc/bfooter.php');

	
	class searchpgview
	{
		private $title = "mtutor - Search";

		public function display()
		{
			 	$headpage = new header();
        		$headpage->setTitle($this->title);
           		$headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));        	
        		$headpage->display();
       			$bodyheader = new Bheader();
        		$bodyheader->display();
		   
		   $showpage = <<< PAGEDOC
		   <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Search mTutor</title>
<link rel="stylesheet" type="text/css" href="/mtutor/css/bootstrap.css">
<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script-->

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

	<div class="container" style="padding-top: 150px">
		<div class="col-md-8 col-md-offset-2" >
			<div class="panel panel-danger">
			  <div class="panel-heading">
			  	Search for Tutors/Students
			  </div>
				<div class="panel-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="subject" class="col-md-2">Subject</label>
							<div class="col-md-10">
								<input type="text" class="form-control" id="class" name="class" placeholder="Subjects" />		
							</div>
						</div>
						<div class="form-group">
							<label for="class" class="col-md-2">Class</label>
							<div class="col-md-10">
								<input type="text" class="form-control" id="class" name="class" placeholder="Class" />
							</div>
						</div>
						<div class="form-group">
							<label for="board" class="col-xs-2">Board</label>
							<div class="col-md-10">
								<input type="text" class="form-control" id="board" name="board" placeholder="Board" />
							</div>
						</div>
						<div class="form-group">
							<label for="location" class="col-xs-2">Location</label>
							<div class="col-md-10">
								<input type="text" class="form-control" id="location" name="location" placeholder="Location" />
							</div>
						</div>
					
						<div class="col-md-10 col-md-offset-2">
							<button type="submit" class="btn btn-primary">Search</button>
				 			<button type="reset" class="btn btn-default">Reset</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
	<script src="/mtutor/js/jquery-1.12.4.js"></script>
	<script src="/mtutor/js/bootstrap.js"></script>	
</body>
</html>

PAGEDOC;
		echo $showpage;
		$footer = new BFooter();
  		$footer->display();
		}	

	}

	$obj = new searchpgview();
	$obj -> display();

?>
