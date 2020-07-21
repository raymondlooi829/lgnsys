<?php
	session_start();
	
	$conn = mysqli_connect("localhost","root");
	mysqli_select_db($conn,"loginsystem");
	
	if(isset($_POST['update'])){
		$id = $_GET['id'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$contact_number = $_POST['contact_number'];
		$password = $_POST['password'];
		$update_date = date("Y-m-d H:i:s");
		
		$upt = "update `users` set id='$id', email='$email', contact_number='$contact_number', password ='$password', modified='$update_date' WHERE id= '$id'";
		
		mysqli_query($conn,$upt);	
			echo "<script type='text/javascript'>alert('Updates Data Successful');window.location='edit_profile.php'</script>";
		}
?> 
<?php
	$id = $_GET['id'];
	$sql_select = "Select * from users where id='$id'";
	$result = mysqli_query($conn,$sql_select);
	
	if(mysqli_num_rows($result) ==1 ){
			$row = mysqli_fetch_assoc($result);
		}	
?>	
<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>
<link rel="stylesheet" href="adminhome.css">
<style>
input[type=text]{
	width:100%;
	padding: 12px 20px;
	margin: 20px 0px;
	box-sizing: border-box;
	background-color: #f1f1f1;
}
input[type=number]{
	width:100%;
	padding: 12px 20px;
	margin: 20px 0px;
	box-sizing: border-box;
	background-color: #f1f1f1;
}
input[type=submit]{
	align="center"
	width:100%;
	padding: 12px 20px;
	margin: 20px 0px;
	box-sizing: border-box;
}
select {
  width: 100%;
  padding: 16px 20px;
  border: none;
  background-color: #f1f1f1;
}
button{
	align="center"
	width:100%;
	padding: 12px 20px;
	margin: 20px 0px;
	box-sizing: border-box;
}
h1{
	font-size: 40px;
}
</style>
</head>
<body>
	<div class="header" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<a href="adminhome.php">Home</a>
	<div class="header-right">
		<a href = "logout.php"><i class="fa fa-user-circle"></i><?php echo $_SESSION['username'];?></a>
	</div>
	</div>
	
	<div class = "side-nav">
		<div class="nav-left">
		<ul id="#" method="get">		
			<li><a href = "edit_profile.php"><i class="fa fa-user"></i> Profile </a></li>
		</ul>
	</div>
	
	<div class = "main-content">          
		<h1>Edit Profile</h1>	
		<br>		
			<form method="POST">
			<label="id">User ID : </label>
				<input type="text" name="id" value="<?php echo $id; ?>" disabled />
				<br>
			<label="username">Username : </label>
				<input type="text" name="username" value="<?php echo $row['username']; ?>" disabled />
				<br>
			<label="email">Email Address: </label>
				<input type="text" name="email" value="<?php echo $row['email']; ?>" />
				<br>
			<label="contact_number">Contact Number : </label>
				<input type="text" name="contact_number" value="<?php echo $row['contact_number']; ?>" />
				<br>
			<label="password">Password : </label>
				<input type="text" name="password" value="<?php echo $row['password']; ?>" />
				<br>
				<br>
			<input type="submit" name="update" value="Update"/>
			<button><a href="edit_profile.php"<i class="fa fa-eye">Views</i></a></button>
			</form>
	</div>
</body>
</html>