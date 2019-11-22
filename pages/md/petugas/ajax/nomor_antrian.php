<?php
// $host = "localhost";
// $username = "root";
// $pass = "";
// $db = "db_temiang";
// $conn = mysqli_connect($host, $username, $pass, $db);

include_once '../../../../backend/koneksi.php';



if (isset($_GET["jenis_poli"])) {
  $jenis_poli = $_GET["jenis_poli"];
  $query = mysqli_query($conn, "select * from tb_jenis_poli where id_jenis_poli='".$jenis_poli."'");
  $queryNumber = mysqli_query($conn, "select * from tb_antrian_increment where id_jenis_poli='".$jenis_poli."'");
  $number = mysqli_num_rows($queryNumber) + 1;
  if (strlen($number) == 1) {
    $number = '00'.$number;
  } else if (strlen($number) == 2) {
    $number = '0'.$number;
  }
  $result = mysqli_fetch_assoc($query);
  echo $result['inisial_jenis']."-".$number;
}
?>
