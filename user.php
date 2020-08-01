<?php
include('session3.php');
if(!isset($_SESSION['login3_user'])){
header("location: userlog.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body style="background-image: url('h2.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%">
<table>
	<tr>
		<th><h1 style="margin-left:90px">CODE STRIKERS...</style></h1></th>
		<th><button onclick="window.location.href='logout.php';" style="width: 100px; height: 45px;border-radius: 10px;margin-left: 800px;background-color: red;border-color: red"><center><p>Logout</center></th>
	</tr>
</table>
<hr>
	<table style="margin-left: 650px; padding-bottom: 70px;">
		<tr>
			<th><button onclick="window.location.href='user.php';" style="width: 130px; height: 35px;border-radius: 30px"><center>Home</center></th>
						
			<th><button onclick="window.location.href='transaction.php';" style="width: 130px; height: 35px;border-radius: 30px"><center>Transaction</center></h3></th>
			<th><button onclick="window.location.href='gallery.php';" style="width: 130px; height: 35px;border-radius: 30px"><center>Gallery</center></th>
			<th><button onclick="window.location.href='event.php';" style="width: 130px; height: 35px;border-radius: 30px"><center>Event</center></th>
			<th><button onclick="window.location.href='ucontact.php';" style="width: 130px; height: 35px;border-radius: 30px"><center>Contact</center></th>
			</tr>
	</table>
	<center>
	<h1 style="">Women welfare</h1>
	<p>welcome to our women and child welfare system</p>
    
 
</center>
</body>
</html>