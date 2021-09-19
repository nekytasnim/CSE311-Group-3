<?php
include("connection.php");
$salesman_id = $_GET['id'];
$sql = "delete from salesman_details where id='$salesman_id'";
$delete = mysqli_query($conn, $sql);
if ($delete) {
  echo "<script>window.open('./owner_view_salesman.php?del=salesman has been deleted','_self')</script>";
}
?>
