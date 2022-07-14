<?php 
  require './function.php';
  $var = $_GET['id'] ; 
  $laptop = query("SELECT * FROM laptop where id = $var");
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prev</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <nav>
      <a href="home.php" class="active">back</a>
      <a href="">Galeries</a>
      <a href="">Support</a>
    </nav>
    <!-- <h1 class="center">Produk</h1> -->
    <?php foreach ($laptop as $row) : ?>
    <img class="preview" src="./img/<?= $row['gambar']; ?>">
    <div class="deskripsi">
      <span class="head"><?= $row['nama']; ?> </span><br>
      &nbsp;&nbsp;Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque similique necessitatibus explicabo maxime. Sit rerum vero distinctio quo inventore at animi voluptates! Nostrum, ipsa corporis numquam corrupti minima laudantium dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat officia quibusdam minima voluptate quam placeat numquam doloribus, quaerat minus nisi voluptates enim atque nostrum harum blanditiis itaque vitae dolore nesciunt.
      <br><br>
      <div class="spesifik">
        <span class="head"> Spek </span><br>
        <?= $row['layar']; ?> <br>
        <?= $row['storage']; ?> <br>
        <?= $row['merek']; ?> <br>
      </div>
      <button class="buy">BUY</button> 
    </div>
    <?php endforeach ?>
    <div class="clear"> </div>
    <div class="container">
    </div>
    <br>
  </body>
</html>