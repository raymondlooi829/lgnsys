<?php include('config.php') ?> 

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="register.css">
<head>
<style>
.span{
	text-align: center;
	text-transform: uppercase;
	color:white;
}
.footer {
	height:5%;
	position: fixed;
	left: 0;
	bottom: 0;
	width: 100%;
	background-color: transparent;
	color: white;
	text-align: center;
	border-line: 1px solid #2d3d51;
}
</style>
</head>
<body>

	<div class = "header">
		<h2>REGISTER</h2>
	</div>

	<form method="POST" action="registration.php">
	<div class = "input-group">
		<label>Username</label>
		<input type="text" name="username" value = "">
	</div>

	<div class = "input-group">
		<label>Email</label>
		<input type="email" name="email" value = "">
	</div>

	<div class = "input-group">
		<label>Contact Number</label>
		<input type="contact_number" name="contact_number" value = "">
	</div>

	<div class = "input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>

	<div class = "input-group">
		<label>Confirmation Password</label>
		<input type="password" name="password_2">
	</div>
	
	<div class = "input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	
	<p>
		Already have account? <a href = "login.php">Sign in </a>
	</p>
	</form>
	<div>

</body>
</html>