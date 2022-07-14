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

function tambah($data){
  global $dbconn;
  //ambil dataa
  $merek = htmlspecialchars($data["merek"]);
  $nama = htmlspecialchars($data["nama"]);
  $serial_number = htmlspecialchars($data["serial_number"]);
  $storage = htmlspecialchars($data["storage"]);
  $layar = htmlspecialchars($data["layar"]);
  $gambar = htmlspecialchars($data["gambar"]);

  //lakuka query
  $query = "INSERT INTO laptop VALUES (NULL,'$merek','$nama', '$serial_number','$layar','$storage','$gambar',DEFAULT)";
  mysqli_query($dbconn,$query); 
  return mysqli_affected_rows($dbconn);
}
function hapus($id){
  global $dbconn;
  mysqli_query($dbconn,"DELETE FROM laptop WHERE id = $id");
  return mysqli_affected_rows($dbconn);  
}

?>