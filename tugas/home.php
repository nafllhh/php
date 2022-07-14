<?php
  require './function.php';
  $laptop = query("SELECT * FROM laptop");
  
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <nav>
      <a href="" class="active">Home</a>
      <a href="">Galeries</a>
      <a href="">Support</a>
    </nav>
    <h1 class="center">Selamat datang</h1>
    <div class="flex">
      <?php foreach( $laptop as $pls ) :?>
      <div class="card">
        <img src="./img/<?= $pls['gambar']; ?> " alt="">
        <br>
        <div class="desc">
          <a class = "head" href="./preview.php?id=<?= $pls['id'] ?>"><?= $pls["nama"] ?></a>              
        </div>
        <button class="bottom">beli</button>
        <br>
      </div>
      <?php endforeach;?>
    </div>
    <div class="space"></div>
    <footer>
      Copyright
    </footer>
  </body>
</html>