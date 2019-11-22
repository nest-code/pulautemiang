<?php
include 'koneksi.php';

$id_transaksi = $_POST['id_transaksi'];
$tgl_transaksi = $_POST['tgl_transaksi'];
$id_pasien = $_POST['id_pasien'];
$status_periksa = $_POST['status_periksa'];
$status_bayar = $_POST['status_bayar'];
$no_rm = $_POST['no_rm'];




$pasien =mysqli_query($conn,"insert into tb_transaksi values
('$id_transaksi','$tgl_transaksi','$id_pasien','$status_periksa','$status_bayar','$no_rm')") ;
// eksekusi query dengan mysqli

  ?>
