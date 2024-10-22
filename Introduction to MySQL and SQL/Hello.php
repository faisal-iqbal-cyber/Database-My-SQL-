<?php 

	/*Printing Lines*/
	 echo "<p style='font-size:30'>Printing Lines</p>";
	 echo "<p style='color:blue; font-style:italic'>My Name is FAISAL.";
	 echo "<p style='color:blue; font-style:italic'>I Am a Bad Boy.";
	 echo "<p style='color:black; font-style:italic'>I am Very Carelessness.";
	 echo "<p style='color:gray; font-style:italic>'I Am Not a Loyal Boy.";
	 echo "<p style='color: blue; font-style:italic'>I live in Hostel.";
	 echo "<p style='color:purple; font-style:italic'>I Am a very Good boy."
	 print "<p style='color:purple;'>My name is Faisal<br></p>";
	 print "I am Giftian";


	/*Create Variable*/

	 echo "<p style='font-size:30'> Create Variables</p>";

	 $name = "Faisal";

	 $rollNo= 221370186;

	 echo "Name is : $name <br>";

	 echo "Roll no is :" . $rollNo;

	/*Table*/

	 $val1 = 1000;
	 $val2 = 1200;
	 $val3 = 1400;

	 echo "<p style='font-size:30'>Table</p>";

	echo "<table border='2' cellpadding='20' cellspacing='0' >

	// 		<tr>
	// 			<th style='background-color:gray'>Name</th>
	// 			<th style='background-color:gray'>Salary</th>
	// 		</tr>

	// 		<tr >
	// 			<td style='color: blue; background-color:pink'>Salary of Mr A</td>

	// 			<td style='color: blue; background-color:black'>$val1$</td>

	// 		</tr>
	// 		<tr>
	// 			<td style='color: blue; background-color:pink'>Salary of Mr B</td>

	// 			<td style='color: blue; background-color:black'>$val2$</td>
	// 		</tr>
	// 		<tr>
	// 			<td style='color: blue; background-color:pink'>Salary of Mr C</td>

	// 			<td style='color: blue; background-color:black'>$val3$</td>
	// 		</tr>

	// 	</table>";

	/**/
	//Indexe Array
	// echo "<p style='font-size:30'>Indexed Array</p>";

	// echo "<p style='font-size:30'>Indexed Array (For Loop)</p>";

	// $studentNames = array("FAISAL", "Hira", "Tom", 1);

	// var_dump($studentNames);//for debugging

	// //count()--> this count is used  in indexed array for length

	// $len =count($studentNames);

	// echo "<br> Length of Array is :" . $len . "<br>";
	// //for loop
	// for($i=0; $i < $len; $i++){

	// 	echo "$studentNames[$i]<br>";


	// }//for 
	// //while loop
	// echo "<p style='font-size:30'>Indexed Array (While Loop)</p>";

	// $studentNo = array(1,"Faisal", 3, 4.9,5,6);

	// var_dump($studentNo);

	// $len1 =count($studentNo);

	// $i=0;

	// while( $i<$len1){

	// 	echo "$studentNo[$i]<br>";

	// 	$i++;
	// }
	//Assosiated Array
	// echo "<p style='font-size:30'>Assosiated Array</p>";

	// // $std_Roll = array('Faisal' => 221370186,'Hira'=>221370162);

	// // // var_dump($std_Roll);

	// // foreach ($std_Roll as $key => $value) {
	// // 	echo "key = $key  , value =  $value<br>";
	// // }
	// echo "<br><br>";

	// $tch_course= array('Rukhsar Tariq'=> 'database', 'Druani'=>'Database Theory','Usman'=>'Islamic Studies','Math'=>'Faheem');

	// // var_dump($tch_course);
	// 	$size=count($tch_course);
	// 	if($size<=3){
	// 	foreach($tch_course as $key=> $value){
	// 		echo "key = $key , value = $value";
	// 	}
	// }

	echo "<p style='font-size:30'>Functions</p>";

	function printNames()
	{
		$tch_course= array('Rukhsar Tariq'=> 'database', 'Druani'=>'Database Theory','Usman'=>'Islamic Studies','Math'=>'Faheem');
		$size=count($tch_course);
		if($size>3){
			foreach($tch_course as $key=> $value){
				echo "key = $key , value = $value";
			}
		}
		
	}

	printNames();
















 ?>