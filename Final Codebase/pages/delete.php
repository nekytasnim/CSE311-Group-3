<?php
include("connection.php");
$product_id = $_GET['id'];
$sql = "delete from products where product_id='$product_id'";
$delete = mysqli_query($conn, $sql);
if ($delete) {
  echo "<script>window.open('./OwnerHome.php?del=user has been deleted','_self')</script>";
}
?>
