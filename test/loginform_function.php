<?php

	session_start();
		
	$con = mysqli_connect('localhost','root','','loginsystem');
	
	mysqli_select_db($con,'users');
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	$s = "select * from users where username='$username' && password='$password' && email='$email'";
	
	$result = mysqli_query($con,$s);
	
	$num = mysqli_num_rows($result);

	if (!isset($_SESSION['username'])) { 
	    $_SESSION['msg'] = "You have to log in first"; 
	    header('location: login.php'); 
	} 
	
	if($num == 1){
		$_SESSION['username'] = $username;
		if($_SESSION['username']!=""){
			print"Hi,welcome back".$_SESSION['username'];
			header('location:adminhome.php');
		}else{
			print"Plese fill up the username"."LOGIN";
			header('location:login..php');

		}
	
	}
?>
 