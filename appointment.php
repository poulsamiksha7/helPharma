<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','login');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$doctor = $_POST['doctor'];


// database insert SQL code
$sql = "INSERT INTO `customer` (`name`,`email`, `password`,`doctor`) VALUES ( '$name','$email', '$password','$doctor')";

// insert in database 
if ($con->query($sql) === TRUE) {
	echo "New record created successfully";
  header('Location:successbooking.html');
  } else {
	echo "Error: " . $sql . "<br>" . $con->error;
  }
  
  $con->close();

?>