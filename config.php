<?php  
  
// for using session variables 
session_start(); 
   
// Declaring and hoisting the variables 
$username = ""; 
$email    = "";
$contact_number    = ""; 
$created    = "";  
$errors = array();  
$_SESSION['success'] = ""; 
   
// DBMS connection code -> hostname, 
// username, password, database name 
$db = mysqli_connect('localhost', 'root', '', 'loginsystem'); 


// Registration code 
if (isset($_POST['register_btn'])) { 
   
    // Receiving the values entered and storing 
    // in the variables 
    // Data sanitization is done to prevent 
    // SQL injections 
    $username = mysqli_real_escape_string($db, $_POST['username']); 
    $email = mysqli_real_escape_string($db, $_POST['email']); 
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']); 
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']); 
    $contact_number = mysqli_real_escape_string($db, $_POST['contact_number']); 
    $created = date("Y-m-d H:i:s");

    // Ensuring that the user has not left any input field blank 
    // error messages will be displayed for every blank input 
    if (empty($username)) { array_push($errors, "Username is required"); } 
    if (empty($email)) { array_push($errors, "Email is required"); } 
    if (empty($password_1)) { array_push($errors, "Password is required"); } 
   
    if ($password_1 != $password_2) { 
        array_push($errors, "The two passwords do not match"); 
        // Checking if the passwords match 
    } 
   
    // If the form is error free, then register the user 
    if (count($errors) == 0) { 
          
        // Password encryption to increase data security 
        $password = md5($password_1); 
          
        // Inserting data into table 
        $query = "INSERT INTO users (username, password, email, contact_number, created)  
                  VALUES('$username', '$password', '$email', '$contact_number', '$created')";  

        mysqli_query($db, $query); 
        echo "<script type='text/javascript'>alert('Registration Successful');window.location='login.php'</script>";
        // Storing username of the logged in user, 
        // in the session variable 
       } 
} 
   
// User login 
if (isset($_POST['login_btn'])) { 
      
    // Data sanitization to prevent SQL injection 
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);  
    $password = mysqli_real_escape_string($db, $_POST['password']);
 
   
    // Error message if the input field is left blank 
    if (empty($username)) { 
        array_push($errors, "Username is required"); 
    } 
    if (empty($password)) { 
        array_push($errors, "Password is required"); 
    } 
   
    // Checking for the errors 
    if (count($errors) == 0) { 
          
        // Password matching 
        $password = md5($password); 
          
        $query = "SELECT * FROM users WHERE username= 
                '$username' && email='$email' && password='$password'"; 
        $results = mysqli_query($db, $query); 
    
        $num = mysqli_num_rows($results);

        if ($num == 1) { 
            $_SESSION['username'] = $username;
            if($_SESSION['username']!=""){
                print"Hi,welcome back".$_SESSION['username'];
                header('location:adminhome.php');
            }else{
                print"Plese fill up the username"."LOGIN";
                header('location:login..php');

            }
   
        } 
    } 
}
   
?> 
