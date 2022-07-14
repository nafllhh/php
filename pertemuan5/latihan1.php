<?php 
  //element pada array boleh berbeda2 tipe datas
  //array
  //key and value
  //cara lama
  $hari = array("Senin","Selasa","Rabu");
  //cara baru
  $bulan = ["January","February","March"];
  $arr1 =[123,"tulisan", false];
  echo $hari;

  //menampilkan array
  //var_dumb() / print_r()
//   var_dump($hari);
//   echo "<br>";
//   print_r($bulan);
// echo "<br>";

  //menampilkan 1 element

  // echo $arr1[0];
  // echo "<br>";
  // echo $bulan[1];
  var_dump($hari);//3
  $hari[] = "Kamis"; //+1
  echo "<br>";
  var_dump($hari);//4



  //menambahkan elemen baru pada array
?>