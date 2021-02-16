<?php 
session_start();
include('includes/config.php');
include('admin/head.php');
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
<?php include('includes/header.php');?>
<?php include('head.php');?>
<!-- /Header --> 

<?php include('connect.php');

if(isset($_POST['submit']))
  {
    $parkingnumber=mt_rand(100000000, 999999999);
    $catename=$_POST['catename'];
     $vehcomp=$_POST['vehcomp'];
    $vehreno=$_POST['vehreno'];
    $ownername=$_POST['ownername'];
    $ownercontno=$_POST['ownercontno'];
    $enteringtime=$_POST['enteringtime'];
    
     
    $query=mysqli_query($conn, "insert into  tblvehicle(ParkingNumber,VehicleCategory,VehicleCompanyname,RegistrationNumber,OwnerName,OwnerContactNumber) value('$parkingnumber','$catename','$vehcomp','$vehreno','$ownername','$ownercontno')");
    if ($query) {
echo "<script>alert('Vehicle Entry Detail has been added');</script>";
echo "<script>window.location.href ='manage-incomingvehicle.php'</script>";
  }
  else
    {
     echo "<script>alert('Something Went Wrong. Please try again.');</script>";       
    }

  
}
  ?>

                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" name="search">
                                <p style="font-size:16px; color:red" align="center"> 
                                    <?php if(isset($msg)){
                                    echo $msg;
                                    }  ?> 
                                </p>
                                
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Search By Parking Number</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="searchdata" name="searchdata" class="form-control"  required="required" autofocus="autofocus" ></div>
                                </div> 
                                <p style="text-align: center;"> <button type="submit" class="btn btn-primary m-b-0" name="search" >Search</button></p>
                            </form>

                            <?php
                            if(isset($_POST['search']))
                            { 

                            $sdata=$_POST['searchdata'];
                            ?>
                            <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4> 
                            <table class="table">
                                <thead>
                                    <tr>
                                        <tr>
                                            <th>S.NO</th>
                                            <th>Parking Number</th>
                                            <th>Owner Name</th>
                                            <th>Vehicle Reg. Number</th> 
                                            <th>Action</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <?php
                                $ret=mysqli_query($conn,"select *from   tblvehicle where ParkingNumber like '$sdata%'");
                                $num=mysqli_num_rows($ret);
                                if($num>0){
                                $cnt=1;
                                while ($row=mysqli_fetch_array($ret)) {

                                ?> 
                                <tr>
                                <td><?php echo $cnt;?></td>
                            
                                
                                <td><?php  echo $row['ParkingNumber'];?></td>
                                <td><?php  echo $row['OwnerName'];?></td>
                                <td><?php  echo $row['RegistrationNumber'];?></td>
                                
                                <td><a href="view-incomingvehicle-detail.php?viewid=<?php echo $row['ID'];?>"class="btn btn-xs btn-primary"><i class="feather icon-clock m-t-10 f-16 " ></i></a></td>
                                </tr>
                                <?php 
                                $cnt=$cnt+1;
                                } } else { ?>
                                    <tr>
                                    <td colspan="8"> No record found against this search</td>

                                </tr>
                                
                                <?php } }?>
                            </table>
                        </div>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 



</body>
</html>