<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: grouplog.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body style="background-image: url('home.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%">
<center><br><br>
	<table style="padding-bottom: 70px;">
		<tr>
		<th><button onclick="window.location.href='adminlog.php';" style="background-color: green;width:250px; height:100px;border-radius:10px"><center><b>Admin Login</center></th></tr>
		<tr>
		<th><button onclick="window.location.href='userlog.php';" style="background-color: green;width: 250px; height:100px;border-radius: 10px"><center><b>User Login</center></th></tr>
		<tr>
		<th><button onclick="window.location.href='logout.php';" style="background-color: red;width: 250px; height: 100px;border-radius: 10px"><center><b>Log Out</center></th>
		</tr>
	</table>
</center>
</body>
</html>