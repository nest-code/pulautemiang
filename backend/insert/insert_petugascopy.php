<?php
// include 'koneksi.php';





$cek_username=mysqli_num_rows(mysqli_query
             ("SELECT username FROM users
               WHERE username='$_POST[username]'"));
// Kalau username sudah ada yang pakai
if ($cek_username > 0){
  echo "Username sudah ada yang pakai. Ulangi lagi";
}
// Kalau username valid, inputkan data ke tabel users
else{
  mysql_query("INSERT INTO users(username,
                                 password,
                                 nama_lengkap,
                                 level)
                      VALUES('$_POST[username]',
                             '$_POST[password]',
                             '$_POST[nama_lengkap]',
                             '$_POST[level]')");
}

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
