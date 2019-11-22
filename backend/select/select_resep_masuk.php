<?php
// include_once '../koneksi.php';
// $host = "localhost";
// $username = "root";
// $pass = "";
// $db = "db_temiang";
//
// $conn = mysqli_connect($host, $username, $pass, $db);

include_once '../koneksi.php';


// $query = "SELECT * FROM tb_pendaftaran where status='Menunggu'";
// $query = "SELECT * from tb_resep_obat  where status='Menunggu'";

$query = "select * from tb_transaksi_berobat inner join tb_resep_obat on tb_transaksi_berobat.id_resep_obat=tb_resep_obat.id_resep_obat inner join tb_pasien on tb_resep_obat.id_pasien=tb_pasien.id_pasien where tb_transaksi_berobat.status_transaksi='Selesai' and tb_resep_obat.status='Menunggu' order by tb_resep_obat.waktu desc";


$hasil = mysqli_query($conn, $query);

$antriresep= 0;

$id_resep_obat = array();
$id_pasien = array();
$id_waktu = array();
$status = array();

if (mysqli_num_rows($hasil) > 0) {

  $antriresep= mysqli_num_rows($hasil);
  while($data = mysqli_fetch_assoc($hasil)){
    array_push($id_resep_obat, $data['$id_resep_obat']);
    array_push($id_pasien, $data['waktu']);
    array_push($status, $data['status']);


  }
}
?>
