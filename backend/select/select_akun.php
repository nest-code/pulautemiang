<?php
include_once 'koneksi.php';
$query = "select *  from tb_akun";
$hasil = mysqli_query($conn, $query);

$user_banyakData = 0;

$id = array();
$nip = array();
$namaakun = array();
$katasandi = array();
$level = array();
$pertanyaan = array();
$jawaban = array();


if (mysqli_num_rows($hasil) > 0) {

    $user_banyakData = mysqli_num_rows($hasil);
    while($data = mysqli_fetch_assoc($hasil)){

        array_push($id, $data['id']);
        array_push($nip, $data['nip']);
        array_push($namaakun, $data['namaakun']);
        array_push($katasandi, $data['katasandi']);
        array_push($level, $data['level']);
        array_push($pertanyaan, $data['pertanyaan']);
        array_push($jawaban, $data['jawaban']);
    }
}
?>
