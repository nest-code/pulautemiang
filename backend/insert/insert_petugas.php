<?php
// include 'koneksi.php';

// $foto = $_POST['foto'];

$id_petugas = $_POST['id_petugas'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$fotobaru = date('dmYHis').$foto;
$path = "../admin/img/petugas/".$fotobaru;
$id_akun= $_POST['id_akun'];
if(move_uploaded_file($tmp, $path)){
$petugas=mysqli_query($conn,"insert into tb_petugas values('','$nama','$tgl_lahir','$jk','$agama','$alamat','$no_hp','$fotobaru','$id_akun')") ;
}
?>
