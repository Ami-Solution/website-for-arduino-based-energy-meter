<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="main.css">
<head>
<script>
function validateForm() {
    var x = document.forms["registration"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    var fn= document.forms["registration"]["fname"].value;
    alert(fn);
    var letters = /^[A-Za-z]+$/;
    if(fn.value.match(letters))  
    {  
     return true;  
    }  
  else  
    {  
    alert("message");  
    return false;  
    }  
}

</script>
</head>
<body>
<style>

</style>
	<form name="registration" action="actionpage.php" onsubmit="return validateForm();" method="post">
<div class = "container" style="background-color:#777"> 
	
  		<div align = "right" class="register" style="background-color:#777">
  <font color="white">Already have an account? </font><input type ="button" class ="button" value ="Login" onclick="location='login.php'"> 
 
  </div>
 		 
 		
</div>
  	</div>
  	</div>
		
		<div class="imgcontainer">
			<a href="index.html"><img src="logo.png" alt="Avatar" class="avatar">
			</a>
		</div>
	    <center>
			<div class="container">
			<table>
			<tr>
			<td>
				<label><b>Username</b></label> 
				</td>
				<td>
				<input type="text" placeholder="Enter Username" name="uname" required> 
				</td>
				</tr>
				<tr>
				<td>
				 <label><b>Password</b></label> 
				 </td>
				 <td>
					<input type="password" placeholder="Enter Password" name="psw" required>
					</td>
					</tr>
					<tr>
					<td>
				 <label><b>First Name</b></label> 
				 </td>
				 <td>
				 <input type="text" placeholder="Enter First Name" id="fn" name="fname" required> 
				 </td>
				 </tr>
				 <tr>
				 <td>
				 <label><b>Last Name</b></label> 
				 </td>
				 <td>
				<input type="text" placeholder="Enter Last Name" name="lname" required> 
				</td>
				</tr>
				<tr>
				<td>
				 <label><b>Meter - ID</b></label> 
				 </td>
				 <td>
				 <input type="text" placeholder="Enter Meter ID" name="meter" required> 
				 </td>
				 </tr>
				 <tr>
				<td>
				 <label><b>Email - ID</b></label> 
				 </td>
				 <td>
				 <input type="text" placeholder="Enter Email" name="email" required> 
				 </td>
				 </tr>
				 <tr>
				 <td>
				 <label><b>City</b></label> 
				 </td>
				 <td>
				 <input type="text" placeholder="Enter City Name" name="city" required> 
				 </td>
				 </tr>
				 <tr>
				 <td>
				 <label><b>State</b></label> 
				 </td>
				 <td>
				 <input type="text" placeholder="Enter State Name" name="state" required> 
				 </td>
				 </tr>
				 <tr>
				 <td>
				 <label><b>Date of Birth</b></label> 
				 </td>
				 <td>
				 <input type="date" name="dob">
				 </td>
				 </tr>




				
				<br>
</table>
<button type="submit" class="button">Register</button>
			</div>

		</center>
		
	</form>

</body>
</html>
