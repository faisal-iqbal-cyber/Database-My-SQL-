<?php 
	
	include 'connect.php';

	$sql=" create table booksInfo(
	bid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	bname VARCHAR(30) NOT NULL,
	author VARCHAR(30) NOT NULL,
	price INT(6) UNSIGNED NOT NULL,
	issuedate DATE
	 )";

	 if($conn->query($sql)=== true){
	 	echo "Table Created Succesfullly!";
	 }else{
	 	echo "Error in Creating Table" . $conn->error;
	 }











 ?>