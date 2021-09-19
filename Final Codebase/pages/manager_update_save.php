<?php
include("connection.php");
  $name = $_POST['pname'];
  $price = $_POST['pprice'];
  $product_id = $_GET['id'];

  $sql = "update products set Name='$name',Price='$price' where product_id='$product_id'";
  $update = mysqli_query($conn, $sql);
  if($update){
    header("Location: ./ManagerHome.php");
  }else{
    echo 'try again';
  }
?>
