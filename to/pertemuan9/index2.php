<?php 

  require './connection.php';
  $whehe =  query("SELECT * FROM laptop ");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap');
    html,
    body{
      font-family: 'Inter', sans-serif;

    }
  </style>
</head>
<body>
  <h1>Daftar Produk</h1>
  

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Merek</th>
      <th>Nama</th>
      <th>Serial</th>
      <th>Storage</th>  
      <th>Timestamp</th>
      
    </tr>
    <?php $i = 1;  ?>
    <?php foreach ($whehe as $row): ?>
    
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
      </td>
      <td><img src="./img/l1s.png" width="50px"></td>
      <td><?= $row["merek"]; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["serial_number"]; ?></td>
      <td><?= $row["storage"]; ?></td>
      <td><?= $row["tms"]; ?></td>


    </tr>
    <?php $i++ ?>
    <?php  endforeach;?>

  </table>

  
</body>
</html>