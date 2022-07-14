<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan array</title>
  <style>
    .kotak {
      width:  40px;
      height: 40px;
      background-color:sandybrown;
      text-align: center;
      line-height: 30px;
      margin: 3px;
      float: left;
      transition: 0.5s;
      border-radius: 5px;

    }
    .kotak:hover {
      transform: rotate(360deg);
      border-radius: 50%;
      background-color: salmon;
    }
    .clear {
    clear: both;
    }
  </style>
</head>
<body>
  <?php 
  $angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
    
  ?>


    <?php foreach ($angka as $a) : ?>
      <?php foreach ($a as $b) : ?>
        <div class="kotak"> <?= $b ?></div>
    <?php endforeach ?>
  <?php endforeach ?>
  
<div class="clear"></div>



</body>
</html>