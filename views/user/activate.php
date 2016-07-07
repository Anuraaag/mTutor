<?php
	include_once ('inc/header.php');
	include_once ('inc/bheader.php');
	include_once ('inc/bfooter.php');

	/**
	* 
	*/
	class register_ack_view
	{
		private $title = "mTutor - Account Activation";
		private $links = array();
		private $message;

		public function __construct() {
			$this->links[0] = ROOT_URL.'/img/tick.png';
		}

		public function setMessage($msg) {
			$this->message = $msg;
		} 

		public function display()
		{
		    $headpage = new header();
		    $headpage->setTitle($this->title);
		    if (config::$debug == TRUE)
		      $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));
		    else
		      $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min"));
		    $headpage->display();

		    $bodyheader = new Bheader();
		    $bodyheader->display();

			$showpage=<<< PAGEDOC
<div class="container content"> 
  <div class="panel panel-default col-md-offset-3 col-md-5 col-xs-12 col-xs-offset-0" style="margin-left: 325px">
    <h2 class="text-center col-xs-12" style="height: 50px">Thanks for registering!!</h2>
    <div class="panel-body col-xs-12 col-xs-offset-0">
 
    <div class="col-lg-2  col-md-10 col-md-offset-4 col-sm-6 col-xs-6 col-xs-offset-5" style="height: 70px; width: 150px">
    <img src="{$this->links[0]}" class="img-responsive" style="height: 100%; width: 200%" >
    </div>
    
    <div class="col-md-12">     
  		<h2>{$this->message}</h2>
    </div>
		
		<a href="#" class="btn btn-info btn-lg col-md-4 col-md-offset-4">
      <span class="glyphicon glyphicon-ok " style="text-align: center;"></span> Ok
    </a>
  </div>
  </div>
</div>
</body>
</html> 
PAGEDOC;
		echo $showpage;
		$footer = new BFooter();
		$footer->display();
		}
	}
	$obj= new register_ack_view();
	$obj->setMessage($viewmodel);
	$obj->display();
?>	