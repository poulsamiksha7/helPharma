<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
header('Location: doc.html');
$con = mysqli_connect('localhost', 'root', '','login');

// get the post records

$email = $_POST['email'];
$password = $_POST['password'];


// database insert SQL code
$sql = "INSERT INTO `customer` (`email`, `password`) VALUES ( '$email', '$password')";

// insert in database 
if ($con->query($sql) === TRUE) {
	echo "New record created successfully";
  } else {
	echo "Error: " . $sql . "<br>" . $con->error;
  }

  
  $con->close();

?>