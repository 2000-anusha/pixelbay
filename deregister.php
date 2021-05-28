<?php
// Using database connection file here

session_start(); 
require 'connection.php';
$conn = Connect();
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from photographers where photographer_username = '$id'"); // delete query
$dele = mysqli_query($conn,"delete from photos where photographer_username = '$id'"); // delete query
if($del)
{
    if($dele){

    
    mysqli_close($conn); // Close connection
    header("location:admin.php"); // redirects to all records page
    exit;	
}
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>