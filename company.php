<?php
include('session4.php');
if(!isset($_SESSION['login4_user'])){
header("location: companylog.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>RMK Company</title>
</head>
<body style="background-image: url('company.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%">
<table>
	<tr>
		<th><h1 style="margin-left:90px">RMK Company</style></h1></th>
		<th><button onclick="window.location.href='logout.php';" style="width: 100px; height: 45px;border-radius: 10px;margin-left: 850px;background-color: red;border-color: red"><center><p>Logout</center></th>
	</tr>
</table>
<hr>
<table style="margin-left: 430px; padding-top: 150px; margin-top: 500;">
		<tr>
			<th><button onclick="window.location.href='companyvisit.php';" style="width: 250px; height: 45px;border-radius: 10px;background-color:white
			;border-color: red"><center><p>COMPANY VISIT</center></th>
	
			<th><button onclick="window.location.href='moneysend.php';" style="width: 250px; height: 45px;border-radius: 10px;background-color:white
			;border-color: red"><center>LOAN SEND</center></th>
	</table>
</body>
</html>