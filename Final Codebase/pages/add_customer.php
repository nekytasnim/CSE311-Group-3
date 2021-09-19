<?php
include("connection.php");
if (isset($_POST['insert'])) {

  $customer_fname  =  $_POST['fname'];
  $customer_lname  =  $_POST['lname'];
  $customer_email  =  $_POST['email'];
  $customer_phone  =  $_POST['phone'];
  $customer_address  =  $_POST['address'];
  if ($customer_fname == '') {
    echo "<script>alert('Please enter the first name')</script>";
    echo "<script>window.open('./add_manager_form.php','_self')</script>";
    exit();
  }
  if ($customer_lname == '') {
    echo "<script>alert('Please enter the last name')</script>";
    echo "<script>window.open('./add_manager_form.php','_self')</script>";
    exit();
  }
  if ($customer_email == '') {
    echo "<script>alert('Please enter the email')</script>";
    echo "<script>window.open('./add_manager_form.php','_self')</script>";
    exit();
  }
  if ($customer_phone == '') {
    echo "<script>alert('Please enter the phone number')</script>";
    echo "<script>window.open('./add_manager_form.php','_self')</script>";
    exit();
  }
  if ($customer_address == '') {
    echo "<script>alert('Please enter the address')</script>";
    echo "<script>window.open('./add_manager_form.php','_self')</script>";
    exit();
  }
  $check_query = "select * from customer_details where email='$customer_email'";
  $run_query =  mysqli_query($conn, $check_query);
  if (mysqli_num_rows($run_query) > 0) {
    echo "<script>alert('The email $customer_email already exist in our database!')</script>";
    echo "<script>window.open('./add_customer_form.php','_self')</script>";
    exit();
  }

  $insert_customer = "insert into customer_details (fname, lname, email, phone, address)
  value ('$customer_fname', '$customer_lname', '$customer_email', '$customer_phone', '$customer_address')";

   if(mysqli_query($conn, $insert_customer)){
     echo "<script>window.open('./owner_view_customer.php','_self')</script>";
   }

}else {
  echo "<script>window.open('./add_customer_form.php','_self')</script>";
}
?>
