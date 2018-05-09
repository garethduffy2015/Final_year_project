<?php
ob_start();
session_start();
require_once 'dbconnect.php';

$error = false;

if (isset($_POST['btn-login'])) {
	
	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);
	
	$email = $DBcon->real_escape_string($email);
	$password = $DBcon->real_escape_string($password);
	
	$query = $DBcon->query("SELECT * FROM tbl_users WHERE email='$email'");
	$query = $DBcon->query("SELECT * FROM tbl_admin WHERE email='$email'");
	$row=$query->fetch_array();
	
	$count = $query->num_rows; // if email/password are correct returns must be 1 row
	
	if (password_verify($password, $row['password']) && $count==1) {
		$_SESSION['userSession'] = $row['user_id'];
		header("Location: home.php");
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
				</div>";
	}
	$DBcon->close();
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/new-age.css" rel="stylesheet">

  <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

  <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">


    <title>Feedback System</title>
    
     <style type="text/css">

	#register1 {
			           float: left;
                 width: 50%;
                 height: 50%;
}
    #register2 {
                 float: right;
                 width: 50%;
                 height: 50%;
                
}
</style>
  
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      
      <div class="container">
        
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Work Placement Feedback</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu
          <i class="fa fa-bars"></i> </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Login</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Register</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              
              <h1 class="mb-5">National College of Ireland Work Placement Feedback System.</h1>
              <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Login</a>
            
            </div>
          </div>
          
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              
                <div class="device">
                  <div class="screen">
                    <!--image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="img/NCI_COLOUR.png" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </header>
    
    
    <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
           <div class="signin-form">
             	<div class="container">
     <br>
     <br>
     <br>
     <br>
        
           <form class="form-signin" method="post" id="login-form">
      
              <h2 class="form-signin-heading">Sign In.</h2><hr />
        
                   <?php
	                	if(isset($msg)){
		                	echo $msg;
	                   	}
	                     ?>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        </div>
       
         	<hr />
     	
     	<div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
            </div>
      
      </form>
      
      <br>
      <br>
      <br>
      <br>

            </div>
           </div>
         </div>
        </div>
      </div>
    </section>
    
     <section class="download bg-primary text-center" id="features">
      <div class="container">
       
          
             	<div class="container">
     <br>
         <h2 class="form-signin-heading">Register.</h2><hr />
         <br>
         <br>
         <p class="text-muted">Registration is quick and easy</p>
        
        <br>
          <br>
          <br>
           <div id="register1">
                <a href="register.php" class="btn btn-primary btn-lg"> Student Registration </a> 
                </div>
                <div id="register2">
                  <a href="registeradmin.php" class="btn btn-primary btn-lg"> Staff Registration </a>
                </div>
         <br>
         <br>
         <br>
            
           
        
      </div>
    </section>
  
    
   

    <section class="contact bg-primary" id="contact">
      <div class="container">
        <br>
        <br>
        <h3><i></i>Working in conjunction with National College of Ireland</i></h3>
          <br>
          <br>
          <ul class="list-inline list-social">
              <li class="list-inline-item social-twitter">
                <h6>Twitter</h6>
                  <a href="https://twitter.com/?lang=en">
                    <br>
                     <i class="fa fa-twitter"></i>
                      </a>
                        </li>
          
              <li class="list-inline-item social-facebook">
                <h6>Facebook </h6>
                  <a href="https://www.facebook.com/">
                    <br>
                    <i class="fa fa-facebook"></i>
                      </a>
                        </li>
                        
              <li class="list-inline-item social-google-plus">
                <h6> NCI    </h6>
                  <a href="https://www.ncirl.ie/">
                    <br>
                    <i class="fa fa-google-plus"></i>
                      </a>
                        </li>
                        
        </ul>
        <br>
        <br>
        <br>
        <br>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; 2018 Gareth Duffy. All Rights Reserved.</p>
          </div>
            </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

</html>
<?php ob_end_flush(); ?>
