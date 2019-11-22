<?php
include 'koneksi.php';

$kode_resep= $_POST['kode_resep'];
$no_rm = $_POST['no_rm'];
$id_obat = $_POST['id_obat'];
$jumlah = $_POST['jumlah'];
$total = $_POST['total'];
$status = $_POST['status'];


$pasien =mysqli_query($conn,"insert into tb_resep_obat values
('$kode_resep','$no_rm','$id_obat','$jumlah','$total','$status')") ;
// eksekusi query dengan mysqli

  ?>
