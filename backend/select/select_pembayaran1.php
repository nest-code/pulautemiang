<?php
include_once 'koneksi.php';
$query = "select * from tb_transaksi_berobat where status_bayar='Belum Bayar' ";
$hasil = mysqli_query($conn, $query);

$bayar = 0;

$id_transaksi = array();
$tgl_transaksi = array();
$status_bayar = array();
$id_resep_obat = array();
$id_petugas = array();

if (mysqli_num_rows($hasil) > 0) {
    $bayar = mysqli_num_rows($hasil);
    while($data = mysqli_fetch_assoc($hasil)){
        array_push($id_transaksi, $data['id_transaksi']);
        array_push($tgl_transaksi, $data['tgl_transaksi']);
        array_push($status_bayar, $data['$status_bayar']);
        array_push($id_resep_obat, $data['id_resep_obat']);
        array_push($id_petugas, $data['id_petugas']);
    }
}
?>
