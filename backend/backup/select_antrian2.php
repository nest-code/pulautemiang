<?php
// include_once '../koneksi.php';
$host = "localhost";
$username = "root";
$pass = "";
$db = "db_temiang";

$conn = mysqli_connect($host, $username, $pass, $db);

$query = "SELECT * FROM tb_pendaftaran where id_jenis_poli='7' and tb_pendaftaran.status='Menunggu'";
$hasil = mysqli_query($conn, $query);

$antri2= 0;

$id_pendaftaran = array();
$tanggal = array();
$id_jenis_poli = array();
$id_pasien = array();
$id_petugas = array();
$no_antrian = array();




if (mysqli_num_rows($hasil) > 0) {

  $antri2= mysqli_num_rows($hasil);
  while($data = mysqli_fetch_assoc($hasil)){
    array_push($id_pendaftaran, $data['id_pendaftaran']);
    array_push($tanggal, $data['tanggal']);
    array_push($id_jenis_poli, $data['id_jenis_poli']);
    array_push($id_pasien, $data['id_pasien']);
    array_push($id_petugas, $data['id_petugas']);
    array_push($no_antrian, $data['no_antrian']);


  }
}
?>
