
<!DOCTYPE html>
<html>
<head>
<title>Share</title>
</head>
<body>
<center>
<h1 style="color: blue;">Loan Details</h1>
</form>
</center>
</body>
</html>
<center>
<?php 
$con=mysqli_connect('localhost','root','','lazyboy');
$result=mysqli_query($con,"SELECT * FROM share");
echo"<table border='1'>
<tr>
<th>User Name</th>
<th>Loan Name</th>
<th>User Account No</th>
<th>percentage</th>
<th>Total</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['username']."</td>";
	echo"<td>".$row['loanname']."</td>";
	echo"<td>".$row['account']."</td>";
	echo"<td>".$row['percentage']."</td>";
	echo"<td>".$row['total']."</td>";
	echo"<tr>";
}
echo"<table>";
mysqli_close($con);
 ?>
</center>
