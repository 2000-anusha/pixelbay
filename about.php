<!DOCTYPE html>
<html>
<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PixelBay</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/fav.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <link rel="stylesheet" href="logassets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="logassets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="logassets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="logassets/css/styles.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="aboutassets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="aboutassets/css/Features-Boxed.css">
    <link rel="stylesheet" href="aboutassets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: #000;">
        <div class="container">
            <a class="navbar-brand" href="index.php" style="color: rgb(255,255,255);font-size: 30px;">PIXEL BAY</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <?php
                if (isset($_SESSION['login_photographer'])){
            ?>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php" style="color: rgb(255,255,255); hover">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="photos.php" style="color: rgb(255,255,255); hover">Your Photos</a></li>
                    <li class="nav-item"><a class="nav-link" href="addphoto.php" style="color: rgb(255,255,255);">Add New Photo</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php" style="color: rgb(255,255,255);">Your Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php" style="color: rgb(255,255,255);">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php" style="color: rgb(255,255,255);">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php" style="color: rgb(255,255,255);">Logout</a></li>
                </ul>
        </div>
            <?php
            }
                else {
            ?>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php" style="color: rgb(255,255,255);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php" style="color: rgb(255,255,255);">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php" style="color: rgb(255,255,255);">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="photographerlogin.php" style="color: rgb(255,255,255);"><button>LOGIN/REGISTER</button></a></li>
                </ul>
        </div>
            
            <?php   }
                ?>
        </div>
    </nav>
    
    <div class="about-section">
  <h1>About Us</h1>
  <p>Pixel Bay is a large pixel body on the earth.</p>
  <p>We ensure you that you are getting best quality pixels from us.</p>
</div>
<div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Features </h2>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">Helps to Grow Faster</h3>
                        <p class="description"><br>If you are new to this field you have a great chance to grow faster with help of our platform. We provide you the best audience to showcase your work.<br><br></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">Provide Best Quality</h3>
                        <p class="description"><br>As a photographer you can feel free about the quality of the photos. We have the best photographers from all around the glob. You can see their work and find the best one for your requirements.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">Anyone can Join Us</h3>
                        <p class="description"><br>We are fully free. Just an open-source platform which runs through the donation. We don't take any fees. So anybody who want to show their pixels of camera to world can&nbsp; join us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <div class="footer-basic" style="background: #000;">
        <footer style="text-align: center;">
            <h5 style="border-color: rgb(255,255,255);color: rgb(255,255,255);"><br><strong>© 2020 Pixel Bay.&nbsp; All rights reserved.</strong><br><br></h5>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>