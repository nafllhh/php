<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Detail Mahasiswa</h1>
  <ul>
    <li><?= $_GET["nama"] ?></li>
    <li><?= $_GET["nim"] ?></li>
    <li><?= $_GET["lulusan"] ?></li>
    <li><?= $_GET["jurusan"] ?></li>
  </ul>
  <a href="./index.php">Back</a>
</body>
</html>