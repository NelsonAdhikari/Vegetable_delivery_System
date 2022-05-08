<?php

// $conn = "";

// try {
// 	$servername = "localhost";
// 	$dbname = "db_vegetable_system";
// 	$username = "root";
// 	$password = "";

// 	$conn = new PDO(
// 		"mysql:host=$servername; dbname=db_vegetable_system",
// 		$username, $password
// 	);
	
// $conn->setAttribute(PDO::ATTR_ERRMODE,
// 					PDO::ERRMODE_EXCEPTION);
// }
// catch(PDOException $e) {
// 	echo "Connection failed: " . $e->getMessage();
// }



$host     = "localhost";
$user     = "root";
$password = "";
$database = "db_vegetable_system";
$conn   = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno($conn)) {
   
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>
