<!DOCTYPE html>
<html>
<head>
<title>test</title>
</head>
<body>
	<table>
	<tr>
		<th><h1 style="margin-left:90px">RMK Company</style></h1></th>
		<th><button onclick="window.location.href='logout.php';" style="width: 100px; height: 45px;border-radius: 10px;margin-left: 850px;background-color: red;border-color: red"><center><p>Logout</center></th>
	</tr>
</table><hr>
<center>
<h1 style="color: blue;">Loan details</h1>
</center>
</body>
</html><br>
<center>
<?php 
$con=mysqli_connect('localhost','root','','lazyboy');
$result=mysqli_query($con,"SELECT DISTINCT `name`,`month`,`loan`,`intrest`,(loan+intrest)AS total FROM transaction");
echo"<table border=1>
<tr>
<th>Name</th>
<th>Month</th>
<th>loan Amount</th>
<th>Intrest</th>
<th>Total</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['month']."</td>";
	echo"<td>".$row['loan']."</td>";
	echo"<td>".$row['intrest']."</td>";
	echo"<td>".$row['total']."</td>";
	echo"<tr>";
}
echo"<table>";
mysqli_close($con);
 ?>
</center>