<?php
	session_start();

	session_destroy();
	header('location:/Feedback-System/home.php');

?>