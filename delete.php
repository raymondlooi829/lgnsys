<?php 
	session_start();
	
	$conn = mysqli_connect("localhost","root");
	mysqli_select_db($conn,"loginsystem");
	
	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		
		$sql = "Delete from users WHERE id='$id'";

		mysqli_query($conn,$sql);
		
		echo "<script type='text/javascript'>alert('Data Deleted Successfully');window.location='edit_profile.php'</script>";
	}else{
		echo "Error Deleting The Data";
	}
	
?>