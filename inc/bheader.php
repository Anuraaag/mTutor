<?php 
  	//include_once ('./config.php'); 

	class BHeader {
    private $links = array('Login', '/user/login', 'Register', '/user/register');

    public function __construct() {
      $this->links[1] = ROOT_URL.'user/login';
      $this->links[3] = ROOT_URL.'user/register';
      $this->links[4] = ROOT_URL.'home/about';
      $this->links[5] = ROOT_URL.'home/index';
      $this->links[6] = ROOT_URL.'home/contact';
      $this->links[7] = ROOT_URL.'user/logout';
    }

		function display() {
			$showPage = <<<PAGECONTENT
<body>
  <!--- start header -->
  <header>
    <!-- Fixed navbar -->
    <div class="navbar navbar-fixed-top" role="navigation">
      <div class="navbar-inner">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">mTutor Project</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{$this->links[5]}">Home</a></li>
              <li><a href="{$this->links[4]}">About</a></li>
              <li><a href="{$this->links[6]}">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{$this->links[1]}">{$this->links[0]}</a></li>
              <li><a href="{$this->links[3]}">{$this->links[2]}</a></li>
              <li><a href="{$this->links[6]}">Log Out</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  </header>
PAGECONTENT;
		echo $showPage;
		}
	}
	
/** unit test ***	
	$page = new Bheader();
	$page->display();
***/
?>