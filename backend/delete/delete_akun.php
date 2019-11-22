<?php
include('../koneksi.php');
	$id_akun = $_GET['id_akun'];
  $queryhapus = mysqli_query($conn, "DELETE FROM tb_akun WHERE id_akun = $id_akun");
	if($queryhapus){
			  header('location:../../admin?m=admin/admin_pengguna');
	}else{
		echo "Upss Something wrong..";
	}

?>
