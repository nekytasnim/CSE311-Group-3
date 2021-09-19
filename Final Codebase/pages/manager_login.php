<?php

include("connection.php");
if (isset($_POST['submit'])) {

  $admin_name =  $_POST['uname'];
  $admin_pass  = $_POST['pass'];

  if ($admin_name  == '') {
    echo "<script>alert('Please enter the username')</script>";
    echo "<script>window.open('./manager.php','_self')</script>";
    exit();
  }
  if ($admin_pass == '') {
    echo "<script>alert('Please enter the password')</script>";
    echo "<script>window.open('./manager.php','_self')</script>";
    exit();
  }

  $check_user = "select * from manager where username ='$admin_name'   AND password='$admin_pass'";
  $query = mysqli_query($conn,$check_user );
  if(mysqli_num_rows($query)){
    session_start();
    $_SESSION['uname'] = $admin_name;

    echo "<script>window.open('./ManagerHome.php','_self')</script>";

  }else{
    echo "<script>alert('Email or password is incorrect!')</script>";
    echo "<script>window.open('./manager.php','_self')</script>";
  }

}else {
  echo "<script>window.open('./amanager.php','_self')</script>";
}



?>
