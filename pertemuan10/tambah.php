<?php 
require './functions.php';

  if( isset($_POST["submit"])){
    // cek data apakah sudah ditambahkan atau belum
    if (tambah($_POST) > 0 ){
      echo "  <script>
      alert('berhasil!');
      document.location.href = 'index.php'

      
      </script> ;";
    } else {
      echo "
      <script>
      alert('gagal!');
      document.location.href = 'tambah.php'

      
      </script> ;
      
      ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data </title>
</head>
<body>
  <h1>Tambah data Produk</h1>
    <form action="" method="post">
      <ul type=none>
        <li>
          <label for="merek">Merek : </label>
          <input type="text" name="merek" id="merek">
        </li>
        <li>
          <label for="nama">Nama : </label>
          <input type="text" name="nama" id="nama">
        </li>
        <li>
          <label for="serial_number">Serial : </label>
          <input type="text" name="serial_number" id="serial_number required">
        </li>
        <li>
          <label for="storage">Storage : </label>
          <input type="text" name="storage" id="storage">
        </li>
        <li>
          <label for="layar">Layar : </label>
          <input type="text" name="layar" id="layar">
        </li>
        <li>
          <label for="gambar">Gambar : </label>
          <input type="text" name="gambar" id="gambar">
        <li>
          <button type="submit" name="submit">Tambah Data</button>
        </li>

      </ul>


    </form>
  
</body>
</html>