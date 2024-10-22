<?php 

$servername="localhost";
$username="root";
$password="";
$database="company";

//object oriented

    //if not handle error so thats why we prefer try catch
    // if(conn->connect_errror){
    //     die("Connection failed" . $conn->connect_error);
    // }


    //it is best for error handling
    try{

    $conn= new mysqli($servername, $username, $password, $database);

    }catch(mysqli_sql_exception $e){

        die("connection field :" . $e->getMessage());
    }
   
    echo "Database connected succesfully!";


 ?>