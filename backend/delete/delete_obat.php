<?php
include_once '../koneksi.php';

$id_obat =$_GET['id_obat'];
$queryhapus = mysqli_query($conn, "DELETE FROM tb_obat WHERE id_obat = $id_obat");
if($queryhapus){

  	header('location:/pulautemiang/index.php?m=admin/admin_obat');

}else{
  echo '<script>alert("Gagal menghapus data."); document.location="index.php";</script>';
}

?>
