<?php
if(isset($_POST["submit"]))
{
 
 //Including dbconfig file.
 //THIS WORKS WITH DB CONFIG.PHP
include 'db-configs/dbconfig.php';
 
$uno=$_POST["uno"];
$fullname=$_POST["fullname"];
$email=$_POST["email"];
$month=$_POST["month"];
$message=$_POST["message"];
$comments=$_POST["comments"];

mysql_query("INSERT INTO newreport (uno, fullname, email, month, message,comments) VALUES ('$uno','$fullname','$email','$month','$message','$comments')"); 

}

 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   

  <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

  <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">

    <title>Feedback System</title>
    
 <style>
      .mybutton {
	background-color:transparent;
	-moz-border-radius:42px;
	-webkit-border-radius:42px;
	border-radius:42px;
	border:2px solid #ffffff;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	padding:15px 200px;
	text-decoration:none;
	text-shadow:0px 1px 0px #000000;
}
.mybutton:hover {
	background-color:transparent;
}
.mybutton:active {
	position:relative;
	top:1px;
}
    </style>
  
  </head>

  <body id="page-top">

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              
              <h1 class="mb-5">Your Monthly Report has been submitted.</h1>
              
                <a href="home.php" class="mybutton">Home</a>
           
            </div>
          </div>
          
          <div class="col-lg-5 my-auto">
           
          <img src="img/NCI_COLOUR.png" class="img-fluid" alt="">
               
           
          </div>
        </div>
      </div>
    </header>
   