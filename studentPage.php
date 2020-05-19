<?php

session_start();
include 'db.php';
$scholar_id = $_SESSION['username'];
if (!$_SESSION['username']) {
  # code...
    header('Location:http://localhost/Technovaganza/StudentLogin.html');	
}
$branch = ($scholar_id/1000)%10;
 $con = getdb();

           $Sql = "SELECT * FROM result WHERE branch =".$branch." AND scholar_id=".$scholar_id."";
           $result = mysqli_query($con, $Sql); 
switch ($branch) {
                                    case 1:
                                        $x =  "Civil";
                                        $_SESSION['x']=$x;
                                        # code...
                                        break;
                                    case 2:
                                        $x = "Mechanical";
                                        $_SESSION['x']=$x;
                                        # code...
                                        break;
                                    case 3:
                                        $x = "Electrical";
                                        $_SESSION['x']=$x;
                                        # code...
                                        break;
                                    case 4:
                                        $x = "Electronics Communication";
                                        $_SESSION['x']=$x;
                                        # code...
                                        break;
                                    case 5:
                                        $x = "Computer Science";
                                        $_SESSION['x']=$x;
                                        # code...
                                        break;
                                    case 6:
                                        $x = "Mechanical";
                                        # code...
                                        $_SESSION['x']=$x;
                                        break;
                                }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tecnovaganza</title>
	<link rel="stylesheet" media="screen" type="text/css" href="css/style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" media="screen" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
   @media print {
   body {
       display: table;
       table-layout: fixed;
       padding-top: 2.5cm;
       padding-bottom: 2.5cm;
       height: auto;
   }
}
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
.logout-style{
  color:white;
  text-decoration: none;
  font-size: 20px;
}
@media screen and(max-width:768px){
  .logout-style{
    font-size: 16px;
  }
}
.logout-style:hover, .logout-style:focus{
    color:white;
  text-decoration: none;
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
      <li><a href="log_out.php">Log Out</a></li>
</ul>
  </div>
</div>
</nav>
<!--End Navbar Area-->
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-9 col-xs-8">
        <div class="single-team"  style="margin-top:10%;">
          <div class="img-text">
            <h4 style="text-align: left;font-size: 20px;">Scholar Id: <?php echo $scholar_id;?></h4>
          </div>
        </div>
      </div>
      <div class="col-md-7 col-sm-3 col-xs-4"></div>
      <div class="col-md-2 col-sm-3 col-xs-4">
        <div class="single-team"  style="margin-top:10%;">
          <div class="img-text">
            <h4><a class="logout-style" href="log_out.php">Log Out</a></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="team-area" style="margin-top: -60px;">
  <h1 class="team_text">Semester Results</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-team">
          <div class="img-text" data-toggle="modal" data-target="#exampleModalCenter1">
            <h4>Semester 1</h4>
          </div>
      <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle1">Semester 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body1">
        <form>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><b>Scholar Id :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo $scholar_id;?>">
            </div>
          </div>
        <div class="form-group row">
            <label for="branch" class="col-sm-2 col-form-label"><b>Branch :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo "$x"; ?>">
            </div>
        </div>
           <div class="form-group row">
            <div class="col-sm-12">
              <table class="table table-borderless table-dark">
  <tbody>
    <?php  
        $sql1 = "SELECT * FROM subjects WHERE branch =".$branch." AND semester = 1";
        $result1 = mysqli_query($con, $sql1); 
        $row1 = mysqli_fetch_assoc($result1);
        $i=0;
          $b = NULL;
        while($row1 = mysqli_fetch_assoc($result1)) {
        	
        	$sub1[$i] =  $row1['subject'];
          $b = "".$b."".$sub1[$i].","."";
        	$i++;
        }
       if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['sub1'] = $row['sub1'];
       
    ?>
     <tr>
      <th scope="col" class="pl-5"><?php if($branch == 3||$branch == 4||$branch == 5){echo "Chemistry"
      ;}
      else{
      	echo "Physics";
      }?></th>
      <td><?php echo $_SESSION['sub1'];?></td>
    </tr>
    <tr>
      <th scope="col"  class="pl-5"><?php echo $sub1[0]?></th>
       <td><?php echo $row['sub2']?></td>
    </tr>
    <tr>
      <th scope="col" class="pl-5"><?php echo $sub1[1]?></th>
       <td><?php echo $row['sub3']?></td>
    </tr>
    <tr>
      <th scope="col" class="pl-5"><?php echo $sub1[2]?></th>
       <td><?php echo $row['sub4']?></td>
    </tr>
    <tr>
      <th scope="col" class="pl-5"><?php echo $sub1[3]?></th>
       <td><?php echo $row['sub5']?></td>
      </tr>
      <tr>
      <th scope="col" class="pl-5"><?php echo $sub1[4]?></th>
       <td><?php echo $row['sub6']?></td>
       </tr>
       <tr>
       <th scope="col" class="pl-5"><?php echo $sub1[5]?></th>
        <td><?php echo $row['sub7']?></td>
     </tr>
     <tr>
      <th scope="col" class="pl-5"><?php echo $sub1[6]?></th>
       <td><?php echo $row['sub8']?></td>
      </tr>
      <tr>
      <th scope="col" class="pl-5"><?php echo $sub1[7]?></th>
       <td><?php echo $row['sub9']?></td>
    </tr>
  </tbody>
</table>
<?php  
}
?>
            </div>
        </div>
           <div class="form-group row">
            <label for="SPI" class="col-sm-2 col-form-label"><b>SPI :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo $row['spi']?>">
            </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="background:#be1919e3;" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('modal-body1')">Print</button>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-team">         
          <div class="img-text" data-toggle="modal" data-target="#exampleModalCenter2">
            <h4>Semester 2</h4>  
          </div>
          <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle2">Semester 2</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body2">
        <form>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><b>Scholar Id :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo $scholar_id;?>">
            </div>
          </div>
        <div class="form-group row">
            <label for="branch" class="col-sm-2 col-form-label"><b>Branch :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo "$x"; ?>">
            </div>
        </div>
           <div class="form-group row">
            <div class="col-sm-12">
              <table class="table table-borderless table-dark">
  <tbody>
     <tr>
      <th scope="col" class="pl-5">Subject1 ----</th>
      <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col"  class="pl-5">Subject2 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject3 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject4 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject5 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject6 ----</th>
       <td>Not Available</td>
       </tr>
       <tr>
       <th scope="col" class="pl-5">Subject7 ----</th>
        <td>Not Available</td>
     </tr>
     <tr>
      <th scope="col" class="pl-5">Subject8 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject9 ----</th>
       <td>Not Available</td>
    </tr>
  </tbody>
</table>

            </div>
        </div>
           <div class="form-group row">
            <label for="SPI" class="col-sm-2 col-form-label"><b>SPI :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="SPI">
            </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="background:#be1919e3;" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('modal-body2')">Print</button>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-team" data-toggle="modal" data-target="#exampleModalCenter3">
        
          <div class="img-text">
            <h4>Semester 3</h4>

          </div>
          	<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle3">Semester 3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body3">
        <form>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><b>Scholar Id :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo $scholar_id;?>">
            </div>
          </div>
        <div class="form-group row">
            <label for="branch" class="col-sm-2 col-form-label"><b>Branch :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo "$x"; ?>">
            </div>
        </div>
           <div class="form-group row">
            <div class="col-sm-12">
              <table class="table table-borderless table-dark">
  <tbody>
     <tr>
      <th scope="col" class="pl-5">Subject1 ---</th>
      <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col"  class="pl-5">Subject2 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject3 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject4 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject5 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject6 ----</th>
       <td>Not Available</td>
       </tr>
       <tr>
       <th scope="col" class="pl-5">Subject7 ----</th>
        <td>Not Available</td>
     </tr>
     <tr>
      <th scope="col" class="pl-5">Subject8 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject9 ----</th>
       <td>Not Available</td>
    </tr>
  </tbody>
</table>

            </div>
        </div>
           <div class="form-group row">
            <label for="SPI" class="col-sm-2 col-form-label"><b>SPI :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="SPI">
            </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="background:#be1919e3;" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('modal-body3')">Print</button>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-team">
          <div class="img-text" data-toggle="modal" data-target="#exampleModalCenter4">
            <h4>Semester 4</h4>
          </div>
          <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle4">Semester 4</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body4">
        <form>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><b>Scholar Id :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo $scholar_id;?>">
            </div>
          </div>
        <div class="form-group row">
            <label for="branch" class="col-sm-2 col-form-label"><b>Branch :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo "$x"; ?>">
            </div>
        </div>
           <div class="form-group row">
            <div class="col-sm-12">
              <table class="table table-borderless table-dark">
  <tbody>
     <tr>
      <th scope="col" class="pl-5">Subject1 ----</th>
      <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col"  class="pl-5">Subject2 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject3 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject4 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject5 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject6 ----</th>
       <td>Not Available</td>
       </tr>
       <tr>
       <th scope="col" class="pl-5">Subject7 ----</th>
        <td>Not Available</td>
     </tr>
     <tr>
      <th scope="col" class="pl-5">Subject8 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject9 ----</th>
       <td>Not Available</td>
    </tr>
  </tbody>
</table>

            </div>
        </div>
           <div class="form-group row">
            <label for="SPI" class="col-sm-2 col-form-label"><b>SPI :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="SPI">
            </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="background:#be1919e3;" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('modal-body4')">Print</button>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-team">
          <div class="img-text" data-toggle="modal" data-target="#exampleModalCenter5">
            <h4>Semester 5</h4>
          </div>
          <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle5" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle5">Semester 5</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body5">
        <form>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><b>Scholar Id :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo $scholar_id;?>">
            </div>
          </div>
        <div class="form-group row">
            <label for="branch" class="col-sm-2 col-form-label"><b>Branch :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo "$x"; ?>">
            </div>
        </div>
           <div class="form-group row">
            <div class="col-sm-12">
              <table class="table table-borderless table-dark">
  <tbody>
     <tr>
      <th scope="col" class="pl-5">Subject1 ----</th>
      <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col"  class="pl-5">Subject2 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject3 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject4 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject5 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject6 ----</th>
       <td>Not Available</td>
       </tr>
       <tr>
       <th scope="col" class="pl-5">Subject7 ----</th>
        <td>Not Available</td>
     </tr>
     <tr>
      <th scope="col" class="pl-5">Subject8 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject9 ----</th>
       <td>Not Available</td>
    </tr>
  </tbody>
</table>

            </div>
        </div>
           <div class="form-group row">
            <label for="SPI" class="col-sm-2 col-form-label"><b>SPI :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="SPI">
            </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="background:#be1919e3;" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('modal-body5')">Print</button>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>   
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-team">
          <div class="img-text" data-toggle="modal" data-target="#exampleModalCenter6">
            <h4>Semester 6</h4>
          </div>
          <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle6" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle6">Semester 6</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body6">
        <form>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><b>Scholar Id :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo $scholar_id;?>">
            </div>
          </div>
        <div class="form-group row">
            <label for="branch" class="col-sm-2 col-form-label"><b>Branch :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo "$x"; ?>">
            </div>
        </div>
           <div class="form-group row">
            <div class="col-sm-12">
              <table class="table table-borderless table-dark">
  <tbody>
     <tr>
      <th scope="col" class="pl-5">Subject1 ----</th>
      <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col"  class="pl-5">Subject2 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject3 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject4 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject5 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject6 ----</th>
       <td>Not Available</td>
       </tr>
       <tr>
       <th scope="col" class="pl-5">Subject7 ----</th>
        <td>Not Available</td>
     </tr>
     <tr>
      <th scope="col" class="pl-5">Subject8 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject9 ----</th>
       <td>Not Available</td>
    </tr>
  </tbody>
</table>

            </div>
        </div>
           <div class="form-group row">
            <label for="SPI" class="col-sm-2 col-form-label"><b>SPI :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="SPI">
            </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="background:#be1919e3;" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('modal-body6')">Print</button>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-team">
          <div class="img-text" data-toggle="modal" data-target="#exampleModalCenter7">
            <h4>Semester 7</h4>
          </div>
          <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle7" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle7">Semester 7</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body7">
        <form>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><b>Scholar Id :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo $scholar_id;?>">
            </div>
          </div>
        <div class="form-group row">
            <label for="branch" class="col-sm-2 col-form-label"><b>Branch :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo "$x"; ?>">
            </div>
        </div>
           <div class="form-group row">
            <div class="col-sm-12">
              <table class="table table-borderless table-dark">
  <tbody>
     <tr>
      <th scope="col" class="pl-5">Subject1 ----</th>
      <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col"  class="pl-5">Subject2 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject3 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject4 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject5 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject6 ----</th>
       <td>Not Available</td>
       </tr>
       <tr>
       <th scope="col" class="pl-5">Subject7 ----</th>
        <td>Not Available</td>
     </tr>
     <tr>
      <th scope="col" class="pl-5">Subject8 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject9 ----</th>
       <td>Not Available</td>
    </tr>
  </tbody>
</table>

            </div>
        </div>
           <div class="form-group row">
            <label for="SPI" class="col-sm-2 col-form-label"><b>SPI :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="SPI">
            </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="background:#be1919e3;" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('modal-body7')">Print</button>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="single-team">
          <div class="img-text" data-toggle="modal" data-target="#exampleModalCenter8">
            <h4>Semester 8</h4>
          </div>
          <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle8" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle8">Semester 8</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body8">
        <form>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><b>Scholar Id :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo $scholar_id;?>">
            </div>
          </div>
        <div class="form-group row">
            <label for="branch" class="col-sm-2 col-form-label"><b>Branch :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo "$x"; ?>">
            </div>
        </div>
           <div class="form-group row">
            <div class="col-sm-12">
              <table class="table table-borderless table-dark">
  <tbody>
     <tr>
      <th scope="col" class="pl-5">Subject1 ----</th>
      <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col"  class="pl-5">Subject2 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject3 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject4 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Subject5 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject6 ----</th>
       <td>Not Available</td>
       </tr>
       <tr>
       <th scope="col" class="pl-5">Subject7 ----</th>
        <td>Not Available</td>
     </tr>
     <tr>
      <th scope="col" class="pl-5">Subject8 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Subject9 ----</th>
       <td>Not Available</td>
    </tr>
  </tbody>
</table>

            </div>
        </div>
           <div class="form-group row">
            <label for="SPI" class="col-sm-2 col-form-label"><b>SPI :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="SPI">
            </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" style="background:#be1919e3;" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('modal-body8')">Print</button>
      </div>
    </div>
  </div>
</div>
  </div>
 </div>
 <div class="col-md-4"></div>
       <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="single-team">
          <div class="img-text" data-toggle="modal" data-target="#exampleModalCenterAll">
            <h4>Print All</h4>
          </div>
          <div class="modal fade" id="exampleModalCenterAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitleAll" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitleAll">Print All</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-bodyAll">
        <form>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><b>Scholar Id :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo $scholar_id;?>">
            </div>
          </div>
        <div class="form-group row">
            <label for="branch" class="col-sm-2 col-form-label"><b>Branch :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="<?php echo "$x"; ?>">
            </div>
        </div>
           <div class="form-group row">
            <div class="col-sm-12">
              <table class="table table-borderless table-dark">
  <tbody>
     <tr>
      <th scope="col" class="pl-5">Semester1 ----</th>
      <td><?php echo $row['spi']?></td>
    </tr>
    <tr>
      <th scope="col"  class="pl-5">Semester2 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Semester3 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Semester4 ----</th>
       <td>Not Available</td>
    </tr>
    <tr>
      <th scope="col" class="pl-5">Semester5 ----</th>
       <td>Not Available</td>
      </tr>
      <tr>
      <th scope="col" class="pl-5">Semester6 ----</th>
       <td>Not Available</td>
       </tr>
       <tr>
       <th scope="col" class="pl-5">Semester7 ----</th>
        <td>Not Available</td>
     </tr>
     <tr>
      <th scope="col" class="pl-5">Semester8 ----</th>
       <td>Not Available</td>
      </tr>
  </tbody>
</table>

            </div>
        </div>
           <div class="form-group row">
            <label for="SPI" class="col-sm-2 col-form-label"><b>CPI :-</b></label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="CPI">
            </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="background:red;" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('modal-bodyAll')">Print</button>
      </div>
    </div>
  </div>
</div>
  </div>
 </div>
 <div class="col-md-4"></div>
</div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-6 col-xs-12">
    	<?php 
    	$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test";
    	$con = mysqli_connect($hostname,$username,$password,$dbname);

$sql = "SELECT * FROM result WHERE scholar_id =".$scholar_id." ";
$result = mysqli_query($con,$sql);
$a = NULL;
	while ($row = mysqli_fetch_assoc($result)) {
	$a = "".$a."".$row['spi'].",7.24,6.8";
	}

	$c = "".$row['sub1'].",".$row['sub2'].",".$row['sub3'].",".$row['sub4'].",".$row['sub5'].",".$row['sub6'].",".$row['sub7'].",".$row['sub8'].",".$row['sub9'].",";
  echo "<script>alert(".$c.");</script>";
  echo "<script>alert(".$b.");</script>";
		echo shell_exec("python particular.py $a");
		exec('particular.py',$output);
    echo shell_exec("python student.py $c $b");
    exec('student.py',$output);
    	 ?>
      <img src="report.png" style="width:100%;height:100%">
    </div>
      <div class="col-md-3"></div>
    </div>
  </div>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>