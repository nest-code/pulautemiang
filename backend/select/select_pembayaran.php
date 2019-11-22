<?php
include_once 'koneksi.php';
$query = " SELECT COUNT(id_transaksi) as jumlah FROM tb_transaksi_berobat inner join tb_resep_obat on tb_resep_obat.id_resep_obat=tb_transaksi_berobat.id_resep_obat ";

$data1 = mysqli_fetch_array($query);
$pembayaran1=$data1['jumlah'];

}
?>
