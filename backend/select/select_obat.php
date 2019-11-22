<?php
// include_once '../koneksi.php';
$query = "select *  from tb_obat";
$hasil = mysqli_query($conn, $query);

$obat_banyakData = 0;

$id_obat = array();

$nama_obat = array();
$id_kategori_obat = array();
$harga_satuan = array();
$stok = array();
$keterangan= array();


if (mysqli_num_rows($hasil) > 0) {

    $obat_banyakData = mysqli_num_rows($hasil);
    while($data = mysqli_fetch_assoc($hasil)){

        array_push($id_obat, $data['id_obat']);
        array_push($nama_obat, $data['nama_obat']);
        array_push($id_kategori_obat, $data['id_kategori_obat']);
        array_push($harga_satuan, $data['harga_satuan']);
        array_push($stok, $data['stok']);
        array_push($keterangan, $data['keterangan']);

    }
}
?>
