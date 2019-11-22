<?php
include "../koneksi.php";
$id=$_GET['id'];
$query = "SELECT nama_jenis FROM tb_jenis_poli where id_jenis_poli='$id'";
$edit = mysqli_query($conn,$query);
$row=mysqli_fetch_object($edit);
 ?>

<div id="id_jenis_poli"><?php echo $id ?></div>
<div id="nama_jenis"><?php echo $row->nama_jenis ?></div>
