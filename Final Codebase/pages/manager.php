<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/OwnerStyle.css">
    <title>Manager</title>
  </head>
  <body>
    <div class="main-container">
      <h1>Welcome!</h1>
      <form action="./manager_login.php" method="post">
        Username:    <input type="text" class="tableDesign" name="uname" placeholder="Ex: nekytasnim" required><br><br>
        Password:    <input type="password" class="tableDesign" name="pass" placeholder="password can't be less than 6 characters" required><br><br>
        <input type="submit" class="buttonDesign" name="submit" value="Log in">
      </form>
    </div>
  </body>
</html>
