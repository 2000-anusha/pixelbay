<html>

  <head>
  <title>pixelbay</title>
  </head>
  <link rel="shortcut icon" type="image/png" href="assets/img/fav.png">
  <link rel="stylesheet" type = "text/css" href ="assets/css/manager_registered_success.css">
  <link rel="stylesheet" type = "text/css" href ="assets/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <?php session_start(); ?>
  <body>
<?php

require 'connection.php';
$conn = Connect();

function GetImageExtension($imagetype) {
    if(empty($imagetype)) return false;
    
    switch($imagetype) {
        case 'assets/img/bmp': return '.bmp';
        case 'assets/img/gif': return '.gif';
        case 'assets/img/jpeg': return '.jpg';
        case 'assets/img/png': return '.png';
        default: return false;
    }
}

$pic_title = $conn->real_escape_string($_POST['pic_title']);
$pic_des = $conn->real_escape_string($_POST['pic_des']);
$pic_cat = $conn->real_escape_string($_POST['pic_cat']);

if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name=$_FILES["uploadedimage"]["name"];
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];
    $imgtype=$_FILES["uploadedimage"]["type"];
    $ext= GetImageExtension($imgtype);
    $imagename=$_FILES["uploadedimage"]["name"];
    $target_path = "assets/img/".$imagename;

    if(move_uploaded_file($temp_name, $target_path)) {
        
        $query = "INSERT into photos(pic_title,pic_des,pic_img,pic_cat,photographer_username) VALUES('" . $pic_title . "','" . $pic_des . "','".$target_path."','" . $pic_cat . "','" . $_SESSION['login_photographer'] . "')";
        $success = $conn->query($query);

        
    } 

}
/*      
$query1 = "SELECT pic_id from photos where pic_des = '$pic_des'";

$result = mysqli_query($conn, $query1);
$rs = mysqli_fetch_array($result, MYSQLI_BOTH);
$pic_id = $rs['pic_id'];
 */

/*
$query2 = "INSERT into photorel(pic_id,photographer_username) values('" . $pic_id ."','" . $_SESSION['login_photographer'] . "')";
$success2 = $conn->query($query2);
*/

if (!$success){ ?>
    <div class="container">
	<div class="jumbotron" style="text-align: center;">
        <?php echo $conn->error; ?>
        <br><br>
        <a href="addphotoscript.php" class="btn btn-default"> Go Back </a>
</div>
<?php	
}
else {
    //header("location: addphoto.php"); //Redirecting 
    
    
    
}

$conn->close();

?>
        
<div class="container" style="margin-top:10%;">
	<div class="jumbotron" style="text-align: center; background-color:#F5F5F5;">
		<h3><strong>Congratulations!</strong> Your Photo is uploaded successfully.</h3>
        <h4>We really appriciate your contribution to Pixel Bay.</h4>
		<p><strong>Go Back to home - <a href="index.php">CLICK HERE</strong></a></p>
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

      </div>
    </body>
</html>