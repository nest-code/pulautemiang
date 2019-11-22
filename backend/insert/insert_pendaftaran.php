<?php
include 'koneksi.php';

// $id_rawat = $_POST['id_rawat'];
// $tanggal = $_POST['tanggal'];
// $status = $_POST['status'];
// $keterangan = $_POST['keterangan'];
// $id_pasien = $_POST['id_pasien'];
// $id_karyawan = $_POST['id_karyawan'];
// $id_akun = $_POST['id_akun'];

$tanggal = date();
$status = "Menunggu";
$id_poli = $_POST['id_jenis_poli'];
$id_pasien = $_POST['id_pasien'];


$pasien =mysqli_query($conn,"insert into tb_pendaftaran values
('$id_rawat','$tanggal','$biaya','$status','$keterangan','$id_pasien''$id_karyawan')") ;
// eksekusi query dengan mysqli

  ?>
