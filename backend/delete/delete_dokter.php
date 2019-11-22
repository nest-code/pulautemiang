<?php
include('../koneksi.php');


	$nip = $_GET['nip'];
  $id_akun =$_post['id_akun'];

	$queryhapus = mysqli_query($conn, "DELETE FROM tb_dokter WHERE nip = $nip");


  $queryhapus2 = mysqli_query($conn, "DELETE FROM tb_akun WHERE id_akun = $id_akun");


	if($queryhapus){
			  header('location:../../admin?m=admin/admin_dokter');
	}else{
		echo "Upss Something wrong..";
	}

?>
