<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$con = mysqli_connect($hostname,$username,$password,$dbname);
if (isset($con)) {
	echo "Connected";
}
$sql = "SELECT * FROM result";
$result = mysqli_query($con,$sql);
$a = NULL;
while ($row = mysqli_fetch_assoc($result)) {
	$a = "".$a."".$row['sub1'].",";
	}
	echo $a;
 ?>