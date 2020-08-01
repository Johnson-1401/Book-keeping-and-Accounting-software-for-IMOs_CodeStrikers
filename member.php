
<!DOCTYPE html>
<html>
<head>
<title>Members</title>
</head>
<body >
<table>
	<tr>
		<th><h1 style="margin-left:90px">CODE STRIKERS...</style></h1></th>
		<th><button onclick="window.location.href='logout.php';" style="width: 100px; height: 45px;border-radius: 10px;margin-left: 800px;background-color: red;border-color: red"><center><p>Logout</center></th>
	</tr>
</table><hr>
<center>
<h1 style="color: blue;">All Members</h1>
</form>
</center>
</body>
</html>
<center>
<?php 
$con=mysqli_connect('localhost','root','','lazyboy');
$result=mysqli_query($con,"SELECT * FROM login");
echo"<table border='1'>
<tr>
<th>User Names</th>
<th>Date of Birth</th>
<th>Email</th>
<th>Adhar</th>
<th>Address</th>
<th>City</th>
<th>Mobile</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['username']."</td>";
	echo"<td>".$row['dob']."</td>";
	echo"<td>".$row['email']."</td>";
	echo"<td>".$row['adhar']."</td>";
	echo"<td>".$row['address']."</td>";
	echo"<td>".$row['city']."</td>";
	echo"<td>".$row['mobile']."</td>";
	echo"<tr>";
}
echo"<table>";
mysqli_close($con);
 ?>
</center>
