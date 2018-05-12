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
    <link href="css/new-age.css" rel="stylesheet">

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
            <i class="fa fa-bars"></i>
              </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="home.php">Back</a>
                </li>
                
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#home.php">Homepage</a>
                </li>
                
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php?logout">Logout</a>
                </li>
                
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead" style="height:auto;">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
            
            <form action="thankyou.php" method="post">
               <br><br>
                <div class="row">
                 <div class="col-sm-6 form-group">
                    <label for="studentno"> Student Number:</label>
                    <input type="text" class="form-control"name="uno">
                      </div>
                        </div>
                 
                <div class="row">
                  <div class="col-sm-6 form-group">
                    <label for="Month1"> Month 1 Grade:</label>
                    <input type="int" class="form-control" name="Month1">
                       </div>
                            
                <div class="col-sm-6 form-group">
                  <label for="Month2"> Month 2 Grade:</label>
                  <input type="int" class="form-control" name="Month2">
                    </div>
                            
                <div class="col-sm-6 form-group">
                  <label for="Month3"> Month 3 Grade:</label>
                  <input type="int" class="form-control" name="Month3">
                    </div>
                    
                <div class="col-sm-6 form-group">
                  <label for="Month4"> Month 4 Grade:</label>
                  <input type="int" class="form-control" name="Month4">
                    </div>
                       
                <div class="col-sm-6 form-group">
                  <label for="Month5"> Month 5 Grade:</label>
                  <input type="int" class="form-control" name="Month5">
                    </div>
                       
               <div class="col-sm-6 form-group">
                  <label for="Month6"> Month 6 Grade:</label>
                  <input type="int" class="form-control" name="Month6">
                     </div>
                            
               <div class="col-sm-6 form-group">
                  <label for="overall"> Overall Grade:</label>
                  <input type="int" class="form-control" id="overall" name="overall">
                     </div>
                            
                <div class="col-sm-12 form-group">
                  <label for="comments"> Comments:</label>
                  <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" rows="2"></textarea>
                      </div>

                 <div class="col-sm-6 form-group">
                   <label for="name"> Your Name:</label>
                   <input type="text" class="form-control" name="name">
                      </div>
                            
                 <div class="col-sm-6 form-group">
                    <label for="email"> Your Email:</label>
                    <input type="email" class="form-control" name="email">
                      </div>
                    
                    <input class="btn btn-block btn-primary" type="submit"  name="submit" type="submit" value="Insert">   
                  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>

