<?php
session_start();
include 'db.php';
$subject = $_POST['subject'];
$pointer = $_POST['pointer'];
$con = getdb();
$sql = "UPDATE result SET ".$subject." = '".$pointer."' WHERE scholar_id = '".$_SESSION['scholar_id']."'";
$result = mysqli_query($con, $sql);
if ($result !== NULL) {
	echo '<script>alert("Update Successful");</script>';
	$_SESSION['updated'] = 1;
	echo "<script>window.location.href='admindata.php';</script>";
}
else{
	echo '<script>alert("Update Fail");</script>';
	$_SESSION['updated'] = 1;
	echo "<script>window.location.href='admindata.php';</script>";
}
?>