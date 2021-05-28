<?php 
 include('session_photographer.php');
if(!isset($_SESSION['login_photographer'])){
    session_destroy();
    header("location: photographerlogin.php");
}
?> 
<!DOCTYPE html>
<html>

<!DOCTYPE html>
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
                    <li class="nav-item"><a class="nav-link" href="index.php" style="color: rgb(255,255,255);">Home</a></li>
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
    
    <div class="container" style="margin-top: 25px;" >
    <div class="col-md-10" style="float: none; margin: 0 auto; background-color:#f5f5f5;; padding:60px;margin-bottom:20px;">
      <div class="form-area">
        <form role="form" action="addphotoscript.php" enctype="multipart/form-data" method="POST">
        <br style="clear: both">
          <strong><h3 style="margin-bottom: 25px; text-align: center; font-size: 30px; padding:20px; color:white; background-color:#006707 ;"> <strong> Contribute Pixels to Pixel Bay </strong></h3></strong>
          <div class="form-group">
              
              <div class="form-group">
            <label for="photos"><strong>Select Photo:</strong></label><br>
            <input name="uploadedimage" type="file">
          </div>
              
              <label for="photos"><strong>Photo Title:</strong></label>
            <input type="text" class="form-control" id="pic_title" name="pic_title" placeholder="Enter photo title " required autofocus="">
          </div>

          <div class="form-group">
              <label for="photos"><strong>Photo Description:</strong></label>
            <input type="text" class="form-control" id="pic_des" name="pic_des" placeholder="Enter Product Description" required>
          </div> 
            
            <div class="form-group">
            <label for="photos"><strong>Photo Category:</strong></label><br>
            <select id="pic_cat" name="pic_cat" required>
              <option selected disabled value="">Choose Category</option>
              <option value="Portrait">Portrait</option>
              <option value="Fashion" >Fashion</option>
              <option value="Sports">Sports</option>
              <option value="Wedding" >Wedding</option>
              <option value="Product" >Product</option>
              <option value="Travel">Travel</option>
              <option value="Aerial" >Aerial</option>
              <option value="Product" >Product</option>
              <option value="Nature" >Nature</option>
            </select>
            </div>
            
           <button type="submit" id="submit" name="submit" class="btn btn-success pull-right"> Add Photo</button>  
        </form>
      </div>
    </div>
    
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