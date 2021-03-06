
<?php
require "message1.php";
/**
* 
*/
class student_reg_view
{
	public $title="mtutor-profile registeration of student";

	
}
	
	$obj=new student_reg_view();


?>	
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo $obj->title;?></title>
  <link rel="stylesheet" type="text/css" href="/mtutor/css/bootstrap.css">
  <script src="/mtutor/js/jquery-1.12.4.min.js"></script>
<script src="/mtutor/js/bootstrap.js"></script>


<script src="/mtutor/js/jquery.sumoselect.js"></script>
    <link href="/mtutor/css/sumoselect.css" rel="stylesheet" />

    <script type="text/javascript">
        $(document).ready(function () {
            window.asd = $('.SlectBox').SumoSelect({ csvDispCount: 3, captionFormatAllSelected: "All selected." });
           
            

            
        });
    </script>

</head>
<body>
<div class="container">
<br>
 
<div class = "panel panel-primary" style="width: 60%; margin: auto;">
<div class = "panel-heading" style="font-size: 1.5em;">
          STUDENT REGISTRATION'S FORM
        </div>
  <br>
      <form class="form-horizontal" action="doRegister.php" method="post">
              <div class="form-group" >
              <label for="nameField" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Name</label>
              <div class="col-md-5 col-xs-4">
                <input type="text" class = "form-control" id = "nameField" placeholder="Your name" name="fieldName" required />
              </div>
              </div>
              <div class="form-group">
              
              <label for="gender" class="col-md-4 col-xs-2" style="padding-left: 2em;">Gender</label>
                <label class= "col-md-3 col-xs-2">   
                  Male <input class="col-md-3 col-xs-4" type="radio" value="Male" name = "gender"/>
                </label>
               
                <label class= "col-md-3 col-xs-2">   
                  Female <input class="col-md-3 col-xs-4" type="radio" value="Female" name = "gender">
                </label>
               
              </div>

              <div class="form-group" >
              <label for="nameField" class="col-md-4 col-xs-2" style="padding-left: 2em;"> School Name</label>
              <div class="col-md-5 col-xs-4">
                <input type="text" class = "form-control" id = "schoolField" placeholder="Your school name" name="fieldName" required />
              </div>
              </div>
              <div class="form-group">
              <label for="classes" class="col-md-4 col-xs-2" style="padding-left: 2em;">Class</label>
              <div class="col-md-3 col-xs-4">
              <select class="SlectBox" placeholder="Class" required="required">
                <option value="12th">XII</option>
                <option value="11th">XI</option>
                <option value="10th">X</option>
                <option value="9th">IX</option>
                <option value="8th">VII</option>
              </select>
              </div>
              
              </div>
              <div class="form-group">
              <label for="subject" class="col-md-4 col-xs-2 "style="padding-left: 2em;"> Subjects</label>
              <div class="col-md-7 col-xs-4">
                <select multiple="multiple" placeholder="Subjects" class="SlectBox" style="" required>
       <option value="Physics">Physics</option>
       <option value="History">History</option>
       <option value="English">English</option>
       <option value="Maths">Mathematics</option>
       <option value="Chemistry">Chemistry</option>
            </select>

              </div>
              </div>
<div class="form-group" >
              <label for="phnoField" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Phone Number</label>
              <div class="col-md-5 col-xs-4">
                <input type="text" class = "form-control" id = "phoneno" placeholder="Your Phone number" name="Phoneno" required />
              </div>
              </div>
<div class="form-group" >
              <label for="Address" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Address</label>
              <div class="col-md-5 col-xs-4">
                <input type="text" class = "form-control" id = "Address" placeholder="Your Address" name="fieldAddress" required />
              </div>
              </div>
              <div class="form-group" >
              <label for="cityField" class="col-md-4 col-xs-2" style="padding-left: 2em;"> City</label>
              <div class="col-md-5 col-xs-4">
                <input type="text" class = "form-control" id = "cityField" placeholder="Your city" name="fieldCity" required />
              </div>
              </div>
              <div class="form-group" >
              <label for="pincode" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Pincode</label>
              <div class="col-md-5 col-xs-4">
                <input type="text" class = "form-control" id = "pincode" placeholder="Pincode" name="fieldPincode" required />
              </div>
              </div>
                <div class="form-group">
              <label for="emailField" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Email-id</label>
              <div class="col-md-5 col-xs-4">
                <input type="email" class = "form-control" id = "emailField" placeholder="Your email-id" name="fieldEmail" required/>
              </div>
              </div>
                <div class="form-group">
              <label for="passField" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Password</label>
              <div class="col-md-5 col-xs-4">
                <input type="password" class = "form-control" id = "passField" placeholder="Password" name="fieldPassword" required/>
              </div>
              </div>

<div class="panel-footer">
            
            <button type = "submit" class="btn btn-primary btn-sm" onsubmit="return validateall()" style="width: 10em;">Submit </button>
            
          
      </div>

              </form>
      </div>
  </div>
   </body>
   </html>