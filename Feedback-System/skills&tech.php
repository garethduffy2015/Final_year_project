
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
    <link href="/Feedback-System/css/dropdownstyle.css" rel="stylesheet">

  <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

  <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> <!-- PIE-->
  <script type="text/javascript" src="js/jquery.min.js"></script> <!--THESE 2 FOR THE BAR-->
  <script type="text/javascript" src="js/Chart.min.js"></script>
    
    <title>Feedback System</title>
    
    <style>
    .select {
    position: relative;
    display: inline-block;
    margin-bottom: 15px;
    width: 80%;
    margin-left: 20%;
}    
.select select  {
        font-family: 'Verdana';
        display: inline-block;
        width: 80%;
        cursor: pointer;
        padding: 12px 30px;
        outline: 0;
        border: 2px solid #ffffff;
        border-radius: 100px;
        background: transparent;
        color: #ffffff;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
}
.select select::-ms-expand {
            display: none;
}
.select select:hover,
.select select:focus {
            color: #7b4397;
            background: transparent;
    
}
.select select:disabled {
            opacity: 0.5;
            pointer-events: none;
}
.select_arrow {
    position: absolute;
    top: 11px;
    right: 43px;
    width: 19px;
    height: 19px;
    border: solid #ffffff;
    border-width: 0 4px 4px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}
.select select:hover ~ .select_arrow,
.select select:focus ~ .select_arrow {
    border-color: transparent;
}
.select select:disabled ~ .select_arrow {
    border-top-color: #CCCCCC;
}

.button {
  margin-left: 30%;
	background-color:transparent;
	-moz-border-radius:42px;
	-webkit-border-radius:42px;
	border-radius:42px;
	border:2px solid #ffffff;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Verdana;
	font-size:28px;
	padding:5px 76px;
	text-decoration:none;
	text-shadow:0px 2px 0px #000000;
}
.button:hover {
	background-color:transparent;
}
.button:active {
	position:relative;
	top:1px;
}

</style>
    
</head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      
      <div class="container">
        
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="color:#cc2941;">Work Placement Feedback</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu
          <i class="fa fa-bars"></i> </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="home.php" style="color:white;">Back</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="home.php" style="color:white;">Home</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php?logout" style="color:white;">Logout</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

<header class="masthead" style="height:auto;">
        <br> <br> <br>
          <h2 align="center"> Work placement Feedback</h2>
          <br> <br>
              <h3 align="center">Please answer the following questions based on your placement. </h3>
                  <h4 align="center">This can help Tailor our Courses to best suit the industry. </h4>
        <form method="post">
            <div class="select">
                
  <br> <br> <br> <br> <br>
  
    <h5 style="margin-left: 100PX;">The Primary Language you used during your placement?</h5>
    <select name="subject_names">
        
        <option>--Select--</option>
        
        <option value="Java">Java</option>
        <option value="C">C</option>
        <option value="C++">C++</option>
        <option value="Python">Python</option>
        <option value="Visual Basic .NET">Visual Basic .NET</option>
        <option value="PHP">PHP</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Swift">Swift</option>
        <option value="Pearl">Pearl</option>
        <option value="Ruby">Ruby</option>
        <option value="R">R</option>
        <option value="SQL">SQL</option>
        
        
</select>
  
  <br> <br> <br> <br> <br>
  
  <h5 style="margin-left: 100PX;"> A Second Language you may have used?</h5>
  <select name="subject_namessecond">
      
        <option>--Select--</option>
        
        <option value="Java">Java</option>                    
        <option value="C">C</option>
        <option value="C++">C++</option>
        <option value="Python">Python</option>
        <option value="Visual Basic .NET">Visual Basic .NET</option>
        <option value="PHP">PHP</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Swift">Swift</option>
        <option value="Pearl">Pearl</option>
        <option value="Ruby">Ruby</option>
        <option value="R">R</option>
        <option value="SQL">SQL</option>
        
        
</select>
  <br> <br> <br> <br> <br>
  
  <h5 style="margin-left: 100PX;"> Job title/Employment role? </h5>
  <select name="primary_role">
        
        <option>--Select--</option>
        
        <option value="Web Developer">Web Developer</option>
        <option value="Cloud">Cloud</option>
        <option value="Networking">Networking</option>
        <option value="Security">Security</option>
        <option value="Analyst">Analyst</option>
        <option value="Database Administrator">Database Administrator</option>
        <option value="Front End Development">Front End Development</option>
        <option value="Back End Development">Back End Development</option>
        <option value="Help Desk Technician">Help Desk Technician</option>
        <option value="IT Support">IT Support</option>
        <option value="Java Development">Java Development</option>
        <option value=".NET Developer">.NET Developer</option>
        <option value="Programmer">Programmer</option>
        <option value="Software Engineer">Software Engineer</option>
        <option value="Web Administrator">Web Administrator</option>
        <option value="IT Analyst">IT Analyst</option>
        
</select>

  <br> <br> <br> <br> <br>
  
  <h5 style="margin-left: 100PX;"> A different role you may have touched on?</h5>
  <select name="sec_role" style="">
        
        <option>--Select--</option>
        
        <option value="Web Developer">Web Developer</option>
        <option value="Cloud">Cloud</option>
        <option value="Networking">Networking</option>
        <option value="Security">Security</option>
        <option value="Analyst">Analyst</option>
        <option value="Database Administrator">Database Administrator</option>
        <option value="Front End Development">Front End Development</option>
        <option value="Back End Development">Back End Development</option>
        <option value="Help Desk Technician">Help Desk Technician</option>
        <option value="IT Support">IT Support</option>
        <option value="Java Development">Java Development</option>
        <option value=".NET Developer">.NET Developer</option>
        <option value="Programmer">Programmer</option>
        <option value="Software Engineer">Software Engineer</option>
        <option value="Web Administrator">Web Administrator</option>
        <option value="IT Analyst">IT Analyst</option>
        
  </select>
  
<br> <br> <br> <br>
  <div> <button class="button" type="submit" name="submit" >Submit</button></div>
  <br> <br> <br>  
        </form> 
    </div>
</header>
    <?php
if(isset($_POST["submit"]))
{
 
 //Including dbconfig file.
include 'db-configs/dbconfig.1.php';
 
$subject_names=$_POST["subject_names"];
$subject_namessecond=$_POST["subject_namessecond"];
$primary_role=$_POST["primary_role"];
$sec_role=$_POST["sec_role"];


mysql_query("INSERT INTO demo_table_6 (subject_names, subject_namessecond, primary_role, sec_role) VALUES ('$subject_names','$subject_namessecond','$primary_role','$sec_role')"); 


}

 ?>
 


   
    
     <div class = "Chart1" style="background: white;">
      <?php  
 $connect = mysqli_connect("localhost", "root", "", "feedback");  
 $query = "SELECT subject_names, count(*) as number FROM demo_table_6 GROUP BY subject_names";  
 $result = mysqli_query($connect, $query);  
 ?>  
       <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Subject', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["subject_names"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Primary Language used during placement',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           
           
           
           </script> 
                 <br><br>
                <h3 align="center" style="color:#7b4397;">Languages Used During the Work placement.</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
             
      
      <?php  
 $connect = mysqli_connect("localhost", "root", "", "feedback");  
 $query = "SELECT subject_namessecond, count(*) as number FROM demo_table_6 GROUP BY subject_namessecond";  
 $result = mysqli_query($connect, $query);  
 ?>  
       <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Subject', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["subject_namessecond"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Second Language used during placement',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart.draw(data, options);  
           }  
           
           
           
           </script> 
         
                <div id="piechart2" style="width: 900px; height: 500px;"></div>  
             
  
    
     
      
  </div>
  
   <div class = "Chart3" style="background: white;">
      <?php  
 $connect = mysqli_connect("localhost", "root", "", "feedback");  
 $query = "SELECT primary_role, count(*) as number FROM demo_table_6 GROUP BY primary_role";  
 $result = mysqli_query($connect, $query);  
 ?>  
       <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Primary_role', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["primary_role"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Primary Job Roles',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));  
                chart.draw(data, options);  
           }  
           
           
           
           </script> 
           <br><br> 
         
                <h3 align="center" style="color:#7b4397;">Jobs Roles undertaken for the Work placement.</h3>  
                <br />  
                <div id="piechart3" style="width: 900px; height: 500px;" ></div>  
             
      
  
    
     <div class = "Chart4" style="background: white;  ">
      <?php  
 $connect = mysqli_connect("localhost", "root", "", "feedback");  
 $query = "SELECT sec_role, count(*) as number FROM demo_table_6 GROUP BY sec_role";  
 $result = mysqli_query($connect, $query);  
 ?>  
       <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Sec_Role', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["sec_role"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Secondary Job Roles',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart4'));  
                chart.draw(data, options);  
           }  
           
           
           
           </script> 
           
                <div id="piechart4" style="width: 900px; height: 500px;"></div>  
</div>  


    <footer>
      <div class="container">
        <p>&copy; 2018 Gareth Duffy. All Rights Reserved.</p>
          </div>
            </footer>

  </body>

</html>