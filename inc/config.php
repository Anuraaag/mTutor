<?php
// Define DB Params
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root123");
define("DB_NAME", "mtutor");

// Define URL
define("ROOT_PATH", "C://wamp64/www/mtutor/");
define("ROOT_URL", "http://localhost/mtutor/");
define("TUTOR", "T");
define("STUDENT", "S");

class config {
	public static $debug = TRUE;
	private static $base_uri = ".";
	private static $logging_enabled = FALSE;
	$cfg['Servers'][$i]['password'] = ''; to $cfg['Servers'][$i]['password']  = 'yourPassHere';


	static function setdebugflag(){
		//ini_set("error_log", "/tmp/php-error.log");
		if (self::$debug == TRUE) { 
			ini_set('display_errors', '1');
			error_reporting(E_ALL);
			ini_set("log_errors", 1);
		}
		else
			ini_set('display_errors', '0');			
	}
}
//echo "test config";

?>

