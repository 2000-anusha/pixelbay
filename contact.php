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
    <link rel="shortcut icon" type="image/png" href="assets/img/fav.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <link rel="stylesheet" href="logassets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="logassets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="logassets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="logassets/css/styles.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/about.css">
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
  <h1>Contact Us</h1>
  <p>You will get reply with in 24 hours!</p>
</div>
    <div class="container">  
  <form id="contact" action="" method="post">
    <center><p><strong>Fill the form and submit!</strong></p></center>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>
    
    <div class="footer-basic" style="background: #000;">
        <footer style="text-align: center;">
            <h5 style="border-color: rgb(255,255,255);color: rgb(255,255,255);"><br><strong>© 2020 Pixel Bay.&nbsp; All rights reserved.</strong><br><br></h5>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>