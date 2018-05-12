<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">
    
    <!------ SCRIPT FOR CARDS TO WORK ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/bootstrap-css.css" rel="stylesheet">


<style>

button {
	background-color:transparent;
	-moz-border-radius:42px;
	-webkit-border-radius:42px;
	border-radius:42px;
	border:1px solid #10801b;
	display:inline-block;
	cursor:pointer;
	color:#10801b;
	font-family:Arial;
	font-size:20px;
	padding:18px 47px;
	text-decoration:none;
}
button:hover {
	background-color:transparent;
}
button:active {
	position:relative;
	top:1px;
}


</style>
    
    <title>Feedback System</title>

  </head>

  <body id="page-top">
      
      
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      
      <div class="container">
        
        <a class="navbar-brand js-scroll-trigger">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu
          <i class="fa fa-bars"></i> </button>
          
          <div class="collapse navbar-collapse" id="navbarResponsive">
          
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="color:#007b5e;" src="img/loggoutt.png" href="logout.php?logout">Logout</a>
            </li>
</ul>
</div>
</div>
</nav>
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
                                    <h4 class="card-title">Student Hub</h4>
                                    <p class="card-text">Hover Over here to see your Options.</p>
                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Submit a New Monthly Report</h4>
                                   <button> <a href="createreport.php" >New Report</a></button>
                                   <h4 class="card-title">View Monthly Feedback</h4>
                                   <button> <a href="viewfeedback.php" >Feedback</a></button>
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
                                    <h4 class="card-title">Supervisor Hub</h4>
                                    <p class="card-text">Hover here to see your Options.</p>
                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Submit Feedback</h4>
                                   <button> <a href="supervisor-feedback-input.php" >Submit Feedback</a></button>
                                   <h4 class="card-title">Edit Students Feedback</h4>
                                 <button> <a href="editfeedback.php" >Edit Feedback</a></button>
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
                                    <p><img class=" img-fluid" src="img/3men.jpg" alt="card image"></p>
                                    <h4 class="card-title">Skills & Technologies</h4>
                                    <p class="card-text">Hover here to Skills & Technologies.</p>
                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Students Skills & Technologies</h4>
                                    <p class="card-text">See What Skills & Technologies students used.</p>
                                    <br>
                                    <br>
                                   
                                   <button> <a href="skills&tech.php" >Skills & Tech</a></button>
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
                                    <p><img class=" img-fluid" src="img/chat.png" alt="card image"></p>
                                    <h4 class="card-title">Chat Room</h4>
                                    <p class="card-text">Hover here to enter chatroom.</p>
                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Chat Room</h4>
                                    <p class="card-text">Press the button to enter the Chat Room.</p>
                                    <br>
                                    <br>
                                   
                                   <button> <a href=".php" > Enter Chatroom</a></button>
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
                                    <p class="card-text">Hover here to view useful links.</p>
                    
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
                                   
                                   <button> <a href="Calendar/index.php" >View Calendar</a></button>
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