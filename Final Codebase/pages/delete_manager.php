<?php
include("connection.php");
$manager_id = $_GET['id'];
$sql = "delete from manager_details where manager_id='$manager_id'";
$delete = mysqli_query($conn, $sql);
if ($delete) {
  echo "<script>window.open('./view_manager.php?del=manager has been deleted','_self')</script>";
}
?>
