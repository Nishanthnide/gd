<?php
session_start();
require('connect.php');

if(isset($_POST['submit1'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $number=$_POST['phone'];
    //echo rand(100000,999999);
    $random = rand(100000,999999);
    //$text=$_POST['text'];
    $queryotp="INSERT INTO `otp`(otp) VALUES ('$random')";
    $resultotp = mysqli_query($connection, $queryotp); 
$url="https://www.way2sms.com/api/v1/sendCampaign";
$message = urlencode($random);// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=XBD2FH7TN4F5M6D4O3BOS0DHKAOITIT1&secret=OBK7406PD31CVPQW&usetype=stage&phone=$number&senderid=nishanthbhat95@gmail.com&message= Hello $username Thank you for choosing Gear Doctor. Your OTP is $message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;
echo'<script> window.location="verify.php";</script>';

}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="AlphaCare Online Hospital Management System">
    <meta name="author" content=" Nishanth Bhat, Vardhini">
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
    <link href="../plugins/css/style2.css" rel="stylesheet">
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
				<br><br><br><br>
                    <a href="../index.php" class="text-center db"><img src="../plugins/images/GD-logo-dark.png" style="width:80px; height:80px;" alt="Home" />
                        <br/><img src="../plugins/images/GD-Font.png" alt="Home" width="200px" height="45px"/></a>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input autofocus tabindex="1" class="form-control" type="text" name="username" required placeholder="Username/Name" value="<?php if(isset($username) & !empty($username)){ echo $username; }?>" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-8">
                            <input autofocus tabindex="1" class="form-control" type="text" name="email" required placeholder="Email-ID" value="<?php if(isset($email) & !empty($email)){ echo $email; }?>" >
                        </div>
                    </div>
                    <form class="form-horizontal form-material" id="loginform" action="index.php" method="post">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input autofocus tabindex="1" class="form-control" type="text" name="phone" required placeholder="Phone Number" value="<?php if(isset($number) & !empty($number)){ echo $number; }?>" >
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit1" name="submit1">Get OTP</button>
                        </div>
                    </div>
                    
                    <!--<div class="form-group">
                        <div class="col-xs-12">
                            <input autofocus tabindex="1" class="form-control" type="text" name="address" required placeholder="Address" value="<?php //if(isset($username) & !empty($username)){ echo $username; }?>" >
                        </div>
                    </div>
                   <div class="form-group">
                        <div class="col-xs-12">
                            <input tabindex="2" class="form-control" type="password" name="fpassword" required="" placeholder="Password" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input tabindex="2" class="form-control" type="password" name="cpassword" required="" placeholder="Re-enter Password" >
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot password?</a> </div>
                    </div>-->
                    
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
