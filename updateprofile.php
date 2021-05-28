<html>

  <head>
  <title>Pixel Bay</title>
  </head>
  <link rel="shortcut icon" type="image/png" href="assets/img/fav.png">
  <link rel="stylesheet" type = "text/css" href ="assets/css/manager_registered_success.css">
  <link rel="stylesheet" type = "text/css" href ="assets/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

  <body>

<?php

require 'connection.php';
$conn = Connect();

$photographer_name = $conn->real_escape_string($_POST['photographer_name']);
$photographer_username = $conn->real_escape_string($_POST['photographer_username']);
$photographer_email = $conn->real_escape_string($_POST['photographer_email']);
$photographer_phone = $conn->real_escape_string($_POST['photographer_phone']);
$photographer_address = $conn->real_escape_string($_POST['photographer_address']);
$photographer_password = $conn->real_escape_string($_POST['photographer_password']);

$query = "UPDATE photographers SET photographer_name = '" . $photographer_name . "', photographer_username = '" . $photographer_username . "', photographer_email = '" . $photographer_email . "', photographer_phone = '" . $photographer_phone . "', photographer_address = '" . $photographer_address ."', photographer_password = '" . $photographer_password ."' WHERE photographer_name =  '$photographer_name'";
$success = $conn->query($query);

if (!$success){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>


<div class="container" style="margin-top:10%;">
	<div class="jumbotron" style="text-align: center; background-color:#F5F5F5;">
		<h2> <?php echo "Welcome $photographer_name!" ?> </h2>
		<h3><strong>Profile Updated Successfully!</strong></h3>
		<p><strong>Go Back to Home - <a href="photographerlogin.php">HERE</a></strong></p>
	</div>
    <div >
        <div class="site-footer" style="color:#ddd;background-color:#C80090;text-align:center;padding:20px 20px;text-align: justify;">
            <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5 style="color:white;">© 2020 Pixel Bay.&nbsp; All rights reserved.</h5>
                </div>
            </div>
        </div>
    </footer>
        </div>
    </div>     
</div>

    </body>
</html>