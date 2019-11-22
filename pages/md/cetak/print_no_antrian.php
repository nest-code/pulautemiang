<?php
// $host = "localhost";
// $username = "root";
// $pass = "";
// $db = "db_temiang";
//
// 	$conn = mysqli_connect($host, $username, $pass, $db);
// 	if(!$conn){
// 		die("Connection failed: " . mysqli_connect_error());
// 		echo "GAGAL";
// 	}

	include_once '../../../backend/koneksi.php';
// $id_pendaftaran = $_GET['id_pendaftaran'];
$nik = $_GET['nik'];

?>

<?php

// $sql = "SELECT * FROM tb_pendaftaran inner join tb_jenis_poli on tb_pendaftaran.id_jenis_poli=tb_jenis_poli.id_jenis_poli where tb_pendaftaran.id_pendaftaran = $id_pendaftaran";
// $sql = "SELECT * FROM tb_pasien inner join tb_pendaftaran on tb_pasien.id_pasien=tb_pendaftaran.id_pasien inner join tb_jenis_poli on tb_pendaftaran.id_jenis_poli=tb_jenis_poli.id_jenis_poli where tb_pendaftaran.id_pasien = $id_pasien" ;
$sql = "SELECT * FROM tb_pasien inner join tb_pendaftaran on tb_pasien.nik=tb_pendaftaran.nik inner join tb_jenis_poli on tb_pendaftaran.id_jenis_poli=tb_jenis_poli.id_jenis_poli  where tb_pendaftaran.nik = $nik"  ;


// $sql = "SELECT * FROM tb_pasien inner join tb_rekam_medis on tb_pasien.id_pasien=tb_rekam_medis.id_pasien where tb_pasien.id_pasien = $id_pasien";

$run=mysqli_query($conn,$sql);
$hasil = mysqli_fetch_assoc($run);
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Cetak No Antrian | Puskesmas Pulau Temiang</title>
<style>

img{
	width: 200px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

h6{
	  font-size: 8px;
		  font-family: arial;

}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<!--
<h2 style="text-align:center">User Profile Card</h2> -->
<br><br>

<div class="card">
	<div class="">
	<br>
	<h1>Antrian Poli</h1>
	<h4 >Poli <?php echo $hasil['nama_jenis']; ?></h4>
	<br><br>
	<h1><?php echo $hasil['no_antrian']; ?></h1>
	  <?php   ini_set('date.timezone', 'Asia/Jakarta'); ?>
	<br><br>
	  Waktu : <?php echo date('Y-m-d H:i:s'); ?><br>
  </div>
  <p><button>Puskesmas Pulau Temiang</button></p>
</div>

</body>
</html>
<br>

<div align="center">
	<a href="/pulautemiang/index.php?m=petugas/petugas_antrian_beranda">No Antrian Poli</a>
	<!-- <button type="submit" class="btn btn-primary"        onclick="window.location.href='/pulautemiang/index.php?m=petugas/petugas_antrian_beranda'"  title="Data Pasien"><i class="fa fa-table" aria-hidden="true"></i> Data Pasien</button> -->

</div>

<script type="text/javascript">
  window.print();
</script>
