<?php
include_once 'koneksi.php';
$id = $_POST['id'];
$sql = mysqli_query($conn,"SELECT EXISTS (Select * from tb_rekam_medis  where id_pasien='$id') as ceko ");
$row = mysqli_fetch_object($sql);
echo '<div id="ceko">'.$row->ceo.'</div>';
?>
