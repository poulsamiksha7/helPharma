<?php

header('Location:successful.html');
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','purchase');

// get the post records
$username = $_POST['username'];
$cardNumber = $_POST['cardNumber'];



// database insert SQL code
$sql = "INSERT INTO `bill` (`username`, `cardNumber`) VALUES ( '$username', '$cardNumber')";

// insert in database 
if ($con->query($sql) === TRUE) {
    header("Location: successful.html");
    exit();
} else {
    echo "Error: " . $con->error;
}

  
  $con->close();
  
?>

 