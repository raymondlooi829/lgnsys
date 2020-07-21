<?php include('config.php') ?> 
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="register.css">
</head>
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
<body>

	<div class = "header">
		<h2>LOGIN</h2>
	</div>

	<div class="wrap-container">
	<form method = "POST" action = "login.php">

    <?php include('error.php'); ?> 

	<div class = "input-group">
		<label><i class="fa fa-user ">Username</i></label>
		<input type = "text" name ="username">
	</div>
	
	<div class = "input-group">
		<label>Email</label>
		<input type="email" name="email" value = "">
	</div>
	
	<div class = "input-group">
		<label><i class="fa fa-key">Password<i></label>
		<input type = "password" name ="password" value ="" id="showPassword">
	</div>
	
	<div class = "input-group">
		<button type = "submit" class = "btn" name = "login_btn">Login</button>
	</div>
	<p>
		Do not have a account yet? <a href = "registration.php">Sign up here</a>
	</p>
	</form>
	</div>	

	
<div class="footer">
  <p>Thank You For Visiting Us</p>
</div>

</body>
</html>

