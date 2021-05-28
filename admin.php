<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<h1> Admin  Workspace</h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     

</head>
<style>
* {
  font-family: sans-serif; /* Change your font family */
}
h1{
  text-align:center;
}
.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  table-layout: fixed;
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-size:15px;
  font-weight: bold;
  overflow: hidden;

}

.content-table th,
.content-table td {
  padding: 12px 15px;
  max-width:200px; min-width:200px; max-height:50px; min-height:50px; width:200px; height:50px;

  
  border-collapse: collapse;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
  
  border-collapse: collapse;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;

}

table.center {
  margin-left: auto; 
  margin-right: auto;
}


</style>
<body>

<table class="content-table center">


  <thead>
<tr>

<th>Photographer_username</th>

<th>Photographer_name</th>

<th>Photographer_phone</th>

<th>Photographer_email</th>

<th>Photographer_address</th>

<th>Delete  Account</th>
<th>Display pic</th>
</thead>
</tr>


<?php
echo '<center><p><a href="index.php" title="Return to previous page">&laquo; LogOut</a></p></center>';

session_start(); 
require 'connection.php';
$conn = Connect();
if (!$conn)

  {

  die('Could not connect: ' . mysql_error());

  }

 

  mysqli_select_db( $conn,'pixelbay');

 
  $result = mysqli_query($conn,"SELECT * FROM photographers");
 
  $pic = mysqli_query($conn,"SELECT * FROM photos");




 

while($row = mysqli_fetch_array($result ))

  {

  echo "<tr>";

  echo "<td>" . $row['photographer_username'] . "</td>";
  
  echo "<td>" . $row['photographer_name'] . "</td>";
  

  echo "<td>" . $row['photographer_phone'] . "</td>";

  echo "<td>" . $row['photographer_email'] . "</td>";

  echo "<td>" . $row['photographer_address'] . "</td>";

  
  echo  "<td>"."<a class='btn btn-primary btn-lg'  href='deregister.php?id=".$row['photographer_username']." '>Delete Account</a>" ."</td>";
   
  echo  "<td>"."<a class='btn btn-primary btn-lg'  href='display.php?id=".$row['photographer_username']." '>Show image</a>" ."</td>";
   
  
  
  
  
  }


  echo "</tr>";
  
echo "</table>";





?>





</body>

</html>

