<?php 
  // echo date("d"."-"."m"."-"."y");
  // echo "<br>";
  // echo date("d-m-y");
  //diskonn
  //60*60*24 = nambah 1 hari;
  echo "now is ".date('d-M-Y')." the discount in until "
  .date("l-M-Y", time()+60*60*24*2);
  echo "<br><br>";
  $diss = date("d-M-Y", time()+86400);
  if ($diss > date("d-M-Y", time()+86400)){
    echo "<br> diskon abiss";
  }else{
    echo "<br>diskon berlangsung";
    //harga -=10%;
  }
    
?>