<?php  

	// require 'header.php';










	if (isset($_POST['signin'])) {


		if (empty($_POST['name'])) {
			echo "Name field is empty! <br>";
		} else {
			$name = trim($_POST['name']);
		}//if


		if (empty($_POST['email'])) {
			echo "email field is empty!<br>";
		} else {

			$email = trim($_POST['email']);

		}//if


		if (empty($_POST['roll'])) {
			echo "Roll no field is empty! <br>";
		} else {

			$rollNo = trim($_POST['roll']);

		}//if


		if (empty($_POST['pass'])  || empty($_POST['cpass'])) {
			echo "Password or Confirm Password is empty! <br>";
		} else {

			if ($_POST['pass'] == $_POST['cpass']) {
				$pass = $_POST['pass'];	
			} else {
				echo "Password and Confirm Password do not match! <br>";
			}
		}



		if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['roll']) && !empty($_POST['pass']) && !empty($_POST['cpass'])  ) {
			

		

			echo "Your name is: " . $name;
			echo "<br>Your email is: " . $email;
			echo "<br>Your roll no is: " . $rollNo;
			echo "<br>Password: " . $pass;
			echo "<br>Confirm Password: " . $cpass;
		
		} else {
			echo "<br>Due to empty fields, we cannot show the data.<br> ";
		}




	} else {


		echo "You need to submit the form first!";
	}



	// $name = $_POST['name'];	//html element name
	// $email = $_POST['email'];
	// $rollNo = $_POST['roll'];
	// $pass = $_POST['pass'];
	// $cpass = $_POST['cpass'];




	// echo "Your name is: " . $name;
	// echo "<br>Your email is: " . $email;
	// echo "<br>Your roll no is: " . $rollNo;
	// echo "<br>Password: " . $pass;
	// echo "<br>Confirm Password: " . $cpass;

























	// require 'footer.php';
	// $course_teacher  = array('tayyaba' => 'DBMS' , 'Zainab' => 'DSA');


	// echo "<pre>";

	// print_r($course_teacher);


	// echo "</pre>";



?>