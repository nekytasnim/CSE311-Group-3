<?php
include("connection.php");
if (isset($_POST['submit'])) {

  $user_email =  $_POST['email'];
  $user_pass  = $_POST['pass'];

  if ($user_email == '') {
    echo "<script>alert('Please enter the email')</script>";
    echo "<script>window.open('./login.html','_self')</script>";
    exit();
  }
  if ($user_pass == '') {
    echo "<script>alert('Please enter the password')</script>";
    echo "<script>window.open('./login.html','_self')</script>";
    exit();
  }

  $check_user = "select * from customer natural join customer_details where email ='$user_email'   AND password='$user_pass'";
  $query = mysqli_query($conn,$check_user );
  if(mysqli_num_rows($query)){
    session_start();
    $_SESSION['email'] = $user_email;

    echo "<script>window.open('./CustomerHome.php','_self')</script>";

  }else{
    echo "<script>alert('Email or password is incorrect!')</script>";
    echo "<script>window.open('../login.html','_self')</script>";
  }

}else {
  echo "<script>window.open('./login.html','_self')</script>";
}
