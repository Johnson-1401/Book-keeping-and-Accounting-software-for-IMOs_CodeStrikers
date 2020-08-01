<?php
$connect=mysqli_connect('localhost','root','','lazyboy');
if(isset($_POST['go']))
{
$a=$_POST['gname'];
$b=$_POST['lname'];
$c=$_POST['account'];
$d=$_POST['loan'];
$e="INSERT INTO send(`groupname`,`loanname`,`account`,`amount`) values ('$a','$b','$c','$d')";
$f=mysqli_query($connect,$e);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>loan send</title>
</head>
<body style="background-image: url('company.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%">

<table>
	<tr>
		<th><h1 style="margin-left:90px">RMK Company</style></h1></th>
		<th><button onclick="window.location.href='logout.php';" style="width: 100px; height: 45px;border-radius: 10px;margin-left: 850px;background-color: red;border-color: red"><center><p>Logout</center></th>
	</tr>
</table>
<hr>

<form method="post"><br><br>
	<div style="margin-left: 150px">
	<h1>Group Name :       <input type="text" name="gname"></h1>
	<h1>Loan Name :        <input type="text" name="lname"></h1>
	<h1>Account no :       <input type="text" name="account"></h1>
	<h1>Loan Amoumt        <input type="number" name="loan"></h1>
	<button type="submit" name="go" style="width: 150px;height: 40px;margin-left: 100px; border-radius: 30px"><b>Send</button>
	</div>
</form>
</body>
</html>
