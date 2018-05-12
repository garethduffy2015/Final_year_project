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
    
     <meta charset="utf-8">
      
       
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
                      <a class="nav-link js-scroll-trigger" href="home.php">Back</a>
                    </li>
            
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="home.php">Mainpage</a>
                    </li>
            
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="logout.php?logout">Logout</a>
                    </li>
         
          </ul>
        </div>
      </div>
    </nav>

  <header class="masthead" style="height: auto;">
     <div class="row">
        <div class="col-md-6 col-md-offset-3">
           <br> <br> <br> <br>
                    
              <h2 style=" margin-left: 47%;">Create A Monthly Report.</h2>
                    
                
                <form role="form" action="newreportthankyou.php" method="post" id="reused_form" style="width:100%; height:100%; margin-left: 50%;">
                   
                    <div class="row">
                        
                        <div class="col-sm-6 form-group" >
                          <label for="uno"> Student Number:</label>
                            <input type="text" class="form-control" id="uno" name="uno" maxlength="50">
                        </div>
                            
                        <div class="col-sm-6 form-group">
                          <label for="fullname"> Full Name:</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" maxlength="50">
                        </div>
                    </div>
                        
                    <div class="row">
                          
                        <div class="col-sm-6 form-group">
                          <label for="email"> Email:</label>
                            <input type="text" class="form-control" id="email" name="email" maxlength="50">
                        </div>
                           
                         <div class="col-sm-6 form-group">
                           <label for="month"> Month:</label>
                           <input type="text" class="form-control" id="month" name="month" maxlength="50">
                         </div>
                         
                    </div>
                    
                    <div class="row">
                      
                        <div class="col-sm-12 form-group">
                          <label for="message"> Student Report:</label>
                            <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                        </div>
                        
                    </div>
                    
                    <div class="row">
                          
                        <div class="col-sm-12 form-group">
                          <label for="comments"> Supervisor Comments:</label>
                            <textarea class="form-control" type="textarea" id="comments" name="comments" placeholder="Your Message Here" maxlength="6000" rows="4"></textarea>
                        </div>
                        
                    </div>
                    
                        
                        
                    <div class="row">
                          
                        <div class="col-sm-12 form-group">
                          <button type="submit" class="btn btn-block btn-primary" name="submit">Post It! </button>
                        </div>
                      
                    </div>
                </form>
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
