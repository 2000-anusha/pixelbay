<?php 
 include('session_photographer.php');
if(!isset($_SESSION['login_photographer'])){
    session_destroy();
    header("location: photographerlogin.php");
}
?> 
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
    <strong><h3 style="margin-bottom: 25px; text-align: center; font-size: 30px; margin-left:auto;margin-right:auto; padding:20px; color:white; background-color:#006707 ;"><strong> Details about your Pixel </strong></h3></strong>
    <div class="container" style="margin-top: 20px;" >
    <div class="col-md-" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form">
        <?php 
            
        $pic_id = $_GET["id"];
        $sql1 = "SELECT * FROM  photos p, photographers pg WHERE p.pic_id = '$pic_id' AND p.pic_id=pr.pic_id AND p.photographer_username = pg.photographer_username";
            
            
        $result1 = mysqli_query($conn, $sql1)or die(mysqli_error($conn));
        if(mysqli_num_rows($result1)){
            while($row1 = mysqli_fetch_assoc($result1)){
                $pic_title = $row1["pic_title"];
                $pic_des = $row1["pic_des"];
                $pic_cat = $row1["pic_cat"];
                $pic_img = $row1["pic_img"];
                
            }
        }

        ?>
            
        
            
        <div class="container" style="padding:30px; background-color:#F5F5F5;text-align:justify;">    
         <center><img class="card-img-detail lesszoom responsive" src="<?php echo $pic_img; ?>" alt="Card image cap"></center>
           <hr>
          <!-- <div class="form-group"> -->
              <h5> <strong>Title : </strong>&nbsp;  <?php echo($pic_title);?></h5><br>
            <h5> <strong> Description : </strong>&nbsp; <?php echo($pic_des);?></h5><br>
            <h5> <strong> Category : </strong>&nbsp; <?php echo($pic_cat);?></h5>
            <hr>
            
            <a href="deletephoto.php?id=<?php echo($pic_id) ?>"  style="color:white; background-color:red;padding:5px;"><strong>Delete Photo</strong></a>
            </div>
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