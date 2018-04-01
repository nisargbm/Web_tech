<?php
// Include config file
require_once 'config.php';

$name = $_POST["name"];
$username = $_POST["username"];
$dob = $_POST["dob"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];

$sql = "SELECT username FROM users WHERE username='$username' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "Username already exists";
} else {
	if( $password === $confirmPassword ){
	// $sql = "INSERT INTO users (name, username, dob , phone ,email ,password) VALUES (".$name." , ".$username." , ".$dob." , ".$phone." , ".$email." , ".$password." )";
		$sql = "INSERT INTO users (name, username, dob , phone ,email ,password) VALUES ('$name','$username','$dob','$phone','$email','$password')";
	}else{
		echo "Error";
	}


	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		header( 'location:./static/pages/login.html' );
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}


$conn->close();
?>