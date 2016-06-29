<?php
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

class AboutView {
  private $title = "mTutor - About Us";
	function display() {
    $headpage = new header();
    $headpage->setTitle($this->title);
    if (config::$debug == TRUE)
      $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));
    else
      $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min"));
    $headpage->display();

    $bodyheader = new Bheader();
    $bodyheader->display();

    $showPage = <<<PAGECONTENT
  <!-- start main content -->
  <div class="container content"> 
      <h2>About Page Content comes here</h2><br><br><br><br><br><br><br><br><br><br>
  </div>
  <!-- end main content -->
PAGECONTENT;
		echo $showPage;
    $footer = new BFooter();
    $footer->display();
	}
}

  config::setdebugflag();
  $page = new AboutView();
  $page->display();
?>