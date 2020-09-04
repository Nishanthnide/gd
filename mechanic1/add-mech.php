<?php
include '../login/accesscontroladmin.php';
require('connect.php');
$ausername=$_SESSION['ausername'];

if (isset($_POST['username']) && isset($_POST['password']))
	{
		// real eacape sting is used to prevent sql injection hacking
		$username= mysqli_real_escape_string($connection,$_POST['username']);
		$email=mysqli_real_escape_string($connection,$_POST['email']);
		$password= md5($_POST['password']);
		$repassword= md5($_POST['repassword']);
		if($password == $repassword) 
		{
			
			$usersql="SELECT * FROM `admin` WHERE username='$username'";
			$checkuser=mysqli_query($connection, $usersql);
			$countu=mysqli_num_rows($checkuser);
			$emailsql="SELECT * FROM `admin` WHERE email='$email'";
			$checkemail=mysqli_query($connection, $emailsql);
			$counte=mysqli_num_rows($checkemail);
			if($counte==1 || $countu==1)
			{
				$fmsg .= " username/email alredy exists";
			}
			else
			{
			
				$query="INSERT INTO `admin`(username, email, password) VALUES ('$username','$email','$password')";
				$result = mysqli_query($connection, $query); 
				//takes two arguments 
				if($result)
				{
					$smsg = "User Created Successfully.";
				}
				else
				{
					$fmsg = "User Registration Failed";
				}
			}
		}
		else
		{
			$fmsg="Password Doesn't Match"; 
		}
	}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Gear Doctor</title>
    
<link rel="icon" type="image/png" sizes="16x16" href="png/GD-logo-dark.png">


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="css/feather.css">

<link rel="stylesheet" type="text/css" href="css/themify-icons.css">

<link rel="stylesheet" type="text/css" href="css/icofont.css">

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/style.css">
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
                                    <i class="feather icon-clipboard bg-c-blue"></i>
                                    <div class="d-inline">
                                        <h5>ADD MECHANIC</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">

                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Account Information</h5>
                                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                </div>
                                                
                                                
                                                
                                                <div class="card-block">
                                                    <form id="main" method="post" novalidate>
                                                        <?php if(isset($fmsg)) { ?>
                                                            <div class="alert alert-danger background-danger">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                        <i class="icofont icofont-close-line-circled text-white"></i>
                                                                </button>
                                                                <strong><?php echo $fmsg; ?></strong>
                                                            </div>
					                                    <?php }?> 
								                        <?php if(isset($smsg)) { ?>
                                                            <div class="alert alert-success background-success">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                                                </button>
                                                                <strong><?php echo $smsg; ?></strong>
                                                            </div>
                                                        <?php }?>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Username</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="username" id="name" placeholder="Text Input Validation">
                                                                <span class="messages"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter valid e-mail address">
                                                                <span class="messages"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Password</label>
                                                            <div class="col-sm-5">
                                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password input">
                                                                <span class="messages"></span>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Repeat Password">
                                                                <span class="messages"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2"></label>
                                                            <div class="col-sm-10">
                                                                <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                <?php include 'footer.php'; ?>
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
