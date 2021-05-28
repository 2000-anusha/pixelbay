<?php
include('login_photographer.php'); // Includes Login Script

if(isset($_SESSION['login_photographer'])){
header("location: index.php"); //Redirecting
}
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
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: #000;">
        <div class="container">
            <a class="navbar-brand" href="index.php" style="color: rgb(255,255,255);font-size: 30px;">PIXEL BAY</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php" style="color: rgb(255,255,255);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php" style="color: rgb(255,255,255);">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php" style="color: rgb(255,255,255);">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="photographerlogin.php" style="color: rgb(255,255,255);"><button>LOGIN/REGISTER</button></a></li>
                </ul>
        </div>
        </div>
    </nav>
    
     <strong><h3 style="margin-bottom: 25px; text-align: center; font-size: 30px; margin-left:auto;margin-right:auto; padding:20px; color:white; background-color:#001560;"> <strong>Welcome Again, Please Login here </strong></h3></strong>
    
    
    <div class="login-clean">
        <form action="login_photographer.php" method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="text" id="photographer_username"  name="photographer_username" placeholder="Username" required="" autofocus=""></div>
            <div class="form-group"><input class="form-control" type="password" id="photographer_password"  name="photographer_password" placeholder="Password" required="" autofocus=""></div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" name="submit" type="submit" value=" Login ">Log In</button>
            </div><a class="forget" href="photographerregister.php">Create a new account.</a></form>
    </div>
    <script src="logassets/js/jquery.min.js"></script>
    <script src="logassets/bootstrap/js/bootstrap.min.js"></script>
    
    
    <div class="footer-basic" style="background: #000;">
        <footer style="text-align: center;">
            <h5 style="border-color: rgb(255,255,255);color: rgb(255,255,255);"><br><strong>© 2020 Pixel Bay.&nbsp; All rights reserved.</strong><br><br></h5>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>