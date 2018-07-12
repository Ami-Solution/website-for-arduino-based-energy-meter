<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['uname'];
      $mypassword = $_POST['psw']; 
      
      $sql = "SELECT * FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
     // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      if(!$result)
      {
      	die("fail");
      }
      	
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $row = mysqli_fetch_assoc($result);
         $_SESSION['login_user'] = $myusername;
         $_SESSION['fname']=$row['fname'];
         $_SESSION['lname']=$row['lname'];
         $_SESSION['password']=$row['password'];
         $_SESSION['state']=$row['state'];
         $_SESSION['emailid']=$row['emailid'];
         $_SESSION['dob']=$row['dob'];
         $_SESSION['city']=$row['city'];
		 $_SESSION['meter']=$row['auid'];
		 $_SESSION['units']=$row['uni'];
         header("location: mainf.html");
      }else {
      	echo "<script>alert('Username or password incorrect');</script>";
      }
   }
?>
<html>
<head>
<div class = "container" style="background-color:#777"> 
	
  		<div align = "right" class="register" style="background-color:#777">
  <input type ="button" class ="button" value ="register" onclick="location='register.php'"> 
  
  </div>
 		 
 		
</div>
  </head>
<link rel="stylesheet" type="text/css" href="main.css">
<body>
<div class="container" >
<form action=""  method ="post">
	
		<div class="imgcontainer" style="">
			<a href="index.html"><img src="logo.png" alt="Avatar" class="avatar">
			</a>		
		</div>
	
<center>
  
    <label><b>Username</b></label>
	<br>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>
    <label><b>Password</b></label>
	<br>
    <input type="password" placeholder="Enter Password" name="psw" required>
 <br>    
    <input type="submit" class="button" value= "Login"></button>
    </center>
  </form>
</div>
</body>
</html>