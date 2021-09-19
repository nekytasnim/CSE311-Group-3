<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/OwnerStyle.css">
    <title>Home</title>
  </head>
  <body>
    <div class="topnav">
      <a href="./manager_view_salesman.php">Salesman Details</a>
      <a href="./manager_view_order.php">Orders</a>
      <form action="./manager_logout.php" method="post">
        <input type="submit" class="buttonDesign" name="logout" value="Log Out">
      </form>
   </div><br><br>
   <h1>Products</h1>
    <table id="products">
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th></th>
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
        <td> <form action="./manager_update.php?id=<?=$product_id;?>" method="post">
          <input type="submit" class="buttonDesign" name="ins" value="Update">
        </form> </td>
      </tr>
      <?php
      }
      ?>
     </tbody>
     </table><br><br>
  </body>
</html>
