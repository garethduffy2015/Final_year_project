<?php
 //create connection
 $connect=mysqli_connect('localhost','root','','feedback');
	
//check connection
 if(mysqli_connect_errno($connect))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
else
	echo 'Connected Successfully!!';
?>

<?php

$result=mysqli_query($connect,"select * from feedback");

while($row=mysqli_fetch_array($result))
{
         echo $row['experience'].' '.$row['comments'].' '.$row['name'].' '.$row['email'].'<br/>';
 }

?>


<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM feedback WHERE CONCAT(email) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM feedback";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "feedback");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="result.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>experience</th>
                    <th>comments</th>
                    <th>name</th>
                    <th>email</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['experience'];?></td>
                    <td><?php echo $row['comments'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
       
<script>
  AmCharts.loadJSON = function(url) {
  // create the request
  if (window.XMLHttpRequest) {
    // IE7+, Firefox, Chrome, Opera, Safari
    var request = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    var request = new ActiveXObject('Microsoft.XMLHTTP');
  }

  // load it
  // the last "false" parameter ensures that our code will wait before the
  // data is loaded
  request.open('GET', url, false);
  request.send();

  // parse and return the output
  return eval(request.responseText);
};  

AmCharts.ready(function() {
   // load the data
   var chartData = AmCharts.loadJSON('result.php');

   // this is a temporary line to verify if the data is loaded and parsed correctly
   // please note, that console.debug will work on Safari/Chrome only
   console.debug(chartData);

   // build the chart
   // ...
 });
</script>
        
    </body>
</html>

















<h1>Feedback</h1>
	<table width="500" cellpadding=5celspacing=5 border=1>
	<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Department</th>
	<th>Email</th>
	</tr>
	<?php while($row=mysqli_fetch_array($result)):?>
	<tr>
	<td><?php echo $row['experience'];?></td>
	<td><?php echo $row['comments'];?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['email'];?></td>
	</tr>
	<?php endwhile;?> 
	</table>
	
	<h1>Products</h1>
	<?php $result=mysqli_query($connect, "select * from feedback");?>
	<table width="500" cellpadding=5celspacing=5 border=1>
	<tr>
	<th>experience</th>
	<th>comments</th>
	<th>name</th>
	<th>email</th>
	</tr>
	<?php while($row=mysqli_fetch_array($result)):?>
	<tr>
	<td><?php echo $row['experience'];?></td>
	<td><?php echo $row['comments'];?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['email'];?></td>
	</tr>
	<?php endwhile;?> 
	</table>