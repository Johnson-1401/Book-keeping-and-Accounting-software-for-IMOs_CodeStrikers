<?php
include('session2.php');
if(!isset($_SESSION['login2_user'])){
header("location: adminlog.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin home</title>
</head>
<body style="background-image: url('d1.jpeg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%">
<table>
	<tr>
		<th><h1 style="margin-left:90px">CODE STRIKERS...</style></h1></th>
		<th><button onclick="window.location.href='logout.php';" style="width: 100px; height: 45px;border-radius: 10px;margin-left: 800px;background-color: red;border-color: red"><center><p>Logout</center></th>
	</tr>
</table>
<hr>
<center>
	<table style="margin-left: 500px; padding-bottom: 70px;">
		<tr>
			<th><button onclick="window.location.href='member.php';" style="width: 160px; height: 35px;border-radius: 30px"><center>Member</center></th>
			<th><button onclick="window.location.href='accountdetails.php';" style="width: 160px; height:35px;border-radius: 30px"><center>Account Details</center></th>
			<th><button onclick="window.location.href='event.php';" style="width: 160px; height: 35px;border-radius: 30px"><center>Event</center></th>
			<th><button onclick="window.location.href='gallery.php';" style="width: 160px; height: 35px;border-radius: 30px"><center>Gallery</center></th>
			<th><button onclick="window.location.href='acontact.php';" style="width: 160px; height: 35px;border-radius: 30px"><center>Contact</center></th>
			</tr>
	</table>
        <center>
	    
	</center>
</body>
</html>
    
