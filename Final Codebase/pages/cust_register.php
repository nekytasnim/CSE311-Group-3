<?php
include("connection.php");
if (isset($_POST['register'])) {

  $user_fname  =  $_POST['fname'];
  $user_lname  =  $_POST['lname'];
  $user_phone  =  $_POST['num'];
  $user_email =  $_POST['mail'];
  $user_address =  $_POST['address'];
  $user_pass  = $_POST['pass'];

  if ($user_fname == '') {
    echo "<script>alert('Please enter the first name')</script>";
    echo "<script>window.open('./register.php','_self')</script>";
    exit();
  }
  if ($user_lname == '') {
    echo "<script>alert('Please enter the last name')</script>";
    echo "<script>window.open('./register.php','_self')</script>";
    exit();
  }
  if ($user_phone == '') {
    echo "<script>alert('Please enter phone number')</script>";
    echo "<script>window.open('./register.php','_self')</script>";
    exit();
  }
  if ($user_email == '') {
    echo "<script>alert('Please enter the email')</script>";
    echo "<script>window.open('./register.php','_self')</script>";
    exit();
  }
  if ($user_address == '') {
    echo "<script>alert('Please enter the address')</script>";
    echo "<script>window.open('./register.php','_self')</script>";
    exit();
  }
  if ($user_pass == '') {
    echo "<script>alert('Please enter the password')</script>";
    echo "<script>window.open('./register.php','_self')</script>";
    exit();
  }

  $check_email_query = "select * from customer where email='$user_email'";
  $run_query =  mysqli_query($conn, $check_email_query);
  if (mysqli_num_rows($run_query) > 0) {
    echo "<script>alert('Email $user_email already exist in our database, please try another one!')</script>";
    echo "<script>window.open('./register.php','_self')</script>";
    exit();
  }

  $insert_user = "insert into customer (fname, lname, phone, email, address, password)
  value ('$user_fname', '$user_lname', '$user_phone', '$user_email', '$user_address', '$user_pass')";

   if(mysqli_query($conn, $insert_user)){
     echo "<script>window.open('./CustomerHome.php','_self')</script>";
   }

}else {
  echo "<script>window.open('./register.php','_self')</script>";
}
?>
