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
</head>
<body>
  <a href="./tambah.php">Tambah data</a>
<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>NO</th>
    <th>aksi</th>
    
    <th>Gambar</th>
    <th>Merek</th>
    <th>Nama</th>
    <th>Serial</th>
    <th>layar</th>
    <th>Storage</th>
    <th>Times</th>
  </tr>
  <?php $i=1; ?>
  <?php foreach( $laptop as $prd ) :?>
  

  <tr>
    <td><?= $i;  ?></td>
    <td>
      <a href="">ubah</a> |
      <a href="./hapus.php?id=<?= $prd['id']; ?>">hapus</a>
    </td>
    
    <td>
      <img src="./img/<?= $prd["gambar"] ?>" width="50px">
    </td>
    <td><?= $prd["merek"] ?></td>
    <td><?= $prd["nama"] ?></td>
    <td><?= $prd["serial_number"] ?></td>
    <td><?= $prd["layar"] ?></td>
    <td><?= $prd["storage"] ?></td>
    
    <td><?= $prd["tms"] ?></td>
    
  </tr>
  <?php $i++; ?>
  <?php endforeach;?>
 
  
</table>
  
  
</body>
</html>
