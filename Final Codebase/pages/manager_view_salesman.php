<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/OwnerStyle.css">
    <title></title>
  </head>
  <body>
    <div class="topnav">
      <a href="#">Salesman Details</a>
      <a href="./manager_view_order.php">Orders</a>
      <form action="./manager_logout.php" method="post">
        <input type="submit" class="buttonDesign" name="logout" value="Log Out">
      </form>
    </div><br><br>
    <h1>Salesmen</h1>
    <table id="products">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>
      <tbody id="tmp">
        <?php
        include('./connection.php');
        $view_salesman_query = "select * from salesman_details";
        $run = mysqli_query( $conn, $view_salesman_query);
        while ($row = mysqli_fetch_array($run)) {
            $salesman_id = $row[0];
            $salesman_name = $row[1];
            $salesman_email = $row[2];
            $salesman_phone = $row[3];
            $salesman_address = $row[4];
        ?>
      <tr>
        <td><?=$salesman_name;?></td>
        <td><?=$salesman_email;?></td>
        <td><?=$salesman_phone;?></td>
        <td><?=$salesman_address;?></td>
      </tr>
      <?php
      }
      ?>
     </tbody>
     </table><br><br>
     <form action="./manager_add_salesman_form.php" method="get">
       <input type="submit" class="buttonDesign" name="ins" value="Add">
     </form>
  </body>
</html>
  </body>
</html>
