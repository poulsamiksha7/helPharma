<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','login');

// get the post records
$name = $_POST['name'];
$emailAddress = $_POST['emailAddress'];
$message = $_POST['message'];


// database insert SQL code
$sql = "INSERT INTO `contact` (`name`, `emailAddress`, `message`) VALUES ( '$name', '$emailAddress', '$message')";

// insert in database 
if ($con->query($sql) === TRUE) {

	
  }else {
	echo "Error: " . $sql . "<br>" . $con->error;
  }
  
  $con->close();
  
?>