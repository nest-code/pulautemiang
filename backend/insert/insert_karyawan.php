<?php
// include 'koneksi.php';

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
$path = "img/petugas/".$fotobaru;


$id_akun= $_POST['id_akun'];



if(move_uploaded_file($tmp, $path)){
$karyawan =mysqli_query($conn,"insert into tb_petugas values('','$nama','$tgl_lahir','$jk','$agama','$alamat','$no_hp','$fotobaru','$id_akun')") ;

}
?>
