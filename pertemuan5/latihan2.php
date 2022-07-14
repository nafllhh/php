<?php 
  $angka = ["Start",32,"njerrr wkwkw",12,20,2,3,"End"];

  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.flex{
          display: flex;
          flex-direction: row;
          flex-wrap: wrap;

        }
        .flex > div:not(.clear){
          width: fit-content;
          padding: 40px;
          height: fit-content;
          background-color: salmon;
          text-align: center;
          line-height: 50px;
          margin:5px;
          
        }
        .clear {
          clear: both;
        }
    </style>
  </head>
  <body>
    <div class="flex">
    <?php for($i=0;$i<count($angka);$i++){ ?>
        <div><?= $angka[$i]?></div>

    <?php } ?>
<br>
    <div class="clear"></div>
    <?php foreach ($angka as $a ) { ?>
      <div class="flex"> <?php echo $a; ?> </div>
     
    <?php }?>

    <?php foreach ($angka as $a) :  ?>
        <div> <?php echo $a ?> </div>
    
      <?php endforeach ?>

    </div>
   
    
  </body>
  </html>