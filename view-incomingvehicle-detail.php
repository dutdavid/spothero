<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Spot Hero</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>
        
<!--Header-->

<?php include('head.php');?>
<!-- /Header --> 

<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');
if(isset($_POST['submit']))
  {
    
    $cid=$_GET['viewid'];
      $remark=$_POST['remark'];
      $status=$_POST['status'];
      $parkingcharge=$_POST['parkingcharge'];
      
    $query=mysqli_query($conn, "update  tblvehicle set Remark='$remark',Status='$status',ParkingCharge='$parkingcharge' where ID='$cid'");
    if ($query) {
    $msg="All remarks has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
} 

?>
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Manage Incoming Vehicle</h4>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="dashboard.php"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Manage Vehicle</a>
</li>
<li class="breadcrumb-item"><a href="manage-incomingvehicle.php">Manage Incoming Vehicle</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="page-body">
   <div class="card">
                        <div class="card-header">
                            <strong class="card-title">View Incoming Vehicle</strong>
                        </div>
                        <div class="card-body"> 
                          <?php
                          $cid=$_GET['viewid'];
                          $ret=mysqli_query($conn,"select * from tblvehicle where ID='$cid'");
                          $cnt=1;
                          while ($row=mysqli_fetch_array($ret)) {

                          ?>                       
                          <table border="1" class="table table-bordered mg-b-0">
              
                            <tr>
                                <th>Parking Number</th>
                                <td><?php  echo $row['ParkingNumber'];?></td>
                              </tr>                             
                              <tr>
                                <th>Vehicle Category</th>
                                  <td><?php  echo $row['VehicleCategory'];?></td>
                              </tr>
                            <tr>
                              <th>Vehicle Company Name</th>
                              <td><?php  echo $packprice= $row['VehicleCompanyname'];?></td>
                            </tr>
                            <tr>
                              <th>Registration Number</th>
                              <td><?php  echo $row['RegistrationNumber'];?></td>
                            </tr>
                            <tr>
                              <th>Owner Name</th>
                              <td><?php  echo $row['OwnerName'];?></td>
                            </tr>
                            <tr>  
                              <th>Owner Contact Number</th>
                              <td><?php  echo $row['OwnerContactNumber'];?></td>
                            </tr>
                            <tr>
                              <th>In Time</th>
                              <td><?php  echo $row['InTime'];?></td>
                            </tr>
                            <tr>
                            <th>Status</th>
                            <td> 
                              <?php  
                              if($row['Status']=="")
                              {
                                echo "Vehicle In";
                              }
                              if($row['Status']=="Out")
                              {
                                echo "Vehicle out";
                              } 
                              ;?>
                            </td>
                          </tr> 
                        </table>
                    </div>
                </div>
<table class="table mb-0"> 
                  <?php if($row['Status']==""){ ?>
                  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <p style="font-size:16px; color:red" align="center"> <?php if(isset($msg)){
                        echo $msg;
                      }  ?> 
                    </p> 
                    <tr>
                      <th>Remark :</th>
                      <td>
                      <textarea name="remark" placeholder="" rows="12" cols="14" class="form-control" required="true"></textarea></td>
                    </tr>
                    <tr>
                      <th>Parking Charge: </th>
                      <td>
                        <input type="text" name="parkingcharge" id="parkingcharge" class="form-control" >
                      </td>
                    </tr>
                    <tr>
                      <th>Status :</th>
                      <td>
                        <select name="status" class="form-control" required="true" >
                          <option value="Out">Outgoing Vehicle</option>
                        </select>
                      </td>
                    </tr>
                    <tr>  
                      <p style="text-align: center;"><td> <button type="submit" class="btn btn-primary m-b-0" name="submit" >Update</button></p></td></tr>
                    </form>
                </table>
                <?php } else { ?>
                    <table border="1" class="table table-bordered mg-b-0">
                  <tr>
                    <th>Remark</th>
                    <td><?php echo $row['Remark']; ?></td>
                  </tr>
                <tr>
                  <tr>
                    <th>Parking Fee</th>
                  <td><?php echo $row['ParkingCharge']; ?></td>
                  </tr>
</tr>
<?php } ?>
   </table>               
<?php } ?>
                    </div>
                </div>

</div>

</div>
</div>

<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include('footer.php');?>
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h3>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
    <?php echo "<script>setTimeout(\"location.href = 'manage-incomingvehicle.php';\",1500);</script>"; ?> 
      <button class="button button--success" data-for="js_success-popup">Close</button> 
    </p>
  </div>
</div>

<?php unset($_SESSION["success"]);  
 ?>
<?php } ?>    
<script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>




<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>