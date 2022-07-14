<?php 
 // Hostname | Username | Password | Database
  $dbconn = mysqli_connect("localhost","root","","produk");

  function query($query) {
    global $dbconn;
    
    $result = mysqli_query($dbconn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }


?>