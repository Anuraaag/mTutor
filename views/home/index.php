<?php
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

class IndexView {
    private $links = array('/user/register', '/user/register');
    private $title = 'mTutor - Home Page';

    public function __construct() {
      $this->links[0] = ROOT_URL.'user/login';
      $this->links[1] = ROOT_URL.'user/register';
    }

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
      <h2>Main Page Content comes here</h2><br><br><br><br><br><br><br><br><br><br>
      <div class="row">
        <div class="col-md-4">
          <figure class="figure">
            <img src="/mtutor/img/math.jpg" class="figure-img img-fluid img-rounded">
            <figcaption class="figure-caption" style="font-family: Berlin Sans FB; font-size: 22px; color: darkgreen;">Need a tutor who can help you in solving Maths problems? <a href="{$this->links[1]}">Register Here.</a></figcaption>
          </figure>
        </div>
        <div class="col-md-4">
          <figure class="figure">
            <img src="/mtutor/img/ballet.jpg" class="figure-img img-fluid img-rounded">
            <figcaption class="figure-caption" style="font-family: Berlin Sans FB; font-size: 22px; color: darkgreen;">Want to enhance your passion? Join here. <a href="{$this->links[1]}">Register Now.</a></figcaption>
          </figure>
        </div>
        <div class="col-md-4">
          <figure class="figure">
            <img src="/mtutor/img/chemistry.jpg" class="figure-img img-fluid img-rounded">
            <figcaption class="figure-caption" style="font-family: Berlin Sans FB; font-size: 22px; color: darkgreen;">Practical Help Professionals are provided. <a href="{$this->links[1]}">Register youself</a> and gain more accurate knowledge.</figcaption>
          </figure>
        </div>
    </div>
    <!-- second row starts -->
    <div class="row">
      <div class="col-md-4">
        <span style="font-size: 60px;" class="glyphicon glyphicon-thumbs-up"><p style="font-family: Berlin Sans FB; font-size: 43px; color: magenta;">4000 Tutors Available</p> </span>
      </div>
      <div class="col-md-4">
        <span style="font-size: 60px;" class="glyphicon glyphicon-thumbs-up"> <p style="font-family: Berlin Sans FB; font-size: 43px; color: magenta;">10000 Students Registered </p> </span>
      </div>
      <div class="col-md-4">
        <span style="font-size: 60px;" class="glyphicon glyphicon-thumbs-up"><p style="font-family: Berlin Sans FB; font-size: 43px; color: magenta;">5000 Subscribed Users </p></span>
      </div>
      <hr>
    </div>     
  </div>
  <!-- end main content -->
PAGECONTENT;
		echo $showPage;
    $footer = new BFooter();
    $footer->display();
	}
}

  config::setdebugflag();
  $page = new IndexView();
  $page->display();
?>