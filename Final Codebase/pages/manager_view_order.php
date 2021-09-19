<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/OwnerStyle.css">
    <title></title>
  </head>
  <body>
    <div class="topnav">
      <a href="./manager_view_salesman.php">Salesman Details</a>
      <a href="#">Orders</a>
      <form action="./manager_logout.php" method="post">
        <input type="submit" class="buttonDesign" name="logout" value="Log Out">
      </form>
    </div><br><br>
    <h1>Orders</h1>
    <table id="products">
      <tr>
        <th>Products</th>
        <th>Amount</th>
        <th>Customer Name</th>
        <th>Customer Phone</th>
        <th>Customer Address</th>
      </tr>
      <tbody id="tmp">
        <?php
        include('./connection.php');
        $view_orders_query = "select * from orders";
        $run = mysqli_query( $conn, $view_orders_query);
        while ($row = mysqli_fetch_array($run)) {
            $product_name = $row[6];
            $order_amount = $row[7];
            $customer_name = $row[3];
            $customer_phone=$row[4];
            $customer_address=$row[5];
        ?>
      <tr>
        <td><?=$product_name;?></td>
        <td><?=$order_amount;?></td>
        <td><?=$customer_name;?></td>
        <td><?=$customer_phone;?></td>
        <td><?=$customer_address;?></td>
      </tr>
      <?php
      }
      ?>
     </tbody>
     </table><br><br>
  </body>
</html>
