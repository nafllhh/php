<?php 

  // koneksi ke database
  // membutuhkan driver/extensi msqli

  // Hostname | Username | Password | Database
  $dbconn = mysqli_connect("localhost","root","","produk");

 
  // ambil data dari tabel laptop / query data laptop
  $result = mysqli_query($dbconn, "SELECT * FROM laptop");
  //var_dump($result);
    
  // ambil data (fetch) laptop dari object result | ada 4 cara
  // mysqli_fetch_row() //mengembalikan array numerik $prod[1]
  // mysqli_fetch_assoc() //mengembalikan array associative $prod["nama_field"]
  // mysqli_fetch_array() //mengembalikan array keduanya | dengan catatan data di memory menjadi double
  // mysqli_fetch_object()
 

  //mengambil data menggunakan while
  // while( $prod = mysqli_fetch_assoc($result) ){
  //   var_dump($prod);
  // }

  


    

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
    <?php while( $row = mysqli_fetch_assoc($result)) : ?>
    
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
    <?php  endwhile;?>

  </table>

  
</body>
</html>