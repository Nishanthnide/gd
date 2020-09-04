<?php
include '../login/accesscontroladmin.php';
$ausername=$_SESSION['ausername'];
require('connect.php');

$getadmincount=mysqli_query($connection,"SELECT * FROM admin");
$acount=mysqli_num_rows($getadmincount);

$getmechcount=mysqli_query($connection,"SELECT * FROM mechanics");
$mcount=mysqli_num_rows($getmechcount);

$getcustcount=mysqli_query($connection,"SELECT * FROM customer");
$ccount=mysqli_num_rows($getcustcount);

//$getwardcount=mysqli_query($connection,"SELECT * FROM wards WHERE status='0'");
//$wcount=mysqli_num_rows($getwardcount);
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Gear Doctor</title>
<link rel="icon" type="image/png" sizes="16x16" href="png/GD-logo-dark.png">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="colorlib" />

<link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="css/feather.css">

<link rel="stylesheet" type="text/css" href="css/font-awesome-n.min.css">

<link rel="stylesheet" href="css/chartist.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/widget.css">
    
</head>
<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php include 'header.php'; ?>






<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<?php include 'left-sidebar.php'; ?>

<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-home bg-c-blue"></i>
<div class="d-inline">
<h5>Dashboard</h5>
    <span>You are logged-in to ADMIN control panel.</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="admin_index.php"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="admin_index.php">Dashboard</a> </li>
</ul>
</div>
</div>
</div>
</div>
    


    

<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-body">

<div class="row">

<div class="col-xl-12 col-md-8">
<div class="card card-inverse">
							<img id="theImgId" class="card-img" src="../plugins/images/cards/bg5.png" height="120" alt="Card image">
							<div class="card-img-overlay" style="padding-top: 5px">
                                <p class="card-text"><small class="text-white">  </small></p>
								<h4 class="card-title text-uppercase" style="color:white">WELCOME <?php echo $ausername; ?></h4>
								<p class="card-text" style="color:white">Here are some of the basic information and functions to perform.<br>-Gear Doctor</p>
                                
							</div>
    </div>
</div>
    </div>
    
    
<div class="row">

<div class="col-xl-3 col-md-6">
<div class="card prod-p-card card-red">
<div class="card-body">
<div class="row align-items-center m-b-30">
<div class="col">
<h6 class="m-b-5 text-white">Our Admins</h6>
<h3 class="m-b-0 f-w-700 text-white"><?php echo $acount ?></h3>
</div>
<div class="col-auto">
<i class="fa fa-users text-c-red f-18"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card prod-p-card card-blue">
<div class="card-body">
<div class="row align-items-center m-b-30">
<div class="col">
<h6 class="m-b-5 text-white">Our Mechanics</h6>
<h3 class="m-b-0 f-w-700 text-white"><?php echo $mcount ?></h3>
</div>
<div class="col-auto">
<i class="fa fa-wrench text-c-blue f-18"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card prod-p-card card-green">
<div class="card-body">
<div class="row align-items-center m-b-30">
<div class="col">
<h6 class="m-b-5 text-white">Our Customers</h6>
<h3 class="m-b-0 f-w-700 text-white"><?php echo $ccount ?></h3>
</div>
<div class="col-auto">
<i class="fa fa-street-view text-c-green f-18"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card prod-p-card card-yellow">
<div class="card-body">
<div class="row align-items-center m-b-30">
<div class="col">
<h6 class="m-b-5 text-white">Total Services</h6>
<h3 class="m-b-0 f-w-700 text-white"><?php echo $ccount ?></h3>
</div>
<div class="col-auto">
<i class="fas fa-database text-c-yellow f-18"></i>
</div>
</div>
</div>
</div>
</div>





</div>

</div>
</div>
</div>
</div>
</div>

<div id="styleSelector">
</div>

</div>
</div>
</div>
</div>

<?php include 'jslink.php'; ?>
    </body>

</html>
