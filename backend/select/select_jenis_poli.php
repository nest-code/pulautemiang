<?php
// include_once '../koneksi.php';
$query = "select *  from tb_jenis_poli";
$hasil = mysqli_query($conn, $query);

$poli_banyakData = 0;

$id_obat = array();
$nama_jenis = array();



if (mysqli_num_rows($hasil) > 0) {

    $poli_banyakData = mysqli_num_rows($hasil);
    while($data = mysqli_fetch_assoc($hasil)){

        array_push($id_jenis_poli, $data['id_jenis_poli']);
        array_push($nama_jenis, $data['nama_jenis']);

    }
}
?>
