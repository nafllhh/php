<?php 
  //koneksi
  $dbconn = mysqli_connect("localhost","root","","produk");

  function query($printq){
    global $dbconn;
    $result = mysqli_query($dbconn, $printq);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
      $rows[] = $row;

    }
    return $rows;

  }


?>