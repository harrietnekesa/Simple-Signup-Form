# Simple-Signup-Form
CSS-HTML-PHP

The signup.php
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


the connection.php file has the connection to the database
<?php 

$host="localhost";
$username="root";
$password="";
$dbname="users";

$conn=mysqli_connect('localhost','root','','users')or die(mysqli_error());

 ?>
 the style.css file
 body{
	margin-left: 350px;
	background-color: ghostwhite;
}
.container{
	width: 30em;
	height: 36em;
	background-color: sandybrown;
	}
	.container2{
	width: 30em;
	height: 36em;
	display: flex;
	padding:10px;

	}
	.cont1{
		width:10em;
		height: 26em;
		background-color: skyblue;

	}
	.cont2{
		width:20em;
		height:26em;
		background-color: rosybrown;
		
	}

h1{
	padding: 7px;
	text-align: center;
	color: seagreen;
}
h2{
	text-align: center;

	
}
form{
	padding: 15px;
	margin-bottom: 15px;
}
And the image file
