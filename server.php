<?php
session_start();
$username="";
$email="";
$errors=array();

$db=mysqli_connect('localhost','root','','pixelbay');


               
                 if (isset($_POST['login'])) 
                 {
                  $username=mysqli_real_escape_string($db,$_POST['username']);
                  $password=mysqli_real_escape_string($db,$_POST['password']);
               
                  if (empty($username)) 
                  {
                array_push($errors,"Username is required");
                  }
               
                  if(empty($password)) 
                  {
                   array_push($errors,"password is required");
                   }
                   
                   if(count($errors)==0) {
                    
                     $query="SELECT * FROM user WHERE username='$username' AND password='$password'";
                     $result=mysqli_query($db,$query);
                     if (mysqli_num_rows($result)==1) {
                       
                 $_SESSION['username']=$username;
                 $_SESSION['success']="You are now logged in";
                 header('location:admin.php');
                     }
                     else{
                       array_push($errors,"wrong username/password combination");
                     }
                    }

                 }








                    
                if (isset($_GET['logout'])) {
                  session_destroy();
                  unset($_SESSION['username']);
                  header('location: login.php');
                }
              
            ?>
       
