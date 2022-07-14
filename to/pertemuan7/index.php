<?php 
  $mahasiswa =  [
    [
      "nama" => "Naufal hubab Abdillah",
      "nim" => "03725039",
      "lulusan" => "SMKN 1 MAJA",
      "jurusan" => "RPL"
    ],
    [
      "nama" => "nope",
      "nim" => "0403935",
      "lulusan" => "SMKN 1 MAJA",
      "jurusan" => "TKJ 3"
    ],
    [
      "nama" => "sam",
      "nim" => "3827405",
      "lulusan" => "SMKN 1 MAJA",
      "jurusan" => "RPL"
    ]

  ]
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
  <h1>Daftar Mahasiswa</h1>
  <?php foreach($mahasiswa as $mhs):?>
    <ul>
      <li> <a href="prev.php?nama= <?= $mhs["nama"] ?> & nim= <?= $mhs["nim"] ?> & lulusan= <?= $mhs["lulusan"] ?> & jurusan= <?= $mhs["jurusan"] ?>"><?= $mhs["nama"]; ?></a> </li>
    </ul>

    <?php endforeach ?>
  
</body>
</html>