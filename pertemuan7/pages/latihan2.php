<?php 
//cek apakah tidak ada data di $_GET
//if(jika) !(tidak) isset(dibuat?)
  if( !isset($_GET["nama"] ) ||
   !isset($_GET["lebar_layar"]) ||
   !isset($_GET["storage"]) ||
   !isset($_GET["harga"]) ||
   !isset($_GET["gambar"])
   ){
    //redirect
    header("Location: ../latihan1.php");
    exit;

  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Detail Produk</h1>
  <ul>

    <li><img src="../img/<?= $_GET['gambar'] ?>" alt=""></li>
    <li><?= $_GET["nama"] ?></li>
    <li><?= $_GET["lebar_layar"] ?></li>
    <li><?= $_GET["storage"] ?></li>
    <li><?= $_GET["harga"] ?></li>

    
    
  </ul>
  <a href="../latihan1.php">Back</a>
  
</body>
</html>