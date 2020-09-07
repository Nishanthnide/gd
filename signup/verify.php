<?php
session_start();
require('connect.php');
if(isset($_SESSION['cusername']))
{
	$ausername=$_SESSION['cusername'];
}
elseif(isset($_SESSION['ausername']))
{
	$ausername=$_SESSION['ausername'];
}

if (isset($_POST['otp']))
	{
		// real eacape sting is used to prevent sql injection hacking
		$otp=$_POST['otp'];
    
        //$db = mysqli_connect();
        $query="SELECT * FROM `otp` WHERE otp='$otp'";
		$result = mysqli_query($connection,$query);
		$row = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);
    
        
        //$otp_check = mysqli_query($connection,"SELECT otp FROM 'otp' WHERE otp='$otp'");
        //echo $otp_check;
		/*$query="SELECT * FROM `otp`";
		$result = mysqli_query($query);
		$row = mysqli_fetch_assoc($result);*/
		//$count = mysqli_num_rows($result);
        //$row = mysqli_fetch_row($otp_check);
        //$fmsg="$otp_check";
        //$row = mysqli_fetch_row($otp_check);
        //echo $row[1];
        
    
        if($count==1)
		{
			$_SESSION['aotp'] = $row["otp"];
			echo'<script> window.location="../customer1/quick_cust_index.php";</script>';
			
		}
        else
        {
			$fmsg="Invalid OTP";
        }
    
    }

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="AlphaCare Online Hospital Management System">
    <meta name="author" content="Nishanth Bhat, Vardhini        ">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/GD-logo-light.png">
    <title>Gear Doctor</title>
    <!-- Bootstrap Core CSS -->
    <link href="../plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="../plugins/css/animate.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../plugins/css/style1.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="../plugins/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <section id="wrapper" class="login-register ">
        <div class="login-box login-sidebar">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform" method="post">
				
				<?php if(isset($fmsg)) { ?><div class="alert alert-danger"> <?php echo $fmsg; ?> </div> <?php }?>
				
				<?php if(isset($smsg)) { ?> <div class="alert alert-success"> <?php echo $smsg; ?> </div><?php }?>
				<br><br><br><br><br><br><br>
                    <a href="../index.php" class="text-center db"><img src="../plugins/images/GD-logo-dark.png" style="width:80px; height:80px;" alt="Home" />
                        <br/><img src="../plugins/images/GD-Font.png" alt="Home" width="200px" height="45px"/></a>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input autofocus tabindex="1" class="form-control" type="text" name="otp" required placeholder="Enter the OTP">
                        </div>
                    </div>                    
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="submit1">Verify</button>
                        </div>
                    </div>
                   </form>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social">
                                <!--<a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>-->
								<p class="text-right" style="bottom: 0; position: fixed; ">BETA v 1.0</p>
                            </div>
                        </div>
                    </div>
                    
                   <!--- Removed Sigin up button
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Don't have an account? <a href="register2.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                        </div>
                    </div> --->
                    
                </form>
               
                <form class="form-horizontal" id="recoverform" method="post">
                   <?php if(isset($fmsg)) { ?><div class="alert alert-danger"> <?php echo $fmsg; ?> </div> <?php }?>
  
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" required="" name="resetemail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            <button class="btn btn-danger btn-lg btn-block text-uppercase waves-effect waves-light" onClick="location.reload();">Back</button>
                            
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../plugins/bootstrap/dist/js/tether.min.js"></script>
    <script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="../plugins/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../plugins/js/waves.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="../plugins/js/toastr.js"></script>    
    <!-- Custom Theme JavaScript -->
    <script src="../plugins/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>