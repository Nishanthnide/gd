<?php
include '../login/accesscontroladmin.php';
$ausername=$_SESSION['ausername'];
require('connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/widget-data.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Gear Doctor</title>


<!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

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

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/widget.css">

<link rel="stylesheet" type="text/css" href="css/sweetalert.css">

<link rel="stylesheet" type="text/css" href="css/themify-icons.css">

<link rel="stylesheet" type="text/css" href="css/icofont.css">

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/component.css">

<link rel="stylesheet" type="text/css" href="css/pages.css">
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
<i class="feather icon-layers bg-c-blue"></i>
<div class="d-inline">
<h5>View Admins</h5>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="index.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">Widget</a> </li>
<li class="breadcrumb-item"><a href="#!">data</a> </li>
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



<div class="col-md-12">
<div class="card table-card">
<div class="card-header">
<h5>Customer Overview</h5>
<div class="card-header-right">
<ul class="list-unstyled card-option">
<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
<li><i class="feather icon-maximize full-card"></i></li>
<li><i class="feather icon-minus minimize-card"></i></li>
<li><i class="feather icon-refresh-cw reload-card"></i></li>
<li><i class="feather icon-trash close-card"></i></li>
<li><i class="feather icon-chevron-left open-card-option"></i></li>
</ul>
</div>
</div>
<div class="card-block">
<div class="table-responsive">
<table class="table table-hover m-b-0">
<thead>
<tr>
<th>Admin ID</th>
<th>Username</th>
<th>Email-ID</th>
<th>Actions</th>
</tr>
</thead>
<tbody>    
    <?php
            $sql = "SELECT a_id, username, email FROM admin";
			$result = mysqli_query($connection, $sql);
			foreach($result as $key=>$result)
            { ?>
                <tr>
                    <td> <?php echo $key+1; ?> </td>
                    <td> 
                        <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                                <h6> <?php echo $result["username"]; ?> </h6>
                            </div>
                        </div>
                    </td>
                    <td> <?php echo $result["email"]; ?> </td>
                    <td>
                        <a class="sweet-1 m-b-10" onclick="if (!window.__cfRLUnblockHandlers) return false; _gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);" data-cf-modified-d28fd8086f5eb18f81d8672a-=""><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                        <a class="sweet-1 m-b-10" onclick="if (!window.__cfRLUnblockHandlers) return false; _gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);" data-cf-modified-d28fd8086f5eb18f81d8672a-=""><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                    </td>
                </tr>
    <?php } ?>
    
    
    
</tbody>
 </table>
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


<script data-cfasync="false" src="js/email-decode.min.js"></script><script type="41c5a08083d3d25c74495efb-text/javascript" src="js/jquery.min.js"></script>
<script type="d28fd8086f5eb18f81d8672a-text/javascript" src="js/jquery.min.js"></script>
<script type="d28fd8086f5eb18f81d8672a-text/javascript" src="js/bootstrap.min.js"></script>
<script type="d28fd8086f5eb18f81d8672a-text/javascript" src="js/sweetalert.min.js"></script>
<script type="d28fd8086f5eb18f81d8672a-text/javascript" src="js/modal.js"></script>
<script type="d28fd8086f5eb18f81d8672a-text/javascript" src="js/script.js"></script>
<script src="js/rocket-loader.min.js" data-cf-settings="d28fd8086f5eb18f81d8672a-|49" defer=""></script>
    
<script type="41c5a08083d3d25c74495efb-text/javascript" src="js/jquery-ui.min.js"></script>
<script type="41c5a08083d3d25c74495efb-text/javascript" src="js/popper.min.js"></script>
<script src="js/waves.min.js" type="41c5a08083d3d25c74495efb-text/javascript"></script>
<script type="41c5a08083d3d25c74495efb-text/javascript" src="js/jquery.slimscroll.js"></script>
<script src="js/pcoded.min.js" type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
<script src="js/jquery.flot.js" type="41c5a08083d3d25c74495efb-text/javascript"></script>
<script src="js/jquery.flot.categories.js" type="41c5a08083d3d25c74495efb-text/javascript"></script>
<script src="js/curvedlines.js" type="41c5a08083d3d25c74495efb-text/javascript"></script>
<script src="js/jquery.flot.tooltip.min.js" type="41c5a08083d3d25c74495efb-text/javascript"></script>
<script type="41c5a08083d3d25c74495efb-text/javascript" src="js/todo.js"></script>
<script src="js/markerclusterer.js" type="41c5a08083d3d25c74495efb-text/javascript"></script>
<script type="41c5a08083d3d25c74495efb-text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script type="41c5a08083d3d25c74495efb-text/javascript" src="js/gmaps.js"></script>
<script src="js/pcoded.min.js" type="41c5a08083d3d25c74495efb-text/javascript"></script>
<script src="js/vertical-layout.min.js" type="41c5a08083d3d25c74495efb-text/javascript"></script>
<script type="41c5a08083d3d25c74495efb-text/javascript" src="js/widget-data.js"></script>
<script type="41c5a08083d3d25c74495efb-text/javascript" src="js/script.min.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="41c5a08083d3d25c74495efb-text/javascript"></script>
<script type="41c5a08083d3d25c74495efb-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="js/rocket-loader.min.js" data-cf-settings="41c5a08083d3d25c74495efb-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/widget-data.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:43 GMT -->
</html>
