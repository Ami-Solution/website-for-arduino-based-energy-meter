<?php
//harsha
include 'connection.php';

$varUserName=$_POST['uname'];
$varFName=$_POST['fname'];
$varLName=$_POST['lname'];
$varPassword=$_POST['psw'];
$varCity=$_POST['city'];
$varState=$_POST['state'];
$varEmail=$_POST['email'];
$varDob=$_POST['dob'];
$varMeter=$_POST['meter'];

$sql = "INSERT INTO user (fname,lname,auid,username,password,city,state,emailid,dob) 
Values('$varFName','$varLName','$varMeter','$varUserName','$varPassword','$varCity','$varState','$varEmail','$varDob')";

if(mysqli_query($conn,$sql))
{
	header("location:login.php");
}
else
{
	echo 'failed';
}


?>
