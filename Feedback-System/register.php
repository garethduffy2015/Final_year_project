<?php
ob_start();
session_start();

require_once 'db-configs/dbconnect.php';

$error = false;

if(isset($_POST['btn-signup'])) {
	
	$uname = strip_tags($_POST['first_name']);
	$surname = strip_tags($_POST['surname']);
	$uno = strip_tags($_POST['studentno']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	
	$uname = $DBcon->real_escape_string($uname);
	$surname = $DBcon->real_escape_string($surname);
	$uno = $DBcon->real_escape_string($uno);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	
	$check_email = $DBcon->query("SELECT Email FROM tbl_users WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO tbl_users(first_name,surname,studentno,email,password) VALUES('$uname','$surname','$uno','$email','$hashed_password')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered.
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering.
					</div>";
		}
		
	} else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken.
				</div>";
			
	}
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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">
    
    <title>Feedback System</title>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Work Placement Feedback</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu
            <i class="fa fa-bars"></i> </button>
       
              <div class="collapse navbar-collapse" id="navbarResponsive">
          
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php">Mainpage</a>
                  </li>
            
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php">Login</a>
                  </li>
            
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
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
              </div>
          </div>
          
          
          <div class="signin-form">
            <div class="container">
	            <br> <br> <br> <br> <br> <br> 

                 <form class="form-signin" method="post" id="register-form">
      
                    <h2 class="form-signin-heading">Registration</h2><hr />
        
                       <?php
	      	                if (isset($msg)) {
		      	              echo $msg;
	                      	}
		                    ?>
          
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name" name="first_name" required  />
                      </div> <br>
                              
                       <div class="form-group">
                        <input type="text" class="form-control" placeholder="Surname" name="surname" required  />
                      </div> <br>
        
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Student/Staff Number" name="studentno"/>
                      </div>  <br>
       
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email address" name="email" required  />
                          <span id="check-e"></span>
                      </div> <br>
        
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" minlength="6" required  />
                      </div>
        
                     	<hr /> <br>
        
                      <div class="form-group">
                        <button type="submit" class="btn btn-default" name="btn-signup">
    	                  	<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			                  </button> 
                          <a href="index.php" class="btn btn-default" style="float:right;">Log In Here</a>
                      </div> 
                        <br> <br> <br> <br> <br>
     
                  </form>
                </div>
            </div>
         </div>
      </div>
  </div>
</header>
 
<footer>
      <div class="container">
        <p>&copy; 2018 Gareth Duffy. All Rights Reserved.</p>
          </div>
            </footer>
 </body>
</html>
<?php ob_end_flush(); ?>