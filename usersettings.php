<?php

include('session.php');
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="main.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<style>

		
          .city{
           float:left;
           margin: 10px;
           padding: 10px;
           width: 50px;
           height: 50px;
           border: 1px solid black;
        }   
        </style>
	</head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<body>
	<div align = "right" class="container" style="background-color:#777">
	<input type ="button" class ="button" value ="search" onclick="location='resultspage.php'"> 
  <input type ="button" class ="button" value ="logout" onclick="location='logout.php'"> 
   
  </div>
  
 
        <form method="post"> <br> <br> <br>
            <center> 
			<div>
			<table>
			<tr>
			<td>
			
                <label>Username</label> 
				</td>
				<td>
				<span><?php echo $_SESSION['login_user'];?></span>
				</td>
				</tr>
				<tr>
				<td>
				<label>Old password</label>
				</td>
				<td>
                <input type = "password" name ="password"  value = "" id="oPass"required>
				</td>
				</tr>
				<tr>
				<td>
				<label>New password</label>
				</td>
				<td>
                <input type = "password" name = "password"  value = "" id="nPass"required> 
				</td>
				</tr>
				<tr>
				<td>
				<label>Verify new password</label>
				</td>
				<td>
                <input type = "password" name = "Password"  value = "" id="vPass"required> 
			     </td>
				 </tr>
				 <tr>
				 <td>
				 <label>City </label> 
				 </td>
				 <td>
				<input type = "text" name = "City"  id="city" value = <?php echo $_SESSION['city']?> required> 
				</td>
				</tr>
				<tr>
				<td>
				<label>State</label> 
				</td>
				<td>
				<input type = "text" name = "State"  id="state" value = <?php echo $_SESSION['state']?> required> 
                </td>
				</tr>
				</table>
                <button onclick="validateSettings()" class="button"> submit </button><br><br>
				<input type="button" class="button" value="change Interests" onclick="location='selectInterest.php'">
             
                </div>
       		</center>
       	</form>
    
         
        
    <script type="text/javascript">
    	function validateSettings()
    	{
    		var oldpass, newPass, verPass,city, state;
            oldpass = document.getElementById("oPass").value;
            newPass = document.getElementById("nPass").value;
            verPass = document.getElementById("vPass").value;
            city=document.getElementById("city").value;
            state=document.getElementById("state").value;
			var elements = [oldpass, newPass, verPass,city,state];
            var httpc = new XMLHttpRequest(); // simplified for clarity
            var url = "changeUSettings.php?elements=";
            httpc.open("POST", url+elements, true); // sending as POST

            httpc.onreadystatechange = function() { //Call a function when the state changes.
            if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
                alert(httpc.responseText); // some processing here, or whatever you want to do with the response
                }
            }
            httpc.send(elements);
    	}
    	
    </script>
    </body>
    
    
</html>
      