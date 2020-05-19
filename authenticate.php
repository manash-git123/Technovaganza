<?php 
session_start();
if(!isset($_POST['submit'])){
	echo '<script>alert("Could not login");</script>';
	header('Location:http://localhost/Technovaganza/main.html');
}

$username = $_POST['username'];
$_SESSION['username'] = $username;
$password = $_POST['pass'];
	echo '<script>alert("'.$username.'");</script>';

if ( $password =="example"&& $username!=="admin") {
	# code...
	header('Location:http://localhost/Technovaganza/studentPage.php');
}elseif ($username=="admin" && $password =="example") {
	header('Location:http://localhost/Technovaganza/admin1.php');
	# code...
}
else{

	echo '<script>alert("Login error");</script>';
	header('Location:http://localhost/Technovaganza/main.html');
	 
 }
?>