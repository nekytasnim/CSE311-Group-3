<?php
include("connection.php");
$order_id = $_GET['id'];
$sql = "delete from orders where id='$order_id'";
$delete = mysqli_query($conn, $sql);
if ($delete) {
  echo "<script>window.open('./owner_view_order.php?del=order has been deleted','_self')</script>";
}
?>
