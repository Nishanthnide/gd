<?php
include '../login/accesscontroladmin.php';
$ausername=$_SESSION['ausername'];
require('connect.php');
if (isset($_POST['docsubmit']))
	{
		// real eacape sting is used to prevent sql injection hacking
		$fname=mysqli_real_escape_string($connection,$_POST['fname']);
		$lname=mysqli_real_escape_string($connection,$_POST['lname']);
		$username= mysqli_real_escape_string($connection,$_POST['username']);
		//$email=mysqli_real_escape_string($connection,$_POST['email']);
		$gender=mysqli_real_escape_string($connection,$_POST['gender']);
        //$address=mysqli_real_escape_string($connection,$_POST['address']);
        $category=mysqli_real_escape_string($connection,$_POST['category']);
		//$qualification=mysqli_real_escape_string($connection,$_POST['qualif']);
		//$spec=mysqli_real_escape_string($connection,$_POST['special']);
		$phone=$_POST['phone'];
		$password= md5($_POST['password']);
		$repassword= md5($_POST['retypepassword']);
		//sqll query
		//double quotes outside so we can use single quotes inside
		if($password == $repassword) 
		{
			
			$usersql="SELECT * FROM `mechanics` WHERE username='$username'";
			$checkuser=mysqli_query($connection, $usersql);
			$countu=mysqli_num_rows($checkuser);
			if($countu==1)
			{
				$fmsg = "username/email alredy exists";
			}
			else
			{
			
				$query="INSERT INTO `mechanics`(fname, lname, username, gender, category, phone, password) VALUES ('$fname','$lname','$username','$gender','$category',$phone,'$password')";
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
    <link rel="stylesheet" type="text/css" href="css/stylef.css">
<link rel="stylesheet" type="text/css" href="css/pages.css">
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
                                        <h3>ADD MECHANIC</h3>
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

                                      <div class="white-box">
                            <h3 class="box-title m-b-0">Mechanic's Information</h3><br>
                            <form data-toggle="validator" method="post">
                              <?php if(isset($fmsg)) { ?>
									<div class="alert alert-danger alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										 <?php echo $fmsg; ?>
									</div> 
					            <?php }?> 
							<?php if(isset($smsg)) { ?>
									<div class="alert alert-success alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										 <?php echo $smsg; ?>
									</div> 
							<?php }?>
                              
                         		<div class="row">
                                	<div class="col-md-6">
                                       <div class="form-group">
                                        	 <label class="control-label">First Name</label>
											<div class="col-sm-12 p-l-0">
												<div class="input-group">
													<!--<div class="input-group-addon">Dr.</div>-->
													<input type="text" name="fname" class="form-control" id="fname" placeholder="Enter your first name" required>
													<!--onKeyUp="copyTextValue();"-->
												</div>
											</div>
                                         </div>
                                    </div>
                                    <!--/span-->
									 <div class="col-md-6">
										  <div class="form-group">
											   <label class="control-label">Last Name</label>
											   <input type="text" name="lname" id="lastName" class="form-control" placeholder="Enter your last name" required>
											   <!--<span class="help-block"> This field has error. </span>-->
										   </div>
									 </div>
                                    <!--/span-->
                                 </div>
                               
                                <div class="form-group">
                                    <label for="inputName1" class="control-label">Username</label>
                                    <input type="text" class="form-control" autocomplete="off" id="username" name="username" placeholder="Username is used to login" required>
                                    <!-- username check start -->
										<div>
										<!--<span id="usernameLoading"><img src="../plugins/images/busy.gif" alt="Ajax Indicator" height="15" width="15" /></span>-->
										<span id="usernameResult" style="color: #E40003"></span>
										</div>
				                     <!-- username check end -->
                                </div>
                                <!--<div class="form-group">
                                    <label for="inputEmail" class="control-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" data-error="This email address is invalid" required>
                                    <div class="help-block with-errors"></div>
                                </div>-->
                                <div class="form-group">
                                    <label class="col-sm-12 p-l-0">Gender</label>
                                    <div class="col-sm-12 p-l-0">
                                        <select class="form-control" name="gender" required>
                                            <option selected hidden disabled>Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <!--<div class="form-group">
                                    <label  for="special">Specialization
                                    </label>
                                    
                                        <input type="text" id="special" name="special" class="form-control" placeholder="Field in which you are specialized" value="<?php // if(isset($specialist) & !empty($specialist)){ echo $specialist; }?>" required>
                          
                                </div>-->
                                
                                <!--<div class="form-group">
                                    <label>Qualification</label>
                                    
                                        <input type="text" id="qualif" name="qualif" class="form-control" placeholder="e.g. MBBS" value="<?php // if(isset($qualification) & !empty($qualification)){ echo $qualification; }?>" >
                                    
                                </div>-->
                                <div class="form-group">
                                    <label for="example-phone">Phone</label>
                                        <input type="tel" pattern="[0-9]*" maxlength="11" required id="example-phone" name="phone" class="form-control" placeholder="Enter your phone number" data-error="Invalid phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12 p-l-0">Category</label>
                                    <div class="col-sm-12 p-l-0">
                                        <select class="form-control" name="category" required>
                                            <option selected hidden disabled>Select the category</option>
                                            <option value="Self Employed">Self Employed</option>
                                            <option value="Employee of a company">Employee of a company</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="control-label">Password</label>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <input type="password" name="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                                            <span class="help-block">Minimum of 6 characters</span> </div>
                                        <div class="form-group col-sm-6">
                                            <input type="password" name="retypepassword" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Passwords don't match" placeholder="Confirm" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <div class="checkbox">
                                        <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
                                        <label for="terms"> Check yourself </label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <button type="submit" name="docsubmit" class="btn btn-info">Submit</button>
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
                <div id="styleSelector">
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'jslink.php'; ?>
</body>
</html>
