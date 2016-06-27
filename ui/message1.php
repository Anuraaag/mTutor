<?php
	
	class Message
	{
		private $errcode;
		private $msg;
		private $msgtype;

		public function __construct($errcode,$msg,$msgtype)
		{
			$this->errcode = $errcode;
			$this->msg = $msg;
			$this->msgtype = $msgtype;
		}

		public function display()
		{
			$pagestr = <<< MSGDOC
<div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Error!</strong> $this->msg
</div>
MSGDOC;
			echo $pagestr;
		}
	}
	

?>