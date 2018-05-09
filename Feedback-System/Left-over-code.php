--INDEX PAGE--

  <!--<div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
            
            <a href="register.php" class="btn btn-default" style="float:right;">Sign UP Here</a>
            
        </div>  -->
        
         <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
           <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
    	<div class="col-md-12">
        
        	<div class="form-group">
            	<h2 class="">Sign In.</h2>
            </div>
        
        	<div class="form-group">
            	<hr />
            </div>
            
            <?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group">
            	<div class="alert alert-danger">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            	<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div> 
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	<a href="register.php">Sign Up Here...</a>
            </div>
        
        </div>
   
    </form>
          </div>
        </div>
      </div>
    </section>
    
    --REGISTER--
    
     <!-- <form>
            <div class="form-group">
            
            <input type="radio" name="radio" value="male"  > Male<br>
            <input type="radio" name="radio" value="female"> Female<br>
            </div>
        </form> -->
        
        
        style="margin: 0; display: block; text-align: right;"
        
        
        
        ------HOME PAGE OLD---
        <!DOCTYPE html>
    
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/bootstrap-css.css" rel="stylesheet">
<!------ SCRIPT FOR CARDS TO WORK ---------->

<style>
button {
 border-radius: 4px;
;
  border: none;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  cursor: pointer;
  margin: 5px;
}

</style>
</head>


<body>
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Choose an Option</h5>
        <div class="row">
            
         <!-- Option 1 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/feedback.jpg" alt="card image"></p>
                                    <h4 class="card-title">Student Feedback</h4>
                                    <p class="card-text">Hover here to view feedback.</p>
                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Student Feedback</h4>
                                    <p class="card-text">Press the feedback button to view your feedback.</p>
                                    <br>
                                    <br>
                                    <br>
                                   <button> <a href="Test.php" >Feedback</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Option 2 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/input_feedback.jpg" alt="card image"></p>
                                    <h4 class="card-title">Submit Feedback</h4>
                                    <p class="card-text">Hover here to submit feedback.</p>
                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Submit Feedback</h4>
                                    <p class="card-text">Press the submit feedback button to submit feedback.</p>
                                    <br>
                                    <br>
                                    <br>
                                   <button> <a href="feedback.php" >Submit Feedback</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Option 3 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/calendar_pic.jpg" alt="card image"></p>
                                    <h4 class="card-title">Calendar</h4>
                                    <p class="card-text">Hover here to view Calendar.</p>
                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">View Calendar</h4>
                                    <p class="card-text">Press the View button too see your calendar</p>
                                    <br>
                                    <br>
                                    <br>
                                   <button> <a href="Calendar/index.php" >View Calendar</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <!-- Option 4 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/input_feedback.jpg" alt="card image"></p>
                                    <h4 class="card-title">Submit Feedback</h4>
                                    <p class="card-text">Hover here to submit feedback.</p>
                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Submit Feedback</h4>
                                    <p class="card-text">Press the submit feedback button to submit feedback.</p>
                                    <br>
                                    <br>
                                    <br>
                                   <button> <a href="feedback.php" >Submit Feedback</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
              <!-- Option 5 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/nci.jpg" alt="card image"></p>
                                    <h4 class="card-title">Useful Links</h4>
                                    <p class="card-text">National College of Irealnd.</p>
                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">NCI</h4>
                                    <p class="card-text">Visit the NCI Website for useful link such as Moodle and Library services.</p>
                                    <br>
                                    <br>
                                    <br>
                                   <button> <a href="https://www.ncirl.ie/" >Visit NCI</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Option 6 -->
             <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/loggoutt.png" alt="card image"></p>
                                    <h4 class="card-title">Logout</h4>
                                    <p class="card-text">Hover here to logout.</p>
                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Logout</h4>
                                    <p class="card-text">Press the button to logout of the system.</p>
                                    <br>
                                    <br>
                                    <br>
                                   <button> <a href="logout.php?logout" >Logout</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        </div>
    </div>
</section>

</body>
</html>

--------------FEEDBACK1.html

  <!-- <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit Feedback
			</button> 
    
        </div>-->