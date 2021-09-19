<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/OwnerStyle.css">
    <title></title>
  </head>
  <body>
    <div class="main-container">
      <form action="./add_customer.php" method="post">
        Fist Name: <input type="text" class="tableDesign" name="fname"><br><br>
        Last Name: <input type="text" class="tableDesign" name="lname"><br><br>
        Email:     <input type="email" class="tableDesign" name="email"><br><br>
        Phone:     <input type="text" class="tableDesign" name="phone"><br><br>
        Address:   <input type="text" class="tableDesign" name="address"><br><br><br>
        <input type="submit" class="buttonDesign" name="insert" value="Add">
      </form>
    </div>
  </body>
</html>
