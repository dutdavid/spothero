
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Spot Hero</title>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="This Parking Management System Developed by Mayuri K. Freelancer in india">
<meta name="keywords" content="Mayuri K. freelancer">
<meta name="author" content="Mayuri K.">
<?php
  include('connect.php');
$que="select * from manage_website";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
  //print_r($row);
  extract($row);
  $logo = $row['logo'];
}
?>
<link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="files/assets/icon/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">

</head>

