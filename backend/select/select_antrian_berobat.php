<?php
// $host = "localhost";
// $username = "root";
// $pass = "";
// $db = "db_temiang";
// $conn = mysqli_connect($host, $username, $pass, $db);

include_once '../koneksi.php';


$query = mysqli_query($conn, " SELECT COUNT(id_pendaftaran) as jumlah FROM tb_pendaftaran where status='Menunggu'");
$data = mysqli_fetch_array($query);
$jum_menunggu=$data['jumlah'];




 ?>
