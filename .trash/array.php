<?php
  $identitas = array ("nama","kelas","nama_sekolah");
  $identitas[0]="Naufal";
  $identitas[1]="11 RPL 2 ";
  $identitas[2]="SMKN 1 MAJA ";

  //element
  print_r($identitas);
  echo "<br><br>";

  //print all array 
  for ($i=0;$i<=2;$i++){
    echo $identitas[$i];
    echo "<br>";
  }
  echo "<br><br>";

  echo "Perkenalkan nama saya $identitas[0] dari kelas $identitas[1] $identitas[2] ";



?> 