<?php 
require('../connect.php');
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['pass']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['username'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$passwd=md5($_POST['pass']);
	$insertquery="INSERT INTO `customer` (fname,lname,username,gender,address,email,phone,password) VALUES ('$fname','$lname','$username','$gender','$address','$email','$phone','$passwd')";
	$insertresult=mysqli_query($connection,$insertquery);
}

?>