<?php
	class Utils {
		static function isMailIdValid($mailid){
			$v = "/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+.[A-Za-z]{2,4}$/";
			if(preg_match($v, $mailid)){
				return true;
			}
			return true;				
		}

		static function getUserType($val) {
			$userType = STUDENT;
			$str = trim(strtolower($val));
			switch ($str){
				case 'tutor': 
				case 't':
					$userType =  TUTOR;
					break;
				case 'student':
				case 's':
					$userType =  STUDENT;
					break;
			}
			return $userType;
		}
	}

	function struuid($entropy)
	{
	    $s=uniqid("",$entropy);
	    $num= hexdec(str_replace(".","",(string)$s));
	    $index = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $base= strlen($index);
	    $out = '';
	        for($t = floor(log10($num) / log10($base)); $t >= 0; $t--) {
	            $a = floor($num / pow($base,$t));
	            $out = $out.substr($index,$a,1);
	            $num = $num-($a*pow($base,$t));
	        }
	    return $out;
	}

	//echo struuid(false); //Return sample: F4518NTQTQ
	//echo struuid(true);  //Return sample: F451FAHSUCD90N6YNRBQHLZ9E1W

?>