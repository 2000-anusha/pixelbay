<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['photographer_username']) || empty($_POST['photographer_password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$photographer_username=$_POST['photographer_username'];
$photographer_password=$_POST['photographer_password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'connection.php';
$conn = Connect();

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT photographer_username, photographer_password FROM photographers WHERE photographer_username=? AND photographer_password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt -> bind_param("ss", $photographer_username, $photographer_password);
$stmt -> execute();
$stmt -> bind_result($photographer_username, $photographer_password);
$stmt -> store_result();

if ($stmt->fetch())  //fetching the contents of the row
{
	$_SESSION['login_photographer']=$photographer_username; // Initializing Session
	header("location: index.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>