<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
     <title>User Registrattion system using PHP and MySQl</title>
     
     <link rel="stylesheet" href="assets/css/ch.css" type="text/css">
     
     </head>
     <div class="header">
          <h1 style="font-family:Comic Sans MS, Comic Sans, cursive">Admin Login</h1>
     </div>

<form method="post" action="adminLogin.php">
<?php include('errors.php'); ?>
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username">
        </div>
     
        <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
        </div>
      
        <div class="input-group">
         <button type="submit" name="login" class="btn" >Login</button>

</div >

</form>
     </body>
     </body>
     </html>