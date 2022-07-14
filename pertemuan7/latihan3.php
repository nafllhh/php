<?php 
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST</title>
</head>
<body>
  <!-- action="fileYangDituju.php" method="post/get"
      jika action kosong, data akan dikirim kan ke halaman ini sendiri
      get: datanya ditampilkan di URL
      post: data diproses di belakang layar 
  -->

  <!-- jika $_POST["nama"] dimasukan di form maka tampilkan { code.. } -->
  <?php if (isset($_POST["nama"])):?>
    <h1>Hai selamat datang <?= $_POST["nama"] ?></h1>
 <?php  endif ?>
  
  <form action="" method="post">
    Masukan nama:
  <input type="text" name="nama">
  <br>
  <button type="submit" name="submit">Kirim</button>
  </form>
</body>
</html>