<?php 
session_start();
include 'db.php';
$scholar_id = $_SESSION['scholar_id'];
$semester = $_SESSION['semester'];
$branch = ($scholar_id/1000)%10;
// if ($semester!==1) {
//   # code...
//   echo '<script>alert("Data Unavailable");<script>';
// }

if (!isset($_SESSION['scholar_id'])) {
	# code...
	header('Location:http://localhost/Technovaganza/admin1.php');
}

	 $con = getdb();
    $sql2 = "SELECT * FROM subjects WHERE branch =".$branch." AND semester = ".$semester."";
        $result2 = mysqli_query($con, $sql2); 
        $row1 = mysqli_fetch_assoc($result2);
        $i=0;
        while($row2 = mysqli_fetch_assoc($result2)) {
          
          $sub1[$i] =  $row2['subject'];
          $i++;
        }
	$sql1 = "SELECT * FROM result WHERE scholar_id = ".$scholar_id."";
 	 $result = mysqli_query($con, $sql1);  
        if (mysqli_num_rows($result) > 0) {
        	?>
        	<!DOCTYPE html>
        	<html>
        	<head>
        		<title>Update</title>
        	</head>
        	<body>
        	<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered' style="position: absolute; top: 10%;">
                 <thead><tr>
                              
                              <th>Scholar ID&nbsp&nbsp</th>
                              <th><?php if($branch == 3||$branch == 4||$branch == 5){echo "Chemistry"
      ;}
      else{
        echo "Physics";
      }?>&nbsp&nbsp</th>
                              <th><?php echo $sub1[0]?>&nbsp&nbsp</th>
                              <th><?php echo $sub1[1]?>&nbsp&nbsp</th>
                              <th><?php echo $sub1[2]?>&nbsp&nbsp</th>
                              <th><?php echo $sub1[3]?>&nbsp&nbsp</th>
                              <th><?php echo $sub1[4]?>&nbsp&nbsp</th>
                              <th><?php echo $sub1[5]?>&nbsp&nbsp</th>
                              <th><?php echo $sub1[6]?>&nbsp&nbsp</th>
                              <th><?php echo $sub1[7]?>&nbsp&nbsp</th>

                              <th>SPI</th>
                            </tr></thead><tbody>
        	<?php
        	while ($row = mysqli_fetch_assoc($result)) {
        		# code...
        	?>
        		 	<tr>
                       <td style="text-align: center;"><?php echo $row['scholar_id'];	?></td>
                       <td style="text-align: center;"><?php echo $row['sub1']; ?></td>
                       <td style="text-align: center;"><?php echo $row['sub2']; ?></td>
                       <td style="text-align: center;"><?php echo $row['sub3']; ?></td>
                       <td style="text-align: center;"><?php echo $row['sub4']; ?></td>
                       <td style="text-align: center;"><?php echo $row['sub5']; ?></td>
                       <td style="text-align: center;"><?php echo $row['sub6']; ?></td>
                       <td style="text-align: center;"><?php echo $row['sub7']; ?></td>
                       <td style="text-align: center;"><?php echo $row['sub8']; ?></td>
                       <td style="text-align: center;"><?php echo $row['sub9']; ?></td>
                       <td style="text-align: center;"><?php echo $row['spi']; ?></td>

                       </tr> 
        <?php	}  
			$_SESSION['scholar_id'] = $scholar_id;
        ?>
        	<div style="position: absolute; top: 20%;">
        	<form action="edit_data.php" method="post">
        		<label>Select what you want to update</label>
        		<select name="subject">
        			<option value="sub1"><?php if($branch == 3||$branch == 4||$branch == 5){echo "Chemistry"
      ;}
      else{
        echo "Physics";
      }?></option>
        			<option value="sub2"><?php echo $sub1[0]?></option>
        			<option value="sub3"><?php echo $sub1[1]?></option>
        			<option value="sub4"><?php echo $sub1[2]?></option>
        			<option value="sub5"><?php echo $sub1[3]?></option>
        			<option value="sub6"><?php echo $sub1[4]?></option>
        			<option value="sub7"><?php echo $sub1[5]?></option>
        			<option value="sub8"><?php echo $sub1[6]?></option>
        			<option value="sub9"><?php echo $sub1[7]?></option>
        			<option value="spi">SPI</option>
        		</select>
<br>
        		<input type="text" name="pointer" required="">
        		<br>
        		<br>
        		<input type="submit" name="update" value="Update">
        	</form>

        	</div>


          <a href="admin.php">Back</a>
        	</body>
        	</html>
 <?php
        }
        else{
        	echo "Result doesn't Exist";
        }
 ?>