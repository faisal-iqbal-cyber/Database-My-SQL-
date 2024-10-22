<?php  
	

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "books";

	//object oriented
	$conn = new mysqli($servername, $username, $password, $database);
	echo "Database connected successfully!";
	if ($conn->connect_error ) {
		die("Connection failed" . $conn->connect_error);
	}




?>
