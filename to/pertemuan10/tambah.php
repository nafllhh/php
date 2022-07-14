<?php
//konek
  $dbconn = mysqli_connect("localhost","root","","produk");
if (isset ($_POST["submit"])) {
  // var_dump($_POST);
  $merek = $_POST["merek"];
  $nama = $_POST["nama"];
  $serial_number= $_POST["serial_number"];
  $layar = $_POST["layar"];
  $gambar = $_POST["gambar"];
  $query = "INSERT INTO laptop VALUES (NULL,'$merek','$nama','$serial_number','$layar','$storage','$gambar',DEFAULT)";
  mysqli_query($dbconn,$query);
  // return mysqli_affected_rows($dbconn);

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
  <form action="" method="post">
    <ul type=none>
      <li>
        <label for="merek">Merek</label>
        <input type="text" name="merek" id="merek">
      </li>
      <li>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
      </li>
      <li>
        <label for="serial_number">Serial</label>
        <input type="text" name="serial_number" id="serial_number">
      </li>
      <li>
        <label for="merek">Layar</label>
        <input type="text" name="layar" id="layar">
      </li>
      
      <li>
        <label for="gambar">Gambar</label>
        <input type="text" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">tambahkan</button>
      </li>
    </ul>


  </form>
  
</body>
</html>