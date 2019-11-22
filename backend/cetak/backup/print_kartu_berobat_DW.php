<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "db_temiang";

	$conn = mysqli_connect($host, $username, $pass, $db);
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
		echo "GAGAL";
	}
$id_pasien = $_GET['id_pasien'];
?>

<?php
$sql = "SELECT * FROM tb_pasien where id_pasien = $id_pasien";
$run=mysqli_query($conn,$sql);
$hasil = mysqli_fetch_assoc($run);
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

img{
	width: 80px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
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
	<p>Kartu Berobat - Pasien</p>

  <img src="../../admin/img/kartu_berobat/logo.png" alt="John" >
	<!-- <a href="../../admin/img/kartu_berobat/logo.png">aa</a> -->
  <h1><?php echo $hasil['nama']; ?></h1>
	<!-- <p class="title">CEO & Founder, Example</p> -->



	<p class="title"><?php echo $hasil['tgl_lahir']; ?>  &nbsp; <?php echo $hasil['jk']; ?> </p>



	<p class="title"><?php echo $hasil['alamat']; ?></p>



  <p>Harvard University</p>




  <div style="margin: 24px 0;">
		<h6><i class="fa fa-map-marker" aria-hidden="true"> &nbsp; Jln. Padang Lamo, Tebo Ulu, Jambi, Indonesia</i></h6>
		<!-- <a href="#"><i class="fa fa-dribbble"></i></a> -->
    <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
    <!-- <a href="#"><i class="fa fa-linkedin"></i></a> -->
    <!-- <a href="#"><i class="fa fa-facebook"></i></a> -->




  </div>


  <p><button>Contact</button></p>
</div>

</body>
</html>
