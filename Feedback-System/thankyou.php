<?php
 
require 'feedback_connection.php';
$conn    = Connect();
$experience    = $conn->real_escape_string($_POST['experience']);
$comments   = $conn->real_escape_string($_POST['comments']);
$name   = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$query   = "INSERT into feedback (experience,comments,name,email) VALUES('" . $experience . "','" . $comments . "','" . $name . "','" . $email . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>

<form action="home.php">
    <input type="submit" value="Go Home" />
</form>