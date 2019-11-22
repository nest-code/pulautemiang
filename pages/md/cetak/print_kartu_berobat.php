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

$id_pasien = $_GET['nik'];
?>

<?php
// $sql = "SELECT * FROM tb_pasien where id_pasien = $id_pasien";
$sql = "SELECT * FROM tb_pasien inner join tb_rekam_medis on tb_rekam_medis.nik=tb_pasien.nik where tb_pasien.nik = $id_pasien";

// $sql = "SELECT * FROM tb_pasien inner join tb_rekam_medis on tb_pasien.id_pasien=tb_rekam_medis.id_pasien where tb_pasien.id_pasien = $id_pasien";

$run=mysqli_query($conn,$sql);
$hasil = mysqli_fetch_assoc($run);
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Cetak Kartu Berobat | Puskesmas Pulau Temiang</title>
	<link rel="shortcut icon" href="/pulautemiang/img/logo.png">

<style>

img{
	width: 150px;
}

.card {
  box-shadow: 0 4px 2px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
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
	<br>

	<h1>Kartu Berobat - Pasien</h1>

  <img src="/pulautemiang/img/kartu_berobat/logo.png" alt="John"  width="30%">
	<!-- <a href="../../img/kartu_berobat/logo.png">aa</a> -->
  <!-- <p><button>No. RM : <?php echo $hasil['no_rm']; ?></button></p> -->

  <h1><?php echo $hasil['nama']; ?></h1>
	<h1><?php echo $hasil['no_rm']; ?></h1>

  <!-- <h4>&nbsp;  <p class="title">No. RM : <?php echo $hasil['no_rm']; ?></p></h4> -->
	  <p class="title">NIK : <?php echo $hasil['nik']; ?></p>
	<p class="title"><?php echo $hasil['tgl_lahir']; ?>  |
	 <?php if($hasil['jk'] == 'L'){ echo 'Laki-Laki'; } ?>
	 <?php if($hasil['jk'] == 'P'){ echo 'Perempuan'; } ?>

		 <!-- &nbsp; <?php echo $hasil['jk']; ?>  -->
	 </p>
  <p class="title">Gol Darah : <?php echo $hasil['gol_darah']; ?></p>
	<p class="title">Alamat : <?php echo $hasil['alamat']; ?></p>
  <div style="margin: 24px 0;">
		<h4>&nbsp; Jln. Padang Lamo, Tebo Ulu, Jambi, Indonesia</h4>
  </div>
  <p><button>Puskesmas Pulau Temiang</button></p>
</div>

</body>
</html>

<script type="text/javascript">
	window.print();
</script>
