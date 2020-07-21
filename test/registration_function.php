<?php

	session_start();
		
	$con = mysqli_connect('localhost','root','','loginsystem');
	
	mysqli_select_db($con,'users');
	
	$username = $_POST['username'];
	$password = $_POST['password_2'];
	$email = $_POST['email'];
	$contact_number = $_POST['contact_number'];
	$created = date("Y-m-d H:i:s");
	
	$s = "select * from users where username='$username'";
	
	$result = mysqli_query($con,$s);
	
	$num = mysqli_num_rows($result);
	
	if($num == 1){
		echo "<script type='text/javascript'>alert('username Already Taken');window.location='registration.php'</script>";
	}else{
		$reg = "insert into users(username,password,email,contact_number,created)values('$username','$password','$email','$contact_number','$created')";
		
		mysqli_query($con,$reg);
			echo "<script type='text/javascript'>alert('Registration Successful');window.location='login.php'</script>";
	}
?>