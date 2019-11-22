<?php
  include_once '../koneksi.php';

  // $id_rawat= $_POST['id_pendaftaran'];
  $id_rawat =$_GET['id_pendaftaran'];
  // $query= "DELETE FROM tb_pendaftaran WHERE id_pendaftaran='$id_rawat'";

  $queryhapus = mysqli_query($conn, "DELETE FROM tb_pendaftaran WHERE id_pendaftaran='$id_rawat'");
  if($queryhapus){
      	header('location:/pulautemiang/index.php?m=petugas/petugas_antrian_beranda');
  }else{
    echo '<script>alert("Gagal menghapus data."); document.location="index.php";</script>';
  }
