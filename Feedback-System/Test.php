<!DOCTYPE html>
<html lang="en">

  <head>
      
      <style type="text/css">
BODY {
    width: 550PX;
    
}

#chart-container {
    display: block;
    margin-left: 350PX;
 
    width: 150%;
    height: auto;
}

 table,tr,th,td
            {
                margin-left: 350PX;
                width: 150%;
                height: auto;
                border: 1px solid black;
            }
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WPF</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Plugin CSS -->
  <link rel="stylesheet" href="device-mockups/device-mockups.min.css">


  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Work Placement Feedback</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Homepage</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="">
     <br>
     <br>
     <br>
     <br><br><br>
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
                $.post("data.php",
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
                                label: 'Student Total Marks',
                                backgroundColor: '#cebd39',
                                borderColor: '#ffffff',
                                hoverBackgroundColor: '#cebd39',
                                hoverBorderColor: '#cebd39',
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
  </header>
  <br>
  <br>
  <br>
  
  
   <section>
       <h3 class="">View More of your Feedback.</h1>
       
         <form action="" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Search"><br><br>
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
                echo "<th>Month 1 Result</th>";
                echo "<th>Month 2 Result</th>";
                echo "<th>Month 3 Result</th>";
                echo "<th>Month4</th>";
                echo "<th>Month5</th>";
                echo "<th>Month6</th>";
                echo "<th>overall</th>";
                echo "<th>comments</th>";
                echo "<th>name</th>";
                echo "<th>email</th>";
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
        echo "DELETE THIS LINE OF TEXT";
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
