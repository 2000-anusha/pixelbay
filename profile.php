<?php 
 include('session_photographer.php');
if(!isset($_SESSION['login_photographer'])){
    session_destroy();
    header("location: photographerlogin.php");
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
    
    <strong><h3 style="margin-bottom: 25px; text-align: center; font-size: 30px; margin-left:auto;margin-right:auto; padding:20px; color:white; background-color:#001560;"> <strong>Upadte Your Pixel Profile </strong></h3></strong>
    
    <?php 
            
        $user = $_SESSION['login_photographer'];
        $sql1 = "SELECT * FROM photographers p WHERE p.photographer_username='$user' ";
            
            
        $result1 = mysqli_query($conn, $sql1)or die(mysqli_error($conn));
        if(mysqli_num_rows($result1)){
            while($row1 = mysqli_fetch_assoc($result1)){
                $photographer_username = $row1["photographer_username"];
                $photographer_password = $row1["photographer_password"];
                $photographer_name = $row1["photographer_name"];
                $photographer_phone = $row1["photographer_phone"];
                $photographer_email = $row1["photographer_email"];
                $photographer_address = $row1["photographer_address"];
            }
        }

        ?>
    
    <div class="login-clean">
        <form role="form" action="updateprofile.php" method="POST">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="text" id="photographer_username"  name="photographer_username" placeholder="Your Username" required="" value=<?php echo $photographer_username; ?> autofocus=""></div>
            <div class="form-group"><input class="form-control" type="text" id="photographer_password"  name="photographer_password" placeholder="Password" required="" value=<?php echo $photographer_password; ?> autofocus=""></div>
            <div class="form-group"><input class="form-control" type="text" id="photographer_name"  name="photographer_name" placeholder="Your Full Name" required="" value=<?php echo $photographer_name; ?> autofocus=""></div>
            <div class="form-group"><input class="form-control" type="email" id="photographer_email"  name="photographer_email" placeholder="Your Email" required="" value=<?php echo $photographer_email; ?> autofocus=""></div>
            <div class="form-group"><input class="form-control" type="text" id="photographer_phone"  name="photographer_phone" placeholder="Your Phone" required="" value=<?php echo $photographer_phone; ?> autofocus=""></div>
            <div class="form-group"><input class="form-control" type="text" id="photographer_address"  name="photographer_address" placeholder="Your Address" required="" value=<?php echo $photographer_address; ?> autofocus=""></div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" name="submit" type="submit">Update</button>
            </div>
        
        </form>
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