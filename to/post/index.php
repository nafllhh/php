<?php
  
 require './connection.php';
 //querry data
 $prd = query("SELECT * FROM laptop");
 //$test = mysqli_query($dbconn,"SELECT nama FROM laptop");


//ambil data laptop dari object $result

// while($lapt = mysqli_fetch_assoc($result)){

//   var_dump($lapt["nama"]);
// }


  //buat table
  //koneksi
  //querry data
  //ambil / tampilkan
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table lagi</title>
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
      <th>Times</th>
    </tr>    

    <?php foreach($prd as $row): ?>
      
  <tr>
    <td><?= $row["id"] ?></td>
    <td>Ubah | Hapus</td>
    <td>
      <img src="./img/<?= $row["gambar"] ?>" width="50px">
    </td>
    <td><?= $row["merek"] ?></td>
    <td><?= $row["nama"] ?></td>
    <td><?= $row["serial_number"] ?></td>
    <td><?= $row["storage"] ?></td>
    <td><?= $row["tms"] ?></td>

  </tr>
  <?php endforeach ?>
  </table>

</body>
</html>
