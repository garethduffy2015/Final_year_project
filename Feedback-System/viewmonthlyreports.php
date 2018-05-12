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
   
    
  <style type="text/css">


table {
  margin-left: 10%;
  width: 80%;
  border-collapse: collapse;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}
th,
td {
  padding: 15px;
  background-color: rgba(255, 255, 255, 0.2);
  color: #fff;
}
th {
  text-align: middle;
  width: auto;
}
thead th {
  background-color: #55608f;
}
tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.3);
}
tbody td {
  position: relative;
}
tbody td:hover:before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: -9999px;
  bottom: -9999px;
  background-color: rgba(255, 255, 255, 0.2);
  z-index: -1;
}
.css-input {
     margin-left: 25%;   
     width:50%;
     padding:5px 250px;
     font-size: 20px;
     border-width: 2px;
     border-color: #CCCCCC;
     background-color: #FFFFFF;
     color: #000000;
     border-style: solid;
     border-radius: 25px;
     
}
 .css-input:focus {
     outline:none;
}


</style>


    <title>Feedback System</title>
  
  </head>

  <body id="page-top" >

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      
      <div class="container">
        
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Work Placement Feedback</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu
          <i class="fa fa-bars"></i> </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="home.php">Back</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="home.php">Homepage</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php?logout">Logout</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

 <header class="masthead" style="width:auto; height:auto;">
     <br> <br> <br> <br> <br>
      <h2 align=center class="">View Previous Monthly Reports.</h2><hr />
      
   

      
      <br><br>
       
         <form class="form" method="post" >
             
             <div id="inputbox"  >
                <input type="text"  class="css-input" name="valueToSearch" align="text-align: center;" align="center" placeholder="        Student Number..."><br><br>
                  </div>
          <br><br>
          <br><br>
          
              <div id="button" align="center">
                 <input type="submit"  class="btn btn-block btn-primary" style="text-align:center; width: 50%;"  name="search" value="Search" ><br><br>
                   </div>
                
                
            <br><br>
            <br><br>
            <br><br>
           
           
            <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "feedback");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt select query execution
$sql = "SELECT * FROM newreport  WHERE `uno` = '".$_POST['valueToSearch']."'";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Student Number</th>";
                echo "<th>Full Name</th>";
                echo "<th>Student Email</th>";
                echo "<th>Company</th>";
                echo "<th>Message </th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr >";
                echo "<td>" . $row['uno'] . "</td>";
                echo "<td>" . $row['fullname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['company'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
               
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    } else{
        echo "";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection

$mysqli->close();
?>
            
  </header>     
  </body>

</html>