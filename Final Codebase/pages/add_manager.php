<?php
include("connection.php");
if (isset($_POST['insert'])) {

  $manager_name  =  $_POST['name'];
  $manager_email  =  $_POST['email'];
  $manager_phone  =  $_POST['phone'];
  $manager_address  =  $_POST['address'];
  if ($manager_name == '') {
    echo "<script>alert('Please enter the name')</script>";
    echo "<script>window.open('./add_manager_form.php','_self')</script>";
    exit();
  }
  if ($manager_email == '') {
    echo "<script>alert('Please enter the email')</script>";
    echo "<script>window.open('./add_manager_form.php','_self')</script>";
    exit();
  }
  if ($manager_phone == '') {
    echo "<script>alert('Please enter the phone number')</script>";
    echo "<script>window.open('./add_manager_form.php','_self')</script>";
    exit();
  }
  if ($manager_address == '') {
    echo "<script>alert('Please enter the address')</script>";
    echo "<script>window.open('./add_manager_form.php','_self')</script>";
    exit();
  }
  $check_query = "select * from manager_details where email='$manager_email'";
  $run_query =  mysqli_query($conn, $check_query);
  if (mysqli_num_rows($run_query) > 0) {
    echo "<script>alert('The email $manager_email already exist in our database!')</script>";
    echo "<script>window.open('./add_manager_form.php','_self')</script>";
    exit();
  }

  $insert_manager = "insert into manager_details (name, email, phone, address)
  value ('$manager_name', '$manager_email', '$manager_phone', '$manager_address')";

   if(mysqli_query($conn, $insert_manager)){
     echo "<script>window.open('./view_manager.php','_self')</script>";
   }

}else {
  echo "<script>window.open('./add_manager_form.php','_self')</script>";
}
?>
