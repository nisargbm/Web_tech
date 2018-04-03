<?php
// Include config file
require_once 'config.php';

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT username  FROM users WHERE username='$username' AND password='$password' ";
$result = $conn->query($sql);

if ($result->num_rows === 0) {
    // output data of each row
	echo "Invalid Credentials";
} else {
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	$_SESSION["username"]=$username;
	header( 'location:./static/pages/home.php');
}

$conn->close();
?>