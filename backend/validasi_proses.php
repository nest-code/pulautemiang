<?php
include_once 'koneksi.php';
$id = $_POST['id'];
$sql = mysqli_query($conn,"SELECT EXISTS (Select * from tb_pendaftaran where status='Proses' and id_jenis_poli='$id') as cek ");
$row = mysqli_fetch_object($sql);
echo '<div id="cek">'.$row->cek.'</div>';
?>