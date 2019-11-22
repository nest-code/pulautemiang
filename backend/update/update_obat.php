<?php
include "../koneksi.php";
$id=$_GET['id'];
$query = "SELECT nama_obat,id_kategori_obat,harga_satuan,stok,keterangan FROM tb_obat where id_obat='$id'";
$edit = mysqli_query($conn,$query);
$row=mysqli_fetch_object($edit);
 ?>

<div id="id_obat"><?php echo $id ?></div>
<div id="nama_obat"><?php echo $row->nama_obat ?></div>
<div id="id_kategori_obat"><?php echo $row->kategori_obat ?></div>

<div id="harga_satuan"><?php echo $row->harga_satuan ?></div>
<div id="stok"><?php echo $row->stok?></div>
<div id="keterangan"> <?php echo $row->keterangan ?></div>
