<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("feedback", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$uno = $_POST['uno'];
$Month1 = $_POST['Month1'];
$Month2 = $_POST['Month2'];
$Month3 = $_POST['Month3'];
$Month4 = $_POST['Month4'];
$Month5 = $_POST['Month5'];
$Month6 = $_POST['Month6'];
$overall = $_POST['overall'];
$comments = $_POST['comments'];
$name = $_POST['name'];
$email = $_POST['email'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into student_feedback(uno,Month1,Month2,Month3,Month4,Month5,Month6,overall,comments,name,email) VALUES('" . $uno . "','" . $Month1 . "','" . $Month2 . "','" . $Month3 . "','" . $Month4 . "','" . $Month5 . "','" . $Month6 . "','" . $overall . "','" . $comments . "','" . $name . "','" . $email . "')");
//echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
//echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
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
              
              <h1 class="mb-5">Your Feedback was Submitted.</h1>
              
                <a href="home.php" class="mybutton">Home</a>
           
            </div>
          </div>
          
          <div class="col-lg-5 my-auto">
           
          <img src="img/NCI_COLOUR.png" class="img-fluid" alt="">
               
           
          </div>
        </div>
      </div>
    </header>
   </body>
   </html>