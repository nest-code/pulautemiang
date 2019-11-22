<?php
// include_once '../koneksi.php';
$query = "select *  from tb_dokter";
$hasil = mysqli_query($conn, $query);

$dokter_banyakData = 0;

$NIP = array();
$nama = array();
$jenis_poli = array();
$jk = array();
$alamat = array();
$no_hp= array();
// $status= array();
$id_akun= array();



if (mysqli_num_rows($hasil) > 0) {

    $dokter_banyakData = mysqli_num_rows($hasil);
    while($data = mysqli_fetch_assoc($hasil)){

        array_push($NIP , $data['nip']);
        array_push($nama, $data['nama']);
        array_push($jenis_poli, $data['id_jenis_poli']);
        array_push($jk, $data['jk']);
        array_push($alamat, $data['alamat']);
        array_push($no_hp, $data['no_hp']);
        // array_push($status, $data['status']);
        array_push($id_akun, $data['id_akun']);

    }
}
?>
