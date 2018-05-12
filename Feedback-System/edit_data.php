<?php
mysql_connect("localhost","root");
mysql_select_db("feedback");
if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM student_feedback WHERE user_id=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
$uno = $_POST['uno'];
$Month1 = $_POST['Month1'];
$Month2 = $_POST['Month2'];
$Month3 = $_POST['Month3'];
$Month4 = $_POST['Month4'];
$Month5 = $_POST['Month5'];
$Month6 = $_POST['Month6'];
$overall = $_POST['overall'];
$comments = $_POST['comments'];
$name = $_POST['name'];
$email = $_POST['email'];
	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE student_feedback SET uno='$uno',Month1='$Month1',Month2='$Month2',Month3='$Month3',Month4='$Month4',Month5='$Month5',Month6='$Month6',overall='$overall',comments='$comments',name='$name',email='$email' WHERE user_id=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='editfeedback.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while updating data');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: editfeedback.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/new-age.css" rel="stylesheet">

  <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

  <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">
  <!--LINK TO CUSTOM FORM STYLE STYLE LINKS-->
  <link rel="stylesheet" href="css/editstyle.css" type="text/css" />

    <title>Feedback System</title>
    
    
  
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      
      <div class="container">
        
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Work Placement Feedback.</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu
          <i class="fa fa-bars"></i> </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="editfeedback.php">Back</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="home.php">Home</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php?logout">Logout</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead" style="height:auto;">
      <center>

	       <div id="content">
	        <br><br><br>
        </div>

          <div id="body">
	          <div id="content">
            <form method="post">
              <table align="center">
                 <tr>
                  <td><input type="text" name="uno" placeholder="uno" value="<?php echo $fetched_row['uno']; ?>" /></td>
              </tr>
                 <tr>
                  <td><input type="int" name="Month1" placeholder="Month1" value="<?php echo $fetched_row['Month1']; ?>"/></td>
              </tr>
                 <tr>
                  <td><input type="int" name="Month2" placeholder="Month2" value="<?php echo $fetched_row['Month2']; ?>"/></td>
              </tr>
                 <tr>
                  <td><input type="int" name="Month3" placeholder="Month3" value="<?php echo $fetched_row['Month3']; ?>"/></td>
              </tr>
                 <tr>
                  <td><input type="int" name="Month4" placeholder="Month4" value="<?php echo $fetched_row['Month4']; ?>"/></td>
              </tr>
                 <tr>
                  <td><input type="int" name="Month5" placeholder="Month5" value="<?php echo $fetched_row['Month5']; ?>"/></td>
              </tr>
                 <tr>
                  <td><input type="int" name="Month6" placeholder="Month6" value="<?php echo $fetched_row['Month6']; ?>"/></td>
              </tr>
                <tr>
                 <td><input type="int" name="overall" placeholder="overall" value="<?php echo $fetched_row['overall']; ?>"/></td>
              </tr>
                <tr>
                 <td><input type="textarea" name="comments" placeholder="comments" value="<?php echo $fetched_row['comments']; ?>"/></td>
             </tr>
               <tr>
                <td><input type="text" name="name" placeholder="name" value="<?php echo $fetched_row['name']; ?>" required /></td>
             </tr>
               <tr>
                <td><input type="email" name="email" placeholder="email" value="<?php echo $fetched_row['email']; ?>" required /></td>
             </tr>
               <tr>
                <td>
                  <button class="button" type="submit" name="btn-update"><strong>UPDATE</strong></button>
    
                  <button class="button" type="submit" name="btn-cancel"><strong>Cancel</strong></button>
             </tr>
        </table>
    </form>
   </div>
</div>

 </center>
</header>

    <footer>
      <div class="container">
        <p>&copy; 2018 Gareth Duffy. All Rights Reserved.</p>
          </div>
            </footer>

  </body>
</html>