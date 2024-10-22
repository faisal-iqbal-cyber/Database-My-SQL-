<?php 

	include 'connect.php';
	
	if(isset($_POST['addbook'])){
		$bookname=$_POST['bookname'];
		$author=$_POST['author'];
		$price=$_POST['price'];
		$issuedate=$_POST['issuedate'];
	}else{
		echo "Submit the form first";
	}

	$sql="insert into booksinfo(bname, author, price, issuedate)
		values('$bookname', '$author', '$price','$issuedate')";


	if($conn->query($sql)=== true){
	 	echo "<br>Record Added Successfully!!";
	 }else{
	 	echo "Error in Record adding" . $conn->error;
	 }



 ?>