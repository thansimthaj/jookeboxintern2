<?php
include("connection.php");

if (isset($_POST['submit'])) {
	
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="SELECT * FROM signup WHERE email='$email' and password='$password' ";
	$result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);

	if($num > 0){
		header("location:welcome.php");
	}else{
	 echo '<script>alert("invalid username or password");</script>';
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="main">
	<form action="" method="POST">
		<h1>LOGIN</h1>
		<input type="email" name="email" placeholder="Enter your email id" autocomplete="off" required><br>
		<input type="password" name="password" placeholder="Enter Password" autocomplete="off" required><br>
		<button type="submit" name="submit">LOGIN</button><br><br>
		Don't have an account?&nbsp;<a href="signup.php">Signup Here</a>
	</form>
</div>

</body>
</html>