<?php
include_once '../koneksi.php';
$id_kategori_obat =$_GET['id_kategori_obat'];
$queryhapus = mysqli_query($conn, "DELETE FROM tb_kategori_obat WHERE id_kategori_obat = $id_kategori_obat");
if($queryhapus){
  header('location:/pulautemiang/index.php?m=admin/admin_kategori');
}else{
  echo '<script>alert("Gagal menghapus data."); document.location="index.php";</script>';
}



?>
