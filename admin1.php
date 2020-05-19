<?php
session_start();
if (!isset($_SESSION['username'])) {
    # code..
    header('Location:http://localhost/Technovaganza/member-login.html');   
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<link rel="stylesheet" media="screen" type="text/css" href="css/index.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
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
	</style>
</head>
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
      <li><a href="log_out.php"><button type="submit" class="btn">Log Out</button></a></li>
</ul>
  </div>
</div>
  </nav>
  <div class="container">
  	<div class="row">
  		<div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 20%;">
  			<form action="entry_via.php" method="post">
  				<fieldset>
    					<legend>Upload Result</legend>
  				<div class="form-group">
  					<label for="exampleInputEmail1">Select Branch</label>
  					<select class="form-control" id="exampleFormControlSelect1" name="branch">
  						<option value="1">Civil</option>
  						<option value="2">Mechanical</option>
  						<option value="3">Electrical</option>
  						<option value="4">Electronics</option>
  						<option value="5">Computer Science</option>
  						<option value="6">Instrumentation</option>
  					</select>
  				</div>
  				<div class="form-group">
  					<label for="exampleInputEmail1">Select Semester</label>
  					<select class="form-control" id="exampleFormControlSelect1" name="semester">
  						<option value="1">1</option>
  						<option value="2">2</option>
  						<option value="3">3</option>
  						<option value="4">4</option>
  						<option value="5">5</option>
  						<option value="6">6</option>
  						<option value="7">7</option>
  						<option value="8">8</option>
  					</select>
  				</div>
  				<button type="submit" class="btn btn-primary">Select</button>
  			</fieldset>
  			</form>
  		</div>
  				<div class="col-md-4"></div>
  		<div class="col-md-4 col-xs-12 col-sm-6" style="margin-top: 20%;">
  			<form action="update_via.php" method="post">
  				<fieldset>
    					<legend>Update Result</legend>
  				<div class="form-group">
  					<label for="exampleInputEmail1">Scholar Id</label>
  					<input type="text" class="form-control" id="scholarId"  name="scholar_id" placeholder="Scholar ID">
  				</div>
  				<div class="form-group">
  					<label for="exampleFormControlSelect1">Select Semester</label>
  					<select class="form-control" id="exampleFormControlSelect1" name="semester">
  						<option value="1">1</option>
  						<option value="2">2</option>
  						<option value="3">3</option>
  						<option value="4">4</option>
  						<option value="5">5</option>
  						<option value="6">6</option>
  						<option value="7">7</option>
  						<option value="8">8</option>
  					</select>
  				</div>
  				<button type="submit" class="btn btn-primary">Update</button>
  			</fieldset>
  			</form>
  		</div>
  
  	</div>
  </div>
</body>
</html>