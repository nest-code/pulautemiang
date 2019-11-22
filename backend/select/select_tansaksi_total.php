<?php
include_once 'koneksi.php';
// $query = "SELECT *,sum(tb_detail_resep_obat.jumlah*tb_obat.harga_satuan) as subtotal, tb_pasien.nama, tb_pendaftaran.jamkes,tb_transaksi_berobat.status_bayar FROM `tb_detail_resep_obat` inner join tb_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat inner join tb_resep_obat on tb_detail_resep_obat.id_resep_obat=tb_resep_obat.id_resep_obat inner join tb_pasien on tb_resep_obat.id_pasien=tb_pasien.id_pasien inner join tb_pendaftaran on tb_pendaftaran.id_pasien=tb_pasien.id_pasien inner join tb_transaksi_berobat on tb_transaksi_berobat.id_resep_obat=tb_detail_resep_obat.id_resep_obat inner join tb_detail_rm on tb_detail_rm.id_detail_rekam_medis=tb_detail_resep_obat.id_resep_obat where tb_transaksi_berobat.status_bayar='Bayar' group by tb_detail_resep_obat.id_resep_obat";

$query = "SELECT * from tb_transaksi_berobat inner join tb_resep_obat on tb_transaksi_berobat.id_resep_obat= tb_resep_obat.id_resep_obat inner join tb_pasien on tb_resep_obat.id_pasien=tb_pasien.id_pasien where tb_transaksi_berobat.status_transaksi='Belum'";
  
$hasil = mysqli_query($conn, $query);

$transaksi_banyakDatas = 0;

$id_transaksi = array();
$tgl_transaksi = array();
$status_transaksi = array();
$id_resep_obat = array();
$id_petugas = array();




if (mysqli_num_rows($hasil) > 0) {

    $transaksi_banyakDatas = mysqli_num_rows($hasil);
    while($data = mysqli_fetch_assoc($hasil)){

        array_push($id_transaksi, $data['id_transaksi']);
        array_push($tgl_transaksi, $data['tgl_transaksi']);
        array_push($status_transaksi, $data['$status_transaksi']);
        array_push($id_resep_obat, $data['id_resep_obat']);
        array_push($id_petugas, $data['id_petugas']);

    }
}
?>
