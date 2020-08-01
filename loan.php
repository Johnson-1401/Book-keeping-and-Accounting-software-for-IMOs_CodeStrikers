
<!DOCTYPE html>
<html>
<head>
<title>test</title>
</head>
<body>
	<table>
	<tr>
		<th><h1 style="margin-left:90px">CODE STRIKERS...</style></h1></th>
		<th><button onclick="window.location.href='logout.php';" style="width: 100px; height: 45px;border-radius: 10px;margin-left: 800px;background-color: red;border-color: red"><center><p>Logout</center></th>
	</tr>
</table>
<hr>
<center>
<h1 style="color:Green;">Loan Details</h1>
</form>
</center>
</body>
</html>
<center>
<?php 
$con=mysqli_connect('localhost','root','','lazyboy');
$result=mysqli_query($con,"SELECT DISTINCT `name`,`month`,`loanname`,`loan`,`intrest` FROM transaction"); 
echo"<table border='1'>
<th>Month</th>
<th>Name</th>
<th>Loan Name</th>
<th>Loan</th>
<th>Interest</th>
<th>Remainder</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['month']."</td>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['loanname']."</td>";
	echo"<td>".$row['loan']."</td>";
	echo"<td>".$row['intrest']."</td>";
	echo"<tr>";
}
echo"<table>";
mysqli_close($con);
 ?>

 