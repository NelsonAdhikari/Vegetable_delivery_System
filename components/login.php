<?php
session_start();
$role = "";
include '../database/connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_POST['Username'];
    $mypassword = $_POST['Password'];
    // $usertype=$_POST['user_type'];

    $sql = "SELECT id, Username, user_type FROM tb_customer WHERE Username = '$myusername' and Password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);
    
    // var_dump($count);

    if($count == 1) {
        
        
        // $_SESSION['user_type']=$usertype;
		$role = $row['user_type'];
		if($role=="user"){
			$row['Username'] =$_SESSION['username'];
			header("location: home.php");
		}
		else {
			$_SESSION['username'] = $row['Username'];
			header("location: ../admin validation/admindashboard.php");
		}
		

        
		
    }else 
        echo "<script>
        alert('Invalid Email/Password');
        window.location = './login.php';
        </script>";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
<body>
	<div class="header">
		<h2>Login<?php echo $role ?></h2>
	</div>
	<form method="post" action="login.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="Username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="Password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>