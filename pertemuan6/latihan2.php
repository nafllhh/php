<?php 
  // $mahasiswa = [
  //   ["Naufal ha","042323234","naufalha7@gmail.com","Teknik Informatika"],
  //   ["Actor","042323234","naufalha7@gmail.com","Teknik Informatika"],
  //   ]

  //associative
  // key -nya adalah string yang kita buat sendiri
  $mahasiswa = [
    [
    "nama" => "Naufal ha",
    "NRP" => "12403298",
    "email" => "nfl@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "user.jpg"

    ],
    [
      "nama" => "Actor",
      "NRP" => "13057304",
      "email" => "Actor@gmail.com",
      "jurusan" => "Teknik Informasi",
      "tugas" => [90,80,100],
      "gambar" => "user2.jpg"

      ]
  ];

  //cara menampilkan
  // echo $mahasiswa[0]["nama"];
  // echo "<br>";
  // echo $mahasiswa[1]["nama"];
  // echo "<br>";
  // //mengambil nilai tugas di array tugas
  // echo $mahasiswa[1]["tugas"][1]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    img {
      width: 150px;

    }

      </style>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs ) : ?>
  <ul>
    <li>
      <img src="img/<?php echo $mhs['gambar']?>">
   </li>
      <li>Nama : <?= $mhs["nama"] ?> </li>
      <li>NRP : <?= $mhs["NRP"] ?> </li>
      <li>Email : <?= $mhs["email"] ?> </li>
      <li>Jurusan : <?= $mhs["jurusan"] ?> </li>
    </ul>
   
  <?php endforeach ?>
    
</body>
</html>