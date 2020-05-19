    <?php
    session_start();
include 'db.php';
    $branch=$_SESSION['branch'];
    $semester=$_SESSION['semester'];
    
    if ($branch == 0 || $semester ==0) {
        # code...
    header('Location:http://localhost/Technovaganza/admin1.php');

    }
     $con = getdb();
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
	?>
	<!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="wrap">
            <div class="container">
                <div class="row">
                    <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                        <fieldset>
                            <!-- Form Name -->
                            <?php
                                switch ($branch) {
                                    case 1:
                                        $x =  "Civil";
                                        # code...
                                        break;
                                    case 2:
                                        $x = "Mechanical";
                                        # code...
                                        break;
                                    case 3:
                                        $x = "Electrical";
                                        # code...
                                        break;
                                    case 4:
                                        $x = "Electronics Communication";
                                        # code...
                                        break;
                                    case 5:
                                        $x = "Computer Science";
                                        # code...
                                        break;
                                    case 6:
                                        $x = "Mechanical";
                                        # code...
                                        break;
                                }
                            ?>
                            <legend style="text-align: center;">Upload <?php echo $x;?> Results for <?php echo $semester;?> Semester</legend>
                            <!-- File Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="filebutton">Select File</label>
                                <div class="col-md-4">
                                    <input type="file" name="file" id="file" class="input-large" required>
                                </div>
                            </div>
                            
                                <br>
                                <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                                <div class="col-md-4">
                                    <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading..." value="<?php echo $semester; ?>">Upload</button>
                                </div>
                            
          <a href="admin1.php" style="text-decoration: none;color: black; border:1px solid black;padding:10px; background: silver;margin-top: -3%; border-radius:10%;">Back</a>
                        </fieldset>
                    </form>
                </div>
                <br>
                <?php
                   $con = getdb();
        $Sql = "SELECT * FROM result WHERE branch =".$branch." AND semester = ".$semester."";
        $result = mysqli_query($con, $Sql);  
        if (mysqli_num_rows($result) > 0) {
         echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
                 <thead><tr>
                              <th>Sl No</th>
                              <th>Scholar ID</th>
                              <th>".$sub0."</th>
                              <th>".$sub1[0]."</th>
                              <th>".$sub1[1]."</th>
                              <th>".$sub1[2]."</th>
                              <th>".$sub1[3]."</th>
                              <th>".$sub1[4]."</th>
                              <th>".$sub1[5]."</th>
                              <th>".$sub1[6]."</th>
                              <th>".$sub1[7]."</th>

                              <th>SPI</th>
                            </tr></thead><tbody>";
         while($row = mysqli_fetch_assoc($result)) {
             echo "<tr><td>" . $row['sl_no']."</td>
                       <td>" . $row['scholar_id']."</td>
                       <td>" . $row['sub1']."</td>
                       <td>" . $row['sub2']."</td>
                       <td>" . $row['sub3']."</td>
                       <td>" . $row['sub4']."</td>
                       <td>" . $row['sub5']."</td>
                       <td>" . $row['sub6']."</td>
                       <td>" . $row['sub7']."</td>
                       <td>" . $row['sub8']."</td>
                       <td>" . $row['sub9']."</td>
                       <td>" . $row['spi']."</td>

                       </tr>";        
         }
        
         echo "</tbody></table></div>";
         
    } else {
         echo "No Records Found..";
    }
                ?>
                
				     <div>

                <form class="form-horizontal" action="functions.php" method="post" name="upload_excel"   
                          enctype="multipart/form-data">
                      <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                                </div>
                       </div>                    
                </form>           
     </div>
            </div>
        </div>
    </body>
    </html>