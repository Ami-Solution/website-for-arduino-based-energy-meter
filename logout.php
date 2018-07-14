

<?php
include('connection.php');
session_start();
$pass=$_SESSION['password'];
$user=$_SESSION['login_user'];
$city=$_SESSION['city'];
$state=$_SESSION['state'];

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