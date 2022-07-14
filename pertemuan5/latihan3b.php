<?php 
 $mahasiswa = [
  ["Naufal Abdillah","01013412","Teknik Informatika","Email"],
  ["Actor","3564758","Teknik Informasi","Email"],
];;



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
       <li>Nama: <?= $mhs[0] ?></li>
       <li>NRP: <?= $mhs[1] ?></li>
       <li>Jurusan: <?= $mhs[2] ?></li>
       <li>Email: <?= $mhs[3] ?></li>
    </ul>
      
    <?php endforeach?>

  
</body>
</html>