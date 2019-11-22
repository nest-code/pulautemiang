<?php
include "../koneksi.php";
$id_pasien = $_GET['id_pasien'];
?>
<html>
  <head>
  <style type="text/css">
    .head
    {
    margin-left:18em;
    margin-top:4em;
    margin-right:18em;
    padding-left:18pt;
    padding-top:15pt;
    background:green;
    height:5em;
    border-radius:25px 25px 0px 0px;
    }
    #body
    {
    padding-left:18pt;
    padding-top:18pt;
    margin-left:18em;
    margin-right:18em;
    padding-left:18pt;
    background:orange;
    height:15em;
    border-radius:0px 0px 25px 25px;
    }
</style>
</head>
  <body>
    <div class="head">
  <table border="0" align="center">
    <tr>
      <td>
        <img style='padding-right:2em'src='../images/IMG_0344.JPG'width='70'height='70'/>
      </td>
      <td style="line-height : 0px">
        <h3 align="center">RSIA AL-BARRA</h4>
        <h4 align="center"> <small>Jl. PULAI BERANTAI, DESA UJUNG PADANG</small> </h5>
      </td>
    </tr>
  </table>
</div>
<div id="body">
<?php
$sql = "SELECT * FROM tb_pasien where id_pasien = $id_pasien";
$run=mysqli_query($koneksi,$sql);
$hasil = mysqli_fetch_assoc($run);
?>
<div class="">
<table border="0" padding-left="65px" style="line-height : 40px" width="380px">
  <tr>
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
  <h4 align="center"><b>--Kartu harus dibawa ketika berobat--</b></h4>
  </div>
</body>
<script type="text/javascript">
window.print();
</script>
</div>
</html>
