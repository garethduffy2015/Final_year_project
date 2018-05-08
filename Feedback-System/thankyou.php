<?php
 
require 'feedback_connection.php';
$conn    = Connect();



$uno   = $conn->real_escape_string($_POST['uno']);
$Month1   = $conn->real_escape_string($_POST['Month1']);
$Month2   = $conn->real_escape_string($_POST['Month2']);
$Month3   = $conn->real_escape_string($_POST['Month3']);
$Month4   = $conn->real_escape_string($_POST['Month4']);
$Month5   = $conn->real_escape_string($_POST['Month5']);
$Month6   = $conn->real_escape_string($_POST['Month6']);
$overall   = $conn->real_escape_string($_POST['overall']);
$comments = $conn->real_escape_string($_POST['comments']);
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);

//$query = "INSERT INTO student_feedback(uno,Month1,Month2,Month3,Month4,Month5,Month6,overall,comments,name,email) VALUES('$uno','$Month1','$Month2','$Month3','$Month4','$Month5','$Month6','$overall','$comments','$name','$email')";
$query   = "INSERT into student_feedback (uno,Month1,Month2,Month3,Month4,Month5,Month6,overall,comments,name,email) VALUES('" . $uno . "','" . $Month1 . "','" . $Month2 . "','" . $Month3 . "','" . $Month4 . "','" . $Month5 . "','" . $Month6 . "','" . $overall . "','" . $comments . "','" . $name . "','" . $email . "')";
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