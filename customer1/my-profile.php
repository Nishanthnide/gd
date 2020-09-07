<?php
include '../login/accesscontrolcust.php';
require('connect.php');
if(isset($_SESSION['cusername']))
{
	$ausername=$_SESSION['cusername'];
}
elseif(isset($_SESSION['ausername']))
{
	$ausername=$_SESSION['ausername'];
}


$query="SELECT c_id, fname, lname, username, email, gender, address, phone, password FROM customer WHERE username='$ausername'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$id = $row['c_id'];
//update profile
if(isset($_POST['updateprofile']))
{
    $fname=mysqli_real_escape_string($connection,$_POST['fname']);
	$lname=mysqli_real_escape_string($connection,$_POST['lname']);
    $username= mysqli_real_escape_string($connection,$_POST['username']);
	$email=mysqli_real_escape_string($connection,$_POST['email']);
	$gender=mysqli_real_escape_string($connection,$_POST['gender']);
    $address=mysqli_real_escape_string($connection,$_POST['address']);
	$phone=mysqli_real_escape_string($connection,$_POST['phone']);

    
	$uquery="UPDATE customer SET fname='$fname', lname='$lname', username='$username', email='$email', gender='$gender', address='$address', phone='$phone' WHERE c_id='$id'";
	$uresult = mysqli_query($connection, $uquery);
	if($uresult)
	{
		$squery="SELECT c_id, fname, lname, username, email, gender, address, phone FROM customer WHERE username='$ausername'";
		$sresult = mysqli_query($connection, $squery);
		$row = mysqli_fetch_assoc($sresult);
		$id = $row['c_id'];
		$smsg="Profile updated successfully!";

	}
	else
	{
		$fmsg="error!";
	}
}
//change password
if(isset($_POST['changepw']))
{
	$oldpw=md5($_POST['oldpassword']);
	if($oldpw==$row["password"])
	{
		$npw=md5($_POST['newpassword']);
		$pwquery="UPDATE customer SET password='$npw' WHERE c_id='$id'";
		$pwresult = mysqli_query($connection, $pwquery);
		$smsg="Password updated successfully!";
		
	}
	else
	{
		$fmsg="Wrong old password!";
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/widget-chart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:43 GMT -->
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
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="css/feather.css">

<link rel="stylesheet" type="text/css" href="css/font-awesome-n.min.css">

<link rel="stylesheet" href="css/chartist.css" type="text/css" media="all">

<link rel="stylesheet" href="css/radial.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/widget.css">
<!-- username check js start -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#usernameLoading').hide();
		$('#username').keyup(function(){
		  $('#usernameLoading').show();
	      $.post("check-docusername.php", {
	        username: $('#username').val()
	      }, function(response){
	        $('#usernameResult').fadeOut();
	        setTimeout("finishAjax('usernameResult', '"+escape(response)+"')", 500);
	      });
	    	return false;
		});
	});

	function finishAjax(id, response) {
	  $('#usernameLoading').hide();
	  $('#'+id).html(unescape(response));
	  $('#'+id).fadeIn();
	} //finishAjax
</script>
    <?php include 'csslink.php'; ?>
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
<h5>Edit Profile</h5>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="index.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="mech_index.php">Dashboard</a> </li>
<li class="breadcrumb-item"><a href="#">My Profile</a> </li>
</ul>
</div>
</div>
</div>
</div>

<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">
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
<div class="page-body">
<div class="row">







<div class="col-xl-4 col-md-8">
<div class="card sale-card ">

<div class="card-block text-center">
<div data-label="40%" class="radial-bar radial-bar-40 radial-bar-lg radial-bar-danger">
<img src="../plugins/images/users/user(2).png" class="thumb-lg img-circle" >
</div>
<div class="row">
<div class="col-12">
<div class="s-cont d-inline-block">
<h5 class="f-w-700 m-b-0" style = "text-transform:capitalize;"><?php echo $ausername; ?></h5>
    <h5 class="f-w-700 m-b-0"><?php echo $row["email"]; ?></h5>
</div>
</div>
    <div class="card-header">
</div>
</div>
</div>
</div>
</div>
 <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <ul class="nav customtab nav-tabs" role="tablist">
                                <!--<li role="presentation" class="nav-item"><a href="#home" class="nav-link " aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-home"></i></span><span class="hidden-xs"> Activity</span></a></li>-->
                                <li role="presentation" class="nav-item"><a href="#profile" class="nav-link active" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Profile</span></a></li>
                                <li role="presentation" class="nav-item"><a href="#settings" class="nav-link" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Setting</span></a></li>
                                <li role="presentation" class="nav-item"><a href="#changepassword" class="nav-link" aria-controls="changepassword" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-key"></i></span> <span class="hidden-xs">Change Password</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                            <br>
                                            <p class="text-muted"><?php echo $row["fname"]." ".$row["lname"]; ?></p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                            <br>
                                            <p class="text-muted"><?php echo $row["phone"]; ?></p>
                                        </div>
                                        <div class="col-md-6 col-xs-6 "> <strong>Email</strong>
                                            <br>
                                            <p class="text-muted"><?php echo $row["email"]; ?></p>
                                        </div>
                                        
                                    </div>
                                    <hr class="m-t-10 m-b-10">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-6"> <strong>Gender</strong>
                                            <br>
                                            <p class="text-muted"><?php echo $row["gender"]; ?></p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Address</strong>
                                            <br>
                                            <p class="text-muted"><?php echo $row["address"]; ?></p>
                                        </div>
									</div>
                                    
                                </div>
                                
                               
                            <div class="tab-pane" id="settings">
                             <form data-toggle="validator" method="post">
                              
                              
                         		<div class="row">
                                	<div class="col-md-6">
                                       <div class="form-group">
                                        	 <label class="control-label">First Name</label>
											<div class="col-sm-12 p-l-0">
												<div class="input-group">
													<input type="text" name="fname" class="form-control" id="fname" placeholder="Enter your first name" value="<?php echo $row["fname"]; ?>" required>
													<!--onKeyUp="copyTextValue();"-->
												</div>
											</div>
                                         </div>
                                    </div>
                                    <!--/span-->
									 <div class="col-md-6">
										  <div class="form-group">
											   <label class="control-label">Last Name</label>
											   <input type="text" name="lname" id="lastName" class="form-control" placeholder="Enter your last name" value="<?php echo $row["lname"]; ?>" required>
											   <!--<span class="help-block"> This field has error. </span>-->
										   </div>
									 </div>
                                    <!--/span-->
                                 </div>
                               
                                <div class="form-group">
                                    <label for="inputName1" class="control-label">Username</label>
                                    <input type="text" class="form-control" autocomplete="off" id="username" name="username" placeholder="Username is used to login" value="<?php echo $row["username"]; ?>" required>
                                    <!-- username check start -->
										<div>
										<span id="usernameLoading"><img src="../plugins/images/busy.gif" alt="Ajax Indicator" height="15" width="15" /></span>
										<span id="usernameResult" style="color: #E40003"></span>
										</div>
				                     <!-- username check end -->
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="control-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $row["email"]; ?>" data-error="This email address is invalid" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12 p-l-0">Gender</label>
                                    <div class="col-sm-12 p-l-0">
                                        <select class="form-control" name="gender" required>
                                            <option <?php if($row["gender"]=='male'){echo 'selected';}?> value="male">Male</option>
                                            <option <?php if($row["gender"]=='female'){echo 'selected';}?> value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-md-12">
										  <div class="form-group">
											   <label class="control-label">Address</label>
											   <input type="text" name="address" id="address" class="form-control" placeholder="Address" value="<?php echo $row["address"]; ?>" required>
											   <!--<span class="help-block"> This field has error. </span>-->
										   </div>
									 </div>
                                
                               <!--<div class="form-group">
                                    <label>Qualification</label>
                                    
                                        <input type="text" id="qualif" name="qualif" class="form-control" placeholder="e.g. MBBS" value="<?php echo $row["qualification"]; ?>" >
                                </div>-->
                                <div class="form-group">
                                    <label for="example-phone">Phone
                                    </label>
                                    
                                        <input type="text" required id="example-phone" name="phone" class="form-control" placeholder="enter your phone number" data-mask="(999) 999-9999" value="<?php echo $row["phone"]; ?>">
                                    
                                </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success" name="updateprofile">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                <div class="tab-pane" id="changepassword"> 
                                
                                <form data-toggle="validator" method="post">
                                <div class="form-group">
                                    <label for="inputPassword" class="control-label">Change Password</label>
                                    <div calss="row">
                                    <div class="form-group col-sm-12 p-l-0 p-t-10">
                                    <input type="password" name="oldpassword" data-toggle="validator" data-minlength="6" class="form-control" id="oldPassword" placeholder="Old Password" required>
                                     </div>
									</div>
                                    
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <input type="password" name="newpassword" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="New Password" required>
                                            <span class="help-block">Minimum of 6 characters</span> </div>
                                        <div class="form-group col-sm-6">
                                            <input type="password" name="retypepassword" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Passwords don't match" placeholder="Confirm New Password" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group p-t-0">
                                    
                                        <button class="btn btn-success" name="changepw">Change Password</button>
                                     
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
</div>
</div>
<div id="styleSelector"> </div>
</div>
</div>
</div>
</div>


<!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="../files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="../files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="../files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->

<script>
$(document).ready(function() {
  $('.deleteAdmin').click(function(){
    id = $(this).attr('data-id');
      swal({
          title: "Are you sure?",
          text: "You will not be able to recover this account!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false,
		  closeOnCancel: false
      },function(isConfirm)
		 {   
           if (isConfirm) {
			   $.ajax({
			  url: 'deleteadmin.php?id='+id,
			  type: 'DELETE',
			  data: {id:id},
			  success: function(){
				swal("Deleted!", "User has been deleted.", "success");
				window.location.replace("logout.php");
          }
        });   
            } else {     
                swal("Cancelled", "Admin account is safe :)", "error");   
            }
      });
  });

});
	
</script>
<script type="c72f127118858a7921be8404-text/javascript" src="js/jquery.min.js"></script>
<script type="c72f127118858a7921be8404-text/javascript" src="js/jquery-ui.min.js"></script>
<script type="c72f127118858a7921be8404-text/javascript" src="js/popper.min.js"></script>
<script type="c72f127118858a7921be8404-text/javascript" src="js/bootstrap.min.js"></script>
<script type="c72f127118858a7921be8404-text/javascript" src="js/excanvas.js"></script>

<script type="c72f127118858a7921be8404-text/javascript" src="js/jquery.slimscroll.js"></script>

<script src="js/jquery.flot.js" type="c72f127118858a7921be8404-text/javascript"></script>
<script src="js/jquery.flot.categories.js" type="c72f127118858a7921be8404-text/javascript"></script>
<script src="js/curvedlines.js" type="c72f127118858a7921be8404-text/javascript"></script>
<script src="js/jquery.flot.tooltip.min.js" type="c72f127118858a7921be8404-text/javascript"></script>

<script src="js/waves.min.js" type="c72f127118858a7921be8404-text/javascript"></script>

<script src="js/chartist.js" type="c72f127118858a7921be8404-text/javascript"></script>

<script type="c72f127118858a7921be8404-text/javascript" src="js/chart.js"></script>

<script type="c72f127118858a7921be8404-text/javascript" src="js/smoothscroll.js"></script>

<script src="js/jquery.knob.js" type="c72f127118858a7921be8404-text/javascript"></script>

<script type="c72f127118858a7921be8404-text/javascript" src="js/knob-custom-chart.js"></script>

<script src="js/amcharts.js" type="c72f127118858a7921be8404-text/javascript"></script>
<script src="js/gauge.js" type="c72f127118858a7921be8404-text/javascript"></script>
<script src="js/serial.js" type="c72f127118858a7921be8404-text/javascript"></script>
<script src="js/light.js" type="c72f127118858a7921be8404-text/javascript"></script>
<script src="js/pie.min.js" type="c72f127118858a7921be8404-text/javascript"></script>
<script src="js/ammap.min.js" type="c72f127118858a7921be8404-text/javascript"></script>
<script src="js/usalow.js" type="c72f127118858a7921be8404-text/javascript"></script>

<script src="js/pcoded.min.js" type="c72f127118858a7921be8404-text/javascript"></script>
<script src="js/vertical-layout.min.js" type="c72f127118858a7921be8404-text/javascript"></script>

<script type="c72f127118858a7921be8404-text/javascript" src="js/widget-chart.js"></script>
<script type="c72f127118858a7921be8404-text/javascript" src="js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="c72f127118858a7921be8404-text/javascript"></script>
<script type="c72f127118858a7921be8404-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="js/rocket-loader.min.js" data-cf-settings="c72f127118858a7921be8404-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/widget-chart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:45 GMT -->
</html>
