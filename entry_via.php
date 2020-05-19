<?php
session_start();
$semester = $_POST['semester'];
// echo $semester;
$branch = $_POST['branch'];
// echo $branch;
$_SESSION['branch']=$branch;
$_SESSION['semester'] = $semester;
$_SESSION['username'];
	header('Location:http://localhost/Technovaganza/entry.php');

?>