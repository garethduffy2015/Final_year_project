<?php
mysql_connect("localhost","root");
mysql_select_db("feedback");
$sql_query="SELECT * FROM student_feedback";
$result_set=mysql_query($sql_query);
?>
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
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
     
     <title>Feedback System</title>
     
     <style>
table {
  margin-left: 0%;
  border-collapse: collapse;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}
th,
td {
  padding: 5px;
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
     </style>
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
              <a class="nav-link js-scroll-trigger" href="home.php">Homepage</a>
                </li>
                
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php?logout">Logout</a>
                </li>
                
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="container h-100">
            <br><br><br><br>
            <h2 align="center"> To Edit Student Feedback Press the Edit Icon.</h2>
            <br><br>
            
            
           <table align="center">
    <tr>
    <th>Student Number</th>
    <th>Month 1 Results</th>
    <th>Month 2 Results</th>
    <th>Month 3 Results</th>
    <th>Month 4 Results</th>
    <th>Month 5 Results</th>
    <th>Month 6 Results</th>
    <th>Overall Results</th>
    <th>Comments       </th>
    <th>Name</th>
    <th>Email</th>
    <th>Edit</th>
    </tr>
    <?php
	if(mysql_num_rows($result_set)>0)
	{
		while($row=mysql_fetch_row($result_set))
		{
			?>
            <tr>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><?php echo $row[7]; ?></td>
            <td><?php echo $row[8]; ?></td>
            <td><?php echo $row[9]; ?></td>
            <td><?php echo $row[10]; ?></td>
            <td><?php echo $row[11]; ?></td>
            <td align="center"><a href="edit_data.php?edit_id=<?php echo $row[0]; ?>"><img src="img/b_edit.png" alt="Edit" /></a></td>
            </tr>
            <?php
		}
	}
	else
	{
		?>
        <tr>
        <th colspan="3">There's No data found !!!</th>
        </tr>
        <?php
	}
	?>
    </table>
            
        </div>
   </header>
  </body>
</html>
