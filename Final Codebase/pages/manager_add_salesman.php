<?php
include("connection.php");
if (isset($_POST['insert'])) {

  $salesman_name  =  $_POST['name'];
  $salesman_email  =  $_POST['email'];
  $salesman_phone  =  $_POST['phone'];
  $salesman_address  =  $_POST['address'];
  if ($salesman_name == '') {
    echo "<script>alert('Please enter the name')</script>";
    echo "<script>window.open('./manager_add_salesman_form.php','_self')</script>";
    exit();
  }
  if ($salesman_email == '') {
    echo "<script>alert('Please enter the email')</script>";
    echo "<script>window.open('./manager_add_salesman_form.php','_self')</script>";
    exit();
  }
  if ($salesman_phone == '') {
    echo "<script>alert('Please enter the phone number')</script>";
    echo "<script>window.open('./manager_add_salesman_form.php','_self')</script>";
    exit();
  }
  if ($salesman_address == '') {
    echo "<script>alert('Please enter the address')</script>";
    echo "<script>window.open('./manager_add_salesman_form.php','_self')</script>";
    exit();
  }
  $check_query = "select * from salesman_details where email='$salesman_email'";
  $run_query =  mysqli_query($conn, $check_query);
  if (mysqli_num_rows($run_query) > 0) {
    echo "<script>alert('The email $salesman_email already exist in our database!')</script>";
    echo "<script>window.open('./manager_add_salesman_form.php','_self')</script>";
    exit();
  }

  $insert_salesman = "insert into salesman_details (name, email, phone, address)
  value ('$salesman_name', '$salesman_email', '$salesman_phone', '$salesman_address')";

   if(mysqli_query($conn, $insert_salesman)){
     echo "<script>window.open('./manager_view_salesman.php','_self')</script>";
   }

}else {
  echo "<script>window.open('./manager_add_salesman_form.php','_self')</script>";
}
?>
