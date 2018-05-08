<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","feedback");

$sqlQuery = "SELECT Month1,Month2,Month3,Month4,Month5,Month6,uno FROM student_feedback";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>