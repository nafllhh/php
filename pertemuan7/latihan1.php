<?php
  //superGlobal
  //var milik php
  //merupakan Array associative

  //var_dump($_SERVER);

  //$_GET
  $laptop = [
    
    [
      "nama"=>"Acer Aspire",
      "lebar_layar"=>"18inc",
      "storage"=>"4/500gb",
      "harga"=>"500000",
      "gambar"=>"l1s.png" 
    ],
    [
      "nama"=>"Lenovo idea",
      "lebar_layar"=>"20inc",
      "storage"=>"8/1tb",
      "harga"=>"1500000",
      "gambar"=>"l2s.png"
    ],
    [
      "nama"=>"Asus ROG",
      "lebar_layar"=>"18inc",
      "storage"=>"16/1tb",
      "harga"=>"2000000",
      "gambar"=>"l3.png"

      
    ],
    [
      "nama"=>"Asus ROG lagi",
      "lebar_layar"=>"18inc",
      "storage"=>"16/1tb",
      "harga"=>"2000000",
      "gambar"=>"l4.png" 
    ]
    ];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>
<body>
  <h1>Daftar Produk</h1>
  <?php foreach( $laptop as $produk) :?>
    <li> 
      <a href="./pages/latihan2.php?nama=
      <?= $produk["nama"]; ?> &
       lebar_layar=<?= $produk["lebar_layar"]; ?> &
        storage=<?= $produk["storage"] ?> &
        harga=<?= $produk["harga"] ?> &
        gambar=<?= $produk["gambar"] ?>
       
       "><?= $produk["nama"]; ?></a>
       
       
    </li>
    <?php endforeach;?>






    

    
    
    
  
</body>
</html>