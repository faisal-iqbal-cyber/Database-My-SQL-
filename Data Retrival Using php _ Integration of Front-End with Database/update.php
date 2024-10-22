<?php 

	include 'connect.php';

	$sql=" update booksinfo
		set bname='Akbar'
		where bid=9;

	";
	if($conn->query($sql)=== true){
	 	echo "<br>Record Updated  Succesfully!!";
	 }else{
	 	echo "Error in Record Updated" . $conn->error;
	 }



 ?>