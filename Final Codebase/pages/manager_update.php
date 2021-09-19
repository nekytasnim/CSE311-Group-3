<?php
include("connection.php");
$product_id = $_GET['id'];
$sql = "select * from products where product_id='$product_id'";
$get_product = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($get_product);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/OwnerStyle.css">
    <title></title>
  </head>
  <body>
    <div class="main-container">
      <form action="./manager_update_save.php?id=<?=$row['product_id'];?>" method="post">
        Name: <input type="text" class="tableDesign" name="pname" value="<?=$row['Name'];?>"><br><br>
        Price: <input type="text" class="tableDesign" name="pprice" value="<?=$row['Price'];?>"><br><br><br>
        <input type="submit" class="buttonDesign" name="update" value="Update">
    </div>
    </form>
  </body>
</html>
