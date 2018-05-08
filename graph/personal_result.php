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
                echo "<th>uno</th>";
                echo "<th>Month1</th>";
                echo "<th>Month2</th>";
                echo "<th>Month3</th>";
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
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection

$mysqli->close();
?>



<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Graph</title>

    </head>
    <script src="js/jquery.js" type="text/javascript"></script>


    <script type="application/javascript" src="js/awesomechart.js"> </script>

<?php
mysql_select_db('feedback',mysql_connect('localhost','root',''))or die(mysql_error());
?>
  
<body>
            <div class="container">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="hero-unit-table">
                            <div class="charts_container">
                                <div class="chart_container">
                                    <div class="alert alert-info">Different Motorcycles with Quantity</div>  
                                    <canvas id="barGraph" width="1100" height="400">
                                        Your web-browser does not support the HTML 5 canvas element.
                                    </canvas>
                                </div>
                            </div>
						</div>


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
                echo "<th>uno</th>";
                echo "<th>Month1</th>";
                echo "<th>Month2</th>";
                echo "<th>Month3</th>";
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
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection

$mysqli->close();
?>


<script type="application/javascript">
    var motorcycle_chart = new AwesomeChart('barGraph');
    motorcycle_chart.data = [
    <?php
    $query = mysql_query("select Month1,Month2,Month3,Month4,Month5,Month6 from student_feedback") or die(mysql_error());
    while ($row = mysql_fetch_array($query)) {
        ?>
        <?php echo $row['Month1'] . ','; ?>	
        <?php echo $row['Month2'] . ','; ?>	
        <?php echo $row['Month3'] . ','; ?>
        <?php echo $row['Month4'] . ','; ?>
        <?php echo $row['Month5'] . ','; ?>
        <?php echo $row['Month6'] . ','; ?>
    <?php }; ?>
    ];

    motorcycle_chart.labels = [
    <?php
    $query = mysql_query("SELECT uno FROM student_feedback WHERE `uno` = '".$_POST['valueToSearch']."'") or die(mysql_error());
    while ($row = mysql_fetch_array($query)) {
        ?>
       <?php echo "'" . $row['valueToSearch'] . "'" . ','; ?>
    <?php }; ?>
    ];
    
    motorcycle_chart.colors = ['gold', 'skyblue', '#FF6600', 'pink', 'darkblue', 'lightpink', 'green'];
    motorcycle_chart.randomColors = true;
    motorcycle_chart.animate = true;
    motorcycle_chart.animationFrames = 30;
    motorcycle_chart.draw();
</script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



   
</body>
</html>





   
</body>
</html>


