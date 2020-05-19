<?php
session_start();
$semester = $_POST['semester'];
echo $semester;
$scholar_id = $_POST['scholar_id'];
echo $scholar_id;
$_SESSION['semester'] = $semester;
$_SESSION['scholar_id'] = $scholar_id;
echo $_SESSION['scholar_id'];
	header('Location:http://localhost/Technovaganza/admindata.php');	

?>