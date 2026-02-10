     <?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','login');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


// database insert SQL code
$sql = "INSERT INTO `customer` (`name`, `email`, `password`) VALUES ( '$name', '$email', '$password')";

// insert in database 
if ($con->query($sql) === TRUE) {
echo" Welcome To HelPharma ";
header('Location:doc.html');
	
  }else {
	echo "Error: " . $sql . "<br>" . $con->error;
  }
  
  $con->close();
  
?>

 