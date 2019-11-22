<?php
// $host = "localhost";
// $username = "root";
// $pass = "";
// $db = "db_temiang";
// $conn = mysqli_connect($host, $username, $pass, $db);
include_once '../koneksi.php';



ini_set('date.timezone', 'Asia/Jakarta');
  $tanggal=date('Y-m-d');
// $tanggal=date('Y-m-d');



$query1 = mysqli_query($conn, " SELECT COUNT(id_pendaftaran) as jumlah FROM tb_pendaftaran where status in ('Menunggu','Proses') and id_jenis_poli='1' and tanggal  like '%$tanggal%'");
$data1 = mysqli_fetch_array($query1);
$jum_umum=$data1['jumlah'];

$query2 = mysqli_query($conn, " SELECT COUNT(id_pendaftaran) as jumlah FROM tb_pendaftaran where status in ('Menunggu','Proses') and id_jenis_poli='2' and tanggal  like '%$tanggal%'");
$data2 = mysqli_fetch_array($query2);
$jum_kb=$data2['jumlah'];

$query3 = mysqli_query($conn, " SELECT COUNT(id_pendaftaran) as jumlah FROM tb_pendaftaran where status in ('Menunggu','Proses') and id_jenis_poli='4' and tanggal  like '%$tanggal%'");
$data3 = mysqli_fetch_array($query3);
$jum_igd=$data3['jumlah'];

$query4 = mysqli_query($conn, " SELECT COUNT(id_pendaftaran) as jumlah FROM tb_pendaftaran where status in ('Menunggu','Proses') and id_jenis_poli='5' and tanggal  like '%$tanggal%'");
$data4 = mysqli_fetch_array($query4);
$jum_dots=$data4['jumlah'];

$query5 = mysqli_query($conn, " SELECT COUNT(id_pendaftaran) as jumlah FROM tb_pendaftaran where status in ('Menunggu','Proses') and id_jenis_poli='6' and tanggal  like '%$tanggal%'");
$data5 = mysqli_fetch_array($query5);
$jum_gigi=$data5['jumlah'];

$query6 = mysqli_query($conn, " SELECT COUNT(id_pendaftaran) as jumlah FROM tb_pendaftaran where status in ('Menunggu','Proses') and id_jenis_poli='7' and tanggal  like '%$tanggal%'");
$data6 = mysqli_fetch_array($query6);
$jum_anak=$data6['jumlah'];





 ?>
