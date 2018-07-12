

<?php
include('connection.php');
session_start();
$pass=$_SESSION['password'];
$user=$_SESSION['login_user'];
$city=$_SESSION['city'];
$state=$_SESSION['state'];


//$sql = "UPDATE user SET password='$pass', city='$city', state='$state', s1='$s1', s2='$s2', s3='$s3', s4='$s4', s5='$s5',i1='$i1',i2='$i2',i3='$i3',i4='$i4',i5='$i5'  WHERE username='$user' ";
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'info';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
$conn->query($sql);
session_destroy();
header("location:login.php");
?>