<?php
$connect=mysqli_connect('localhost','root','','lazyboy');
if(isset($_POST['go']))
{
$a=$_POST['nam'];
$z=$_POST['lo'];
$b=$_POST['acc'];
$c=$_POST['mon'];
$d=$_POST['save'];
$i="INSERT INTO share (`username`,`loanname`,`account`,`percentage`,`total`) values ('$a','$z','$b','$c','$d')";
$j=mysqli_query($connect,$i);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>share</title>
</head>
<body style="background-image: url('h2.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%">
<table>
	<tr>
		<th><h1 style="margin-left:90px">CODE STRIKERS...</style></h1></th>
	</tr>
</table><hr>
<div style="margin-left: 300px">
<form method="post">
	<h1>User Name :             <input type="text" name="nam" style="margin-left: 100px"></h1>
	<h1>Loan Name :         <input type="text" name="lo" style="margin-left: 22px"></h1>
	<h1>User Account no :       <input type="text" name="acc" style="margin-left: 23px"></h1>
	<h1>Interest Percentage :             <input type="text" name="mon" style="margin-left: 88px"></h1>
	<h1>Total amount :           <input type="number" name="save" style="margin-left: 77px"></h1>
	<button type="submit" name="go" style="width: 150px;height: 40px;border-radius: 30px;margin-left: 90px"><b>Transaction</button>
</form>
</div>
</body>
</html>
