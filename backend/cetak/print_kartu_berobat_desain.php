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

<html>
  <head>

  <style type="text/css">




.head{
  margin-left:18em;
  margin-top:4em;
  margin-right:18em;
  padding-left:18pt;
  padding-top:15pt;
  background:green;
  height:7em;
  border-radius:15px 15px 0px 0px;
  border-color: red;
  }

#body{
  padding-left:18pt;
  padding-top:18pt;
  margin-left:18em;
  margin-right:18em;
  padding-left:18pt;
  background:blue;
  height:15em;
  border-radius:0px 0px 15px 15px;
  border-color: black;
  font-family: inherit;
  }

.table{
  font-family: arial;
}


.table tr,td, h4,h2 {
  font-family: arial;
  padding: 2.5px;
}

.table tr,td, img{
/* padding-right:10em; */
/* margin-bottom: 20px; */
}

.h4{
font-family: arial;
font-weight: bold;
}


</style>
</head>


  <body>
<div class="head">

  <table border="0" align="left">
    <tr>
      <td>
        <img style='padding-right:7.5em; padding-buttom:5em;'  src='../../admin/img/kartu_berobat/logo.png  'width='95'height='100'/>
      </td>

      <td style="line-height : 0px">
        <h2 align="center">Kartu Berobat</h2>
        <h2 align="center">Puskesmas Pulau Temiang</h2>
        <h4 align="center"> <small>Jl. Padang Lama, Kab.Tebo, Jambi</small> </h5>
      </td>
    </tr>
  </table>


</div>


<div id="body">
<?php
$sql = "SELECT * FROM tb_pasien where id_pasien = $id_pasien";
$run=mysqli_query($conn,$sql);
$hasil = mysqli_fetch_assoc($run);
?>

<div class="">
<table border="0" padding-left="65px" style="line-height : 40px" width="380px">
  <tr>
    <a href="../koneksi.php"></a>
    <td>Nama</td>
      <td>: <?php echo $hasil['nama']; ?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
      <td>: <?php echo $hasil['tgl_lahir']; ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>: <?php echo $hasil['jk']; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
  <td>: <?php echo $hasil['alamat']; ?></td>
  </tr>
  </table>
  <h4 align="center"><b>-Kartu harus selalu dibawa ketika berobat-</b></h4>
  </div>
</body>
<script type="text/javascript">
// window.print();
</script>
</div>
</html>
