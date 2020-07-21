<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Home</title>
<link rel="stylesheet" href="adminhome.css">
<style>
.headers{
	flex:70%
	align-last:end;
	position:absolute;
	height:50px;
	width:100%;
	background-color: #35475e;
	border-bottom: 1px solid #2d3d51;
	float: left;
	left: 0;
}
.headers a{
	list-style: none;
	margin: 10px;
	padding: 0;
	display: inline-block;
	padding:0 20px;
	text-decoration:  none;
	color: #fff;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #35475e;
  color: white;
  text-align: center;
}
</style>
</head>
<body>

	<div class="header" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>"/>
		<a href="adminhome.php">Home</a>
	<div class="header-right">
		<a href = "logout.php"> <i class="fa fa-user-circle"></i><?php echo " "."".$_SESSION['username'];?></a>
	</div>
	</div>

	<div class = "side-nav">
		<div class="nav-left">
		<ul id="#" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>"/>
			<li><a href = "edit_profile.php"><i class="fa fa-user"></i> Profile </a></li>
		</ul>
	</div>
	
	<div class = "main-content">
		<?php  if (isset($_SESSION['username'])) : ?> 
            <p> 
                Welcome 
                <strong> 
                    <?php echo $_SESSION['username']; ?> 
                </strong> 
            </p> 
          
        <?php endif ?> 	
	</div>
	
</body>
</html>