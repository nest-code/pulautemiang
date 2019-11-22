<?php
  include_once '../koneksi.php';

  $id_pasien =$_GET['nik'];

  $queryhapus = mysqli_query($conn, "DELETE FROM tb_pasien WHERE nik = $id_pasien");
  if($queryhapus){

    	header('location:/pulautemiang/index.php?m=petugas/petugas_pasien_semua');


  }else{
    echo '<script>alert("Gagal menghapus data."); document.location="index.php";</script>';
  }

  ?>
