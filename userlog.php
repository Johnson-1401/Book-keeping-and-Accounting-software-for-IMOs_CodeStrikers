<?php
include('login3.php'); // Includes Login Script
if(isset($_SESSION['login3_user'])){
header("location: user.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>User login</title>
<body  style="background-image: url('h5.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%">
<style type="text/css">
	h1{
		color: white;


	}

	.container{
		top: 40%;
		left: 50%;
		position:absolute;
		transform: translate(-50%,-50%);
		
	}
	form{
		padding: 70px 50px 70px 50px;
		background: black;
		border-radius: 300px;
		
	}
	#name{
		border: none;
		background: transparent;
		color: white;
		border-bottom: 1px solid white;
		padding: 10px;
		margin-bottom: 10px;
		margin-left: 45px;

	}
	#button{

		margin-left: 90px;
		padding: 10px 25px ;
		border-radius: 10px;
		border: none;
		outline: line;
	}
	#button:hover{
		background-color:blue;
	}
</style>
</head>
<body>
<div class="container">

<form action="" method="post">
<h1>" User Login page "</h1>
<input type="text" id="name" name="username" placeholder=" Enter your user Name"/><br>
<input type="password" id="name" name="password" placeholder=" Enter your Password "/><br>
<p style="color: white;margin-left: 30px">Need an new Account <a href="userreg.php">: Click Here</a></p>
<input type="submit" id="button" name="submit" value="Login">
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>