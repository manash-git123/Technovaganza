<?php
session_start();
if (!isset($_SESSION['username'])) {
    # code..
    header('Location:http://localhost/Technovaganza/member-login.html');   
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
                            <form action="entry_via.php" method="POST">
                                

                               <div class="form-group">
                                <!-- <label class="col-md-4 control-label" for="singlebutton">Select Branch</label> -->
                                <div class="col-md-4">
                                   
                                    <select name="branch" required="">
                                        <option value="1">Civil</option>
                                        <option value="2">Mechanical</option>
                                        <option value="3">Electrical</option>
                                        <option value="4">Electronics Communication</option>
                                        <option value="5">Computer Science</option>
                                        <option value="6">Electronics Instrumentation</option>


                                    </select>
                                   <select name="semester" required="">
                                        <option value="1">1st Semester</option>
                                        <option value="2" disabled="">2nd Semester</option>
                                        <option value="3" disabled="">3rd Semester</option>
                                        <option value="4" disabled="">4th Semester</option>
                                        <option value="5" disabled="">5th Semester</option>
                                        <option value="6" disabled="">6th Semester</option>
                                        <option value="7" disabled="">7th Semester</option>
                                        <option value="8" disabled="">8th Semester</option>

                                    </select>
                                    <label class="col-md-4 control-label" for="singlebutton">Select Branch</label>
                                <div class="col-md-4">
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Select</button>
                                </div>
                                </div>
                            </div>
                            <br><br>
                            </form>
                            <form action="update_via.php" method="post">
                                <input type="number" name="scholar_id" placeholder="Scholar Id" required="">
                                <select name="semester" required="">
                                        <option value="1">1st Semester</option>
                                        <option value="2" disabled="">2nd Semester</option>
                                        <option value="3" disabled="">3rd Semester</option>
                                        <option value="4" disabled="">4th Semester</option>
                                        <option value="5" disabled="">5th Semester</option>
                                        <option value="6" disabled="">6th Semester</option>
                                        <option value="7" disabled="">7th Semester</option>
                                        <option value="8" disabled="">8th Semester</option>

                                    </select>
                                <input type="submit" name="update" value="update">
                            </form> 
                            <div class="col-md-7 col-sm-3 col-xs-4"></div>
      <div class="col-md-2 col-sm-3 col-xs-4">
        <div class="single-team"  style="margin-top:10%;">
          <div class="img-text">
                            <h4><a class="logout-style" href="log_out.php">Log Out</a></h4>
                     </div></div></div>
                        </body></html>