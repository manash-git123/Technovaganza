<?php 
 session_start();

 // mysql_connect("localhost","root","");
// mysql_select_db("test");
	$servername = "localhost";
    $username = "root";
    $password = "";
    $db = "test";
    try {
       
        $conn = mysqli_connect($servername, $username, $password, $db);
         //echo "Connected successfully"; 
        }
    catch(exception $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
	if (isset($_POST['submit'])) {
		for ($i=1; $i <10 ; $i++) { 
			# code...
			$sub[$i] = $_POST['sub'.$i];
		
		}
		$branch = $_POST['branch'];
		$sql = "CREATE TABLE result".$branch."(
		sl_no INT(6) UNSIGNED PRIMARY KEY,
		scholar_id INT(10) NOT NULL,
		".$sub[1]." INT(20) NOT NULL,
		".$sub[2]." INT(20) NOT NULL,
		".$sub[3]." INT(20) NOT NULL,
		".$sub[4]." INT(20) NOT NULL,
		".$sub[5]." INT(20) NOT NULL,
		".$sub[6]." INT(20) NOT NULL,
		".$sub[7]." INT(20) NOT NULL,
		".$sub[8]." INT(20) NOT NULL,
		".$sub[9]." INT(20) NOT NULL,
		spi FLOAT(10) NOT NULL
		)";
		
	if ($conn->query($sql) === TRUE) {
		echo "<script>window.location.href='table_entry.php';</script>";

	} else {
		    echo "Error" . $conn->error;
	}

		echo $sql;
	 } 
?>