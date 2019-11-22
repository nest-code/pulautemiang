<?php
include 'koneksi.php';

// $id_pasien = $_POST ['id_pasien'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$pendidikan = $_POST['pendidikan'];
$alamat = $_POST['alamat'];

// $id_akun = $_POST['id_akun'];


$pasien =mysqli_query($conn,"insert into tb_pasien values
('','$nama','$tgl_lahir','$gender','$agama''$pekerjaan','$pendidikan','$alamat',)") ;
// eksekusi query dengan mysqli

  ?>
