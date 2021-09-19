<?php
session_start();
if(!isset($_SESSION['email'])){
  header("Location: ./login.html");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/CustomerStyle.css">
    <title>Home</title>
  </head>
  <body>
    <div class="topnav">
      Flower Shop
      <div class="dropdown">
        <button class="dropbtn">My Account</button>
        <div class="dropdown-content">
          <a href="#">Profile</a>
          <a href="#">Settings</a>
          <a href="#">Orders</a>
        </div>
      </div>
    </div>
    <br>
    <img src="../assets/img/image.jpg" height="435px" width="435px" alt="flower">
    <img src="../assets/img/pot.jpg" height="435px" width="435px" alt="flower">
    <img src="../assets/img/Christmas-class.jpg" height="435px" width="435px" alt="flower">
    <table id="products">
      <tr>
        <th>Name</th>
        <th>Price</th>
      </tr>
      <tbody id="tmp">
        <?php
        include('./connection.php');
        $view_users_query = "select * from products";
        $run = mysqli_query( $conn, $view_users_query);
        while ($row = mysqli_fetch_array($run)) {
            $product_id = $row[0];
            $product_name = $row[1];
            $product_price = $row[2];
        ?>
      <tr>
        <td><?=$product_name;?></td>
        <td><?=$product_price;?></td>
        <td><a href="./add_amount.php">Add to Cart</a></td>
      </tr>
      <?php
      }
      ?>
     </tbody>
     </table>
  </body>
</html>
