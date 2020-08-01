<?php
$connect=mysqli_connect('localhost','root','','lazyboy');
if(isset($_POST['go']))
{
$a=$_POST['uname'];
$z=$_POST['password'];
$b=$_POST['dob'];
$c=$_POST['email'];
$d=$_POST['adhar'];
$e=$_POST['address'];
$f=$_POST['city'];
$g=$_POST['mobile'];
$i="INSERT INTO login (`username`,`password`,`dob`,`email`,`adhar`,`address`,`city`,`mobile`) values ('$a','$z','$b','$c','$d','$e','$f','$g')";
$j=mysqli_query($connect,$i);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Form</title>
</head>
<body style="margin-left: 250px">
<form method="post">
		<h1>User Name :                <input type="text" name="uname"></h1>
		<h1>Password :                 <input type="password" name="password"></h1>
		<h1>Date of Birth :            <input type="password" name="dob"></h1>
		<h1>Email :                    <input type="email" name="email"></h1>
		<h1>Adhar No :                 <input type="text" name="adhar"></h1>
		<h1>Address :                  <input type="text" name="address"></h1>
		<h1>City :                     <input type="text" name="city"></h1>
		<h1>Mobile No :                <input type="text" name="mobile"></h1>

	    <button type="submit" name="go">SUBMIT</button>
</form>
</body>
</html>