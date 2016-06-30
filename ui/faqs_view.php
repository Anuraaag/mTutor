<?php
require "message1.php";
/**
* 
*/
class faqs_view 
{
	public $title="mtutor - frequently asked questions";

	
}
	
	$obj=new faqs_view();


?>	

	 	<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title><?php echo $obj->title;?></title>
      <link rel="stylesheet" type="text/css" href="/mtutor/css/bootstrap.css">
      <script src="/mtutor/js/jquery.js"></script>
      <script src="/mtutor/js/bootstrap.js"></script> 
      <script src="/mtutor/js/jquery-1.12.4.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){$(".faq-ques").click(function(){
         	var iselect=$(this).children();
         	if(iselect.hasClass("glyphicon glyphicon-plus"))
         	{
         		iselect.removeClass("glyphicon glyphicon-plus");
         		iselect.addClass("glyphicon glyphicon-minus");
         	}
         	else
         	{
         		iselect.removeClass("glyphicon glyphicon-minus");
         		iselect.addClass("glyphicon glyphicon-plus");
         	}
         
              });
         });
     
	  

   </head>
    </script>
      
	  

   <body>
      <div class="container">
         <h1>FAQs</h1>
         <hr style="width: ;">
         </hr>
         <br>
         <div class="text-primary">
            <h3>Parent's/Student's FAQS  </h3>
         </div>
         <br>
         <div class="panel-group" id="accordion">
            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="faq-ques"><i class="glyphicon glyphicon-plus" style="padding-right: 0.6em;"></i>What is ....??</a>
                  </h4>
               </div>
               <div id="collapse1" class="panel-collapse collapse ">
                  <div class="panel-body">we provide you a platform to test the tutor and his/her ability.</div>
               </div>
            </div>
            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="faq-ques"><i class="glyphicon glyphicon-plus" style="padding-right: 0.6em;"></i>How is tutor evaluated?</a>
                  </h4>
               </div>
               <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </div>
               </div>
            </div>
            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="faq-ques"><i class="glyphicon glyphicon-plus" style="padding-right: 1em;"></i>Why .....?</a>
                  </h4>
               </div>
               <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="text-primary">
            <h3>Tutor's FAQS  </h3>
         </div>
         <br>
         <div class="panel-group" id="accordion">
            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="faq-ques"><i class="glyphicon glyphicon-plus" style="padding-right: 0.6em;"></i>How can I register??</a>
                  </h4>
               </div>
               <div id="collapse4" class="panel-collapse collapse">
                  <div class="panel-body">we provide you a platform to test the tutor and his/her ability.</div>
               </div>
            </div>
            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="faq-ques"><i class="glyphicon glyphicon-plus" style="padding-right: 0.6em;"></i>How is tutor evaluated?</a>
                  </h4>
               </div>
               <div id="collapse5" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </div>
               </div>
            </div>
            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="faq-ques"><i class="glyphicon glyphicon-plus" style="padding-right: 1em;"></i>How payment is done?</a>
                  </h4>
               </div>
               <div id="collapse6" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>


	
