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
	<title>Admin Data</title>
	 <link rel="stylesheet" media="screen" type="text/css" href="css/index.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    a, a:hover, a:focus{
      cursor:pointer;
      text-decoration: none;
      color:inherit;
    }
      .navbar-list a:hover, .navbar-list a:focus{
    color:white;
  }
  .navbar-list a{
    color:white;
  }
   @media print {
   body {
       display: table;
       table-layout: fixed;
       padding-top: 2.5cm;
       padding-bottom: 2.5cm;
       height: auto;
   }
}
</style>
<body>
   <!--Start Navbar Area-->
<nav>
<div class="container-style">
  <div></div>
  <div class="brand"><a href="www.nits.ac.in" target="_blank"><img id="image" src="images/logo.png" width="100px" height="100px"></a></div>
  <div class="tagline">
    <span class="tagline-style">National Institute Of Technology,Silchar</span>
    <span class="tagline-base">Result Portal</span>
  </div>
  <div class="navbar-style">
    <ul class="navbar-list">
      <li><a href="admin1.php"><button type="submit" class="btn">Back</button></a></li>
</ul>
  </div>
</div>
  </nav>
<!--End Navbar area-->
<div class="container">
  	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20%;">
  			<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Scholar Id</th>
      <th scope="col"><?php if($branch == 3||$branch == 4||$branch == 5){echo "Chemistry"
      ;}
      else{
        echo "Physics";
      }?>&nbsp&nbsp</th>
      <th scope="col"><?php echo $sub1[0]?>&nbsp&nbsp</th>
                              <th scope="col"><?php echo $sub1[1]?>&nbsp&nbsp</th>
                              <th scope="col"><?php echo $sub1[2]?>&nbsp&nbsp</th>
                              <th scope="col"><?php echo $sub1[3]?>&nbsp&nbsp</th>
                              <th scope="col"><?php echo $sub1[4]?>&nbsp&nbsp</th>
                              <th scope="col"><?php echo $sub1[5]?>&nbsp&nbsp</th>
                              <th scope="col"><?php echo $sub1[6]?>&nbsp&nbsp</th>
                              <th scope="col"><?php echo $sub1[7]?>&nbsp&nbsp</th>
                              <th scope="col">SPI</th>
    </tr>
  </thead>
  <tbody>
    <?php
          while ($row = mysqli_fetch_assoc($result)) {
            # code...
          ?>
    <tr>
      <td scope="row" style="text-align: center;"><?php echo $row['scholar_id'];  ?></td>
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
    <?php }  
      $_SESSION['scholar_id'] = $scholar_id;
        ?>
   <!--  <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>

    </tr> -->
  </tbody>
</table>
  		</div>
  		<div class="col-md-4 col-sm-6 col-xs-12"></div>
  		<div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 5%;">
  			<form action="edit_data.php" method="post">
  				<fieldset>
    					<legend>Update Marks</legend>
  				<div class="form-group">
  					<label for="exampleInputEmail1">Select Subject</label>
  					<select class="form-control" id="exampleFormControlSelect1" name="subject">
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
  				</div>
          <input type="text" name="pointer" required="">
  				<button type="submit" class="btn btn-primary">Update</button>
  				</fieldset>
  			</form>
  		</div>
  		<div class="col-md-4 col-sm-6 col-xs-12"></div>
  	</div>
  </div>
</body>
</html>
<?php
        }
        else{
          echo "Result doesn't Exist";
        }
 ?>