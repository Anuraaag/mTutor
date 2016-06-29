<?php
class Messages{
	public static function setMsg($text, $type){
		if($type == 'error'){
			$_SESSION['errorMsg'] = $text;
		} else {
			$_SESSION['successMsg'] = $text;
		}
		return;
	}

	public static function display(){
		if(isset($_SESSION['errorMsg'])){
			echo '<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a>'.$_SESSION['errorMsg'].'</div>';
			unset($_SESSION['errorMsg']);
		}

		if(isset($_SESSION['successMsg'])){
			echo '<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert">&times;</a>'.$_SESSION['successMsg'].'</div>';
			unset($_SESSION['successMsg']);
		}
		return;
	}
}