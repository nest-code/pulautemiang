<?php
// include_once '../koneksi.php';
// $host = "localhost";
// $username = "root";
// $pass = "";
// $db = "db_temiang";
//
// $conn = mysqli_connect($host, $username, $pass, $db);

include_once '../koneksi.php';


$query = "SELECT * from tb_resep_obat  where status='Proses'";

$hasil = mysqli_query($conn, $query);

$resep_proses= 0;

$id_resep_obat = array();
$id_pasien = array();
$id_waktu = array();
$status = array();

if (mysqli_num_rows($hasil) > 0) {

  $resep_proses= mysqli_num_rows($hasil);
  while($data = mysqli_fetch_assoc($hasil)){
    array_push($id_resep_obat, $data['$id_resep_obat']);
    array_push($id_pasien, $data['waktu']);
    array_push($status, $data['status']);


  }
}
?>
