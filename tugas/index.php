<?php 
  if(isset($_POST["submit"])){
  
    if ($_POST["username"]=="admin" && $_POST["password"]=="123") {
      header("Location: home.php");
      
    }else{
      $error = true;
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style_login.css">
  </head>
  <body>
    <h1>login admin</h1>
    <?php if(isset($error)): ?>
    <p style="color: red; font-style:italic;">Login gagal!</p>
    <?php endif ?>
    <ul>
      <form action="" method="post">
        <li>
          <label for="uname">Username : </label>
          <input type="text" name="username" id="uname">
        </li>
        <li>
          <label for="pass">Password :  </label>
          <input type="password" name="password" id="pass">
        </li>
        <li>
          <button type="submit" name="submit">Login</button>
        </li>
      </form>
    </ul>
  </body>
</html>