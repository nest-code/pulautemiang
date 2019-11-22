<?php
// include_once '../koneksi.php';
$query = "select *  from tb_pasien";
$hasil = mysqli_query($conn, $query);

$pasien_banyakData = 0;

$id_pasien = array();
$nama = array();
$tgl_lahir = array();
$jk = array();
$agama = array();
$pekerjaan = array();
$pendidikan = array();
$alamat= array();



if (mysqli_num_rows($hasil) > 0) {
    $pasien_banyakData = mysqli_num_rows($hasil);
    while($data = mysqli_fetch_assoc($hasil)){
        array_push($id_pasien, $data['id_pasien']);
        array_push($nama, $data['nama']);
        array_push($tgl_lahir, $data['tgl_lahir']);
        array_push($jk, $data['jk']);
        array_push($agama, $data['agama']);
        array_push($pekerjaan, $data['pekerjaan']);
        array_push($alamat, $data['alamat']);


    }
}
?>
