<?php 
	session_start();
	
	$conn = mysqli_connect("localhost","root");
	mysqli_select_db($conn,"loginsystem");

	$id = '';
	$username = '';
	$email = '';
	$contact_number = '';
	$password = '';
?>	
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="adminhome.css">
<style>
table,th,td{
	border: 1px solid black;
	width:100%;
	font-size:20px;
	text-align:left;
	padding:5px;
	margin:5px;
}
th{
	background-color: #f1f1f1 ;
}
button{
	padding:15px;
	margin:5px;
	text-decoration: none;
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
		<ul id="#" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<li><a href = "edit_profile.php"><i class="fa fa-user"></i> Profile </a></li>
		</ul>
	</div>
	
		<div class="main-content">	
		<table id="student-data" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Email</th>
					<th>Contact Number</th>
					<th colspan="2">Actions</th>
				</tr>
			</thead>
			
		<section>
			<h1>Profile Information</h1>
		</section>			
	<?php 
	$conn = mysqli_connect("localhost","root");
	mysqli_select_db($conn,"loginsystem");

	$sql =("SELECT * FROM `users` ORDER BY id ASC");	
	$query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($query)){
	?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['contact_number'];?></td>
			<td><button><a href="update_profile.php?id=<?php echo $row['id'];?>"<i class="fa fa-edit">Edit</i></a></td></button>
			<td><button><a href="delete.php?delete=<?php echo $row['id'];?>"onclick="return confirm('You confirm want to delete this?');"<i class="fa fa-trash-o">Delete</i></a></td></button>
		</tr>
	<?php	
		}
	?>
		</table>
		</div>
</body>
</html>	



