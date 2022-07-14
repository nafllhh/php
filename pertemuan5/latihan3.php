<?php 
  $mahasiswa = ["Naufal Abdillah","01013412","Teknik Informatika","Email"];
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <h4>Menggunakan Foreach</h4>
      <?php foreach ($mahasiswa as $mhs) : ?>
        <li><?= $mhs  ?></li>

      <?php endforeach ?>
  </ul>
        
        
        <ul>
          <h4>Memanggil satu per satu</h4>
          <li> <?= $mahasiswa[0]  ?> </li>
          <li> <?= $mahasiswa[1]  ?> </li>
          <li> <?= $mahasiswa[2]  ?> </li>
          <li> <?= $mahasiswa[3]  ?> </li>
        </ul>
  
</body>
</html>