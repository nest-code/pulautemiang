<?php
include 'koneksi.php';

$id_detail_rekam_medis = $_POST['id_detail_rekam_medis'];
$no_rm = $_POST['no_rm'];
$subjektif = $_POST['subjektif'];
$objektif = $_POST['objektif'];
$assement = $_POST['assement'];
$plant = $_POST['plant'];

// $id_akun = $_POST['id_akun'];


$pasien =mysqli_query($conn,"insert into tb_detail_rekam_medis values
('$id_detail_rekam_medis','$no_rm','$subjektif','$objektif','$assement','$plant')") ;
// eksekusi query dengan mysqli

  ?>
