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
   
    <!--THIS IS THE JAVA FOR THE CHARTS-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    
  <style type="text/css">

#chart-container {
    display: block;
    margin-left: 225PX;
    width: 75%;
    height: auto;
    
    
}

	#linegraph1 {
			     float: left;
                 width: 50%;
                 padding: 5px;
                 height: auto;
}
    #linegraph2 {
                float: right;
                 width: 50%;
                 padding: 5px;
                 height: auto;
                
}


table {
  margin-left: 250PX;
  width: 800px;
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
     padding:15px 250px;
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

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color:#b92f55;">
      
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

     <section class="download bg-primary text-center" id="features">
    

    <br><br>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
            </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("/Feedback-System/db-configs/data.php",
                function (data)
                {
                    console.log(data);
                     var uno = [];
                    var overall = [];

                    for (var i in data) {
                        uno.push(data[i].uno);
                        overall.push(data[i].overall);
                    }

                    var chartdata = {
                        labels: uno,
                        datasets: [
                            {
                                label: 'Student Overall Marks',
                                backgroundColor: '##C0C0C0',
                                borderColor: '#ffffff',
                                hoverBackgroundColor: '##C0C0C0',
                                hoverBorderColor: '##C0C0C0',
                                data: overall
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                        
                        
                    });
                });
            }
        }
        </script> 
                
     
    </section>
    
    
   
   <section class="graph">
    
    	<div id="linegraph1">
			<canvas id="mycanvas"></canvas>
		</div>
		
		<script>
			$(document).ready(function(){
	$.ajax({
		url : "/Feedback-System/db-configs/linegraph.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var uno = [];
			var Month1 = [];
			var Month2 = [];
			var Month3 = [];

			for(var i in data) {
				uno.push(data[i].uno);
				Month1.push(data[i].Month1);
				Month2.push(data[i].Month2);
				Month3.push(data[i].Month3);
			}

			var chartdata = {
				labels: uno,
				datasets: [
					{
						label: "Month1",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: Month1
					},
					{
						label: "Month2",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(29, 202, 255, 0.75)",
						borderColor: "rgba(29, 202, 255, 1)",
						pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
						pointHoverBorderColor: "rgba(29, 202, 255, 1)",
						data: Month2
					},
					{
						label: "Month3",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(211, 72, 54, 0.75)",
						borderColor: "rgba(211, 72, 54, 1)",
						pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
						pointHoverBorderColor: "rgba(211, 72, 54, 1)",
						data: Month3
					}
				]
			};

			var ctx = $("#mycanvas");

			var LineGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error : function(data) {

		}
	});
});
			
		</script>
		
		
		<div id="linegraph2">
			<canvas id="mycanvas2"></canvas>
		</div>
		
		<script>
			$(document).ready(function(){
	$.ajax({
		url : "/Feedback-System/db-configs/linegraph.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var uno = [];
			var Month4 = [];
			var Month5 = [];
			var Month6 = [];

			for(var i in data) {
				uno.push(data[i].uno);
				Month4.push(data[i].Month4);
				Month5.push(data[i].Month5);
				Month6.push(data[i].Month6);
			}

			var chartdata = {
				labels: uno,
				datasets: [
					{
						label: "Month4",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: Month4
					},
					{
						label: "Month5",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(1, 1, 1, 1)",
						borderColor: "rgba(1, 1, 1, 1)",
						pointHoverBackgroundColor: "rgba(1, 1, 1, 1)",
						pointHoverBorderColor: "rgba(1, 1, 1, 1)",
						data: Month5
					},
					{
						label: "Month6",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(211, 72, 54, 0.75)",
						borderColor: "rgba(211, 72, 54, 1)",
						pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
						pointHoverBorderColor: "rgba(211, 72, 54, 1)",
						data: Month6
					}
				]
			};

			var ctx = $("#mycanvas2");

			var LineGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error : function(data) {

		}
	});
});
			
		</script>
	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>
		<br>	<br>	<br>	<br>	<br>	<br>	<br>
</section>

    
 <section class="download bg-primary text-center" id="download">
     
      <h2 class="form-signin-heading">View a Breakdown of your Marks</h2><hr />
      
      <br><br>
       
         <form class="form" method="post">
             
             <div id="inputbox">
                <input type="text" class="css-input" name="valueToSearch" style="text-align: center;" placeholder="Value To Search"><br><br>
                  </div>
          <br><br>
          <br><br>
          
              <div id="button" align="center">
                 <input type="submit"  class="btn btn-block btn-primary" style="width: 50%;" name="search" value="Search" ><br><br>
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
$sql = "SELECT * FROM student_feedback WHERE `uno` = '".$_POST['valueToSearch']."'";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Student Number</th>";
                echo "<th>Month 1</th>";
                echo "<th>Month 2</th>";
                echo "<th>Month 3</th>";
                echo "<th>Month 4</th>";
                echo "<th>Month 5</th>";
                echo "<th>Month 6</th>";
                echo "<th>Final Result</th>";
                echo "<th>Comments</th>";
                echo "<th>Supervisor Name</th>";
                echo "<th>Supervisor Email</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['uno'] . "</td>";
                echo "<td>" . $row['Month1'] . "</td>";
                echo "<td>" . $row['Month2'] . "</td>";
                echo "<td>" . $row['Month3'] . "</td>";
                echo "<td>" . $row['Month4'] . "</td>";
                echo "<td>" . $row['Month5'] . "</td>";
                echo "<td>" . $row['Month6'] . "</td>";
                echo "<td>" . $row['overall'] . "</td>";
                echo "<td>" . $row['comments'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                
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
            
        </form>
     
    </section>
   

  

  </body>

</html>
<?php ob_end_flush(); ?>

