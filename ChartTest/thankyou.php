<?php
 
require 'feedback_connection.php';
$conn    = Connect();
$Month1   = $conn->real_escape_string($_POST['Month1']);
$Month2   = $conn->real_escape_string($_POST['Month2']);
$Month3 = $conn->real_escape_string($_POST['Month3']);
$query   = "INSERT into feedback (Month1,Month2,Month3) VALUES('" . $Month1 . "','" . $Month2 . "','" . $Month3 . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>

<form action="linegraph.html">
    <input type="submit" value="Go Home" />
</form>