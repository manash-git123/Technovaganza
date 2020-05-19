<?php 
 // mysql_connect("localhost","root","");
// mysql_select_db("test");
// session_start(); 
	include 'db.php';
    // session_start();
	$branch=$_POST['branch'];
	$_SESSION['branch'] = $branch;
    if ($branch == 0 ) {
        # code...
    header('Location:http://localhost/Technovaganza/index.php');
}
	$con = getdb();
        $Sql = "SELECT * FROM result".$_SESSION['branch']."";
        $val = mysqli_query($con, $Sql);

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
if($val == FALSE)
{
   
  ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Subject Entry</title>
 </head>
 <body>
  <h2>No previous result available for <?php echo $x; ?> Department</h2>
 <h3>
 	Enter the Subjects:
 </h3>
 <form action="table_create.php" method="post">
 	<input type="text" name="sub1" placeholder="Subject ">
 	<input type="text" name="sub2" placeholder="Subject ">
 	<input type="text" name="sub3" placeholder="Subject ">
 	<input type="text" name="sub4" placeholder="Subject ">
 	<input type="text" name="sub5" placeholder="Subject ">
 	<input type="text" name="sub6" placeholder="Subject ">
 	<input type="text" name="sub7" placeholder="Subject ">
 	<input type="text" name="sub8" placeholder="Subject ">
 	<input type="text" name="sub9" placeholder="Subject ">
    <input type="number" style="width: 0px;height: 0px;" name="branch" value="<?php echo $branch;?>" >
<p>
	<input type="submit" name="submit">
</p>

 </form>
 </body>
 </html>

  <?php

}else{


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pointer Entry</title>
 </head>
 <body>
 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  /*bottom: 23px;*/
  /*right: 28px;*/
  width: 30%;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  /*bottom: 0;*/
  /*right: 15px;*/
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 100%;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<h2>Result Section</h2>
<p></p>
<p></p>

<button class="open-button" onclick="openForm()">Enter Result</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Enter Details</h1>

    <label for="number"><b>Scholar ID</b></label>
    <input type="number" placeholder="Enter Scholar ID" name="scholar_id" required>
    <button type="submit" class="btn">Enter</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<button class="open-button" onclick="openForm()">Enter Result</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Enter Details</h1>

    <label for="number"><b>Scholar ID</b></label>
    <input type="number" placeholder="Enter Scholar Id" name="scholar_id" required>
    <button type="submit" class="btn">Enter</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
 </body>
 </html>

 <?php
}
?>