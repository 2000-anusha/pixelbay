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

$del = mysqli_query($conn,"select * from photos where photographer_username='$id'"); // delete query


if(mysqli_num_rows($del) > 0) {
    while($row1 = mysqli_fetch_assoc($del)){
        $pic_id = $row1["pic_id"];
        $pic_title = $row1["pic_title"];
        $pic_des = $row1["pic_des"];
        $pic_cat = $row1["pic_cat"];
        $pic_img = $row1["pic_img"];

   
    }
     echo  "<font size='18' face='Arial'><center> <a class='btn btn-primary a btn-lg'  href='$pic_img'>Show image</a></center>";
   
}
?>
<html>
<style>
.a{
    text-align:center;
}
</style>
</html> 