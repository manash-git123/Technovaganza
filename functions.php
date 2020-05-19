    <?php
    session_start();
	include 'db.php';
    
  // echo "<script>alert(".$_POST['branch'].");</script>";
	 $con = getdb();
     if(isset($_POST["Import"])){
      $semester = $_POST["Import"];
        $filename=$_FILES["file"]["tmp_name"];    
         if($_FILES["file"]["size"] > 0)
         {
            $file = fopen($filename, "r");
             # code...
              while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
               {
                $branch = ($getData[1]/1000)%10;
			           if ($getData[1]!=0) {
                   # code...
                  // session_start();
                 $sql = "INSERT into result(sl_no,scholar_id,sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8,sub9,spi,branch,semester) 
                       values ('".$getData[0]."','".$getData[1]."','".$getData[3]."','".$getData[5]."','".$getData[7]."','".$getData[9]."','".$getData[11]."','".$getData[13]."','".$getData[15]."','".$getData[17]."','".$getData[19]."','".$getData[21]."','".$branch."','".$semester."')";
                       $result = mysqli_query($con, $sql);
                 }
            if(!isset($result))
            {
              echo "<script type=\"text/javascript\">
                  alert(\"Invalid File:Please Upload CSV File.\");
                  window.location = \"entry.php\"
                  </script>";    
            }
            else {
                echo "<script type=\"text/javascript\">
                alert(\"CSV File has been successfully Imported.\");
                window.location = \"entry.php\"
              </script>";
            }
               }
          
               fclose($file);  
         }
      } 
      $branch = $_SESSION['branch'];  
	     if(isset($_POST["Export"])){
          $sql2 = "SELECT * FROM subjects WHERE branch =".$branch." AND semester = 1";
        $result2 = mysqli_query($con, $sql2); 
        $row1 = mysqli_fetch_assoc($result2);
        $i=0;

        if($branch == 3||$branch == 4||$branch == 5){$sub0 = "Chemistry"
      ;}
      else{
        $sub0 = "Physics";
      }
        while($row2 = mysqli_fetch_assoc($result2)) {
          
          $sub1[$i] =  $row2['subject'];
          $i++;
        }
          header('Content-Type: text/csv; charset=utf-8');  
          header('Content-Disposition: attachment; filename=data.csv');  
          $output = fopen("php://output", "w");  
		 
          fputcsv($output, array('Serial No', 'Scholar ID',$sub0,$sub1[0],$sub1[1],$sub1[2],$sub1[3],$sub1[4],$sub1[5],$sub1[6],$sub1[7], 'SPI'));  
          $query = "SELECT sl_no,scholar_id,sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8,sub9,spi from result ORDER BY scholar_id ASC";  
          $result = mysqli_query($con, $query);  
          while($row = mysqli_fetch_assoc($result))  
          {  
               fputcsv($output, $row);  
          }  
          fclose($output);  
     }  
     ?>