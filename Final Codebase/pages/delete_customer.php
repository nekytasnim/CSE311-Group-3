<?php
include("connection.php");
$customer_id = $_GET['id'];
$sql = "delete from customer_details where id='$customer_id'";
$delete = mysqli_query($conn, $sql);
if ($delete) {
  echo "<script>window.open('./owner_view_customer.php?del=salesman has been deleted','_self')</script>";
}
?>
