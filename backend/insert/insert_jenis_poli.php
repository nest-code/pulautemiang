<?php
include 'koneksi.php';

$id_jenis_poli = $_POST['id_jenis_poli'];
$nama_jenis = $_POST['nama_jenis'];



// $id_akun = $_POST['id_akun'];


$pasien =mysqli_query($conn,"insert into tb_jenis_poli values
('$id_jenis_poli','$nama_jenis')") ;
// eksekusi query dengan mysqli

  ?>
