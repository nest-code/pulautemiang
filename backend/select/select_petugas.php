<?php
// include_once '../koneksi.php';
$query = "select * from tb_petugas";
$hasil = mysqli_query($conn, $query);

$petugas_banyakData = 0;

$id_petugas = array();
$nama = array();
$tgl_lahir = array();
$jk = array();
$agama = array();
$alamat = array();
$no_hp= array();
$foto = array();
$id_akun= array();



if (mysqli_num_rows($hasil) > 0) {

    $petugas_banyakData = mysqli_num_rows($hasil);
    while($data = mysqli_fetch_assoc($hasil)){

        array_push($id_petugas, $data['id_petugas']);
        array_push($nama, $data['nama']);
        array_push($tgl_lahir, $data['tgl_lahir']);
        array_push($jk, $data['jk']);
        array_push($agama, $data['agama']);
        array_push($no_hp, $data['no_hp']);
        array_push($alamat, $data['alamat']);
        array_push($foto, $data['foto']);
        array_push($id_akun, $data['id_akun']);

    }
}
?>
