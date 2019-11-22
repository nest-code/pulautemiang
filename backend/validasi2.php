<?php
include_once 'koneksi.php';
$id = $_POST['id'];
// $sql = mysqli_query($conn,"SELECT EXISTS (Select * from tb_pendaftaran where status='Menunggu' and id_pasien='$id') as cek ");
$sql = mysqli_query($conn,"SELECT EXISTS (Select * from tb_resep_obat inner join tb_transaksi_berobat on tb_transaksi_berobat.id_resep_obat=tb_resep_obat.id_resep_obat where tb_transaksi_berobat.status_bayar='Belum Bayar' and tb_resep_obat.id_resep_obat='$id') as cek ");

$row = mysqli_fetch_object($sql);
echo '<div id="cek">'.$row->cek.'</div>';
?>
