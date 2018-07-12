<?php
 include('connection.php');
session_start();
?>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body background = "b.jpg">
<link rel="stylesheet" type="text/css" href="main.css">
<div class="bar" style="background-color:#777">
<div class ="log" align = "right">
<input type="button" class="button" value="Home" onclick="location='mainf.html'" >
</div>
</div>
<div align="center">
<h1> BILL</h1>
<table align="center">
<tr>
<td><p>Date</p></td>
<td><p id="a1">fs</p>
</tr>
<tr>
<td><p>Time</p></td>
<td><p id="a6"></p>
</tr>
<tr>
<td><p>Name</p></td>
<td><p id="a2"><?php echo $_SESSION['fname']; ?></p>
</tr>
<tr>
<td><p>Address</p></td>
<td><p id="a3"><?php echo $_SESSION['city']; ?>, <?php echo $_SESSION['state']; ?></p>
</tr>
<tr>
<td><p>Units</p></td>
<td><p id="a4">fs</p>
</tr>
<tr>
<td><p>Amount</p></td>
<td><p id="a5">fs</p>
</tr>
</table>
<input type="button" class="button" value="Pay now" align="center" >
</div>
<body>
<script>
var url = "https://api.thingspeak.com/channels/480005/feeds.json?results=1";
var d = new Date();
var a = d.getDate();
var b = d.getDay();
var c = d.getFullYear();
var e = d.getHours();
var f = d.getMinutes();
var g = d.getSeconds();
document.getElementById("a1").innerHTML =a+"-"+b+"-"+c;
document.getElementById("a6").innerHTML =e+":"+f+":"+g;
function billcal(){
$.getJSON(url,function(data)
{
var cal;
var am;
b = data.feeds[0].field4;
b = b/10000;
cal = b/0.00005;
cal = cal.toFixed(2);
am = cal *5;
am = am.toFixed(2);
document.getElementById("a4").innerHTML = cal;
document.getElementById("a5").innerHTML = "₹ "+am;
});
}
billcal();
</script>
</html>