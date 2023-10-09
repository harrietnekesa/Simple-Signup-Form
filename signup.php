
<?php
include('connection.php');

if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$number=$_POST['number'];

$q="insert into orders(name,email,password,number)values('$name','$email','$password','$number')";
$f=mysqli_query($conn,$q)or die(mysqli_connect_error('$conn'));

echo 'successfull';
}
 ?>
















<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signup</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
	<h1>rueben</h1>
	<h2>SIGN UP!</h2>
	<form method="POST">
		NAMES:<input type="text" name="name"><p>
		EMAIL:<input type="email" name="email"><p>
		PASSWORD:<input type="password" name="password"><p>
		PHONE NUMBER:<input type="number" name="number"><P>
		<button type="submit" name="submit">SUBMIT</button>
	</form>
	

	<h2>Already have an account! <a href="login.php">LOG IN</a></h2>
	</div>
</body>
</html>