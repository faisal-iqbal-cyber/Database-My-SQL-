<?php 
	

	include 'connect.php';

	$sql="Delete from booksinfo
		where bid = 10

	";



	if($conn->query($sql)=== true){
	 	echo "<br>Record Deleted Succesfully!!";
	 }else{
	 	echo "Error in Record Deleting" . $conn->error;
	 }

 ?>