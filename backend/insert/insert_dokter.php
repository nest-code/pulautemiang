<?php

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST ['tgl_lahir'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
$path = "img/dokter/".$fotobaru;


$id_jenis_poli = $_POST['id_jenis_poli'];
$id_akun= $_POST['id_akun'];

if(move_uploaded_file($tmp, $path)){
$user=mysqli_query($conn,"insert into tb_dokter values('$nip','$nama','$tgl_lahir','$jk','$agama','$alamat','$no_hp','$fotobaru','$id_jenis_poli','$id_akun')");
// eksekusi query dengan mysqli

}
?>
