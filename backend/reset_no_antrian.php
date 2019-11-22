<?php
include_once 'koneksi.php';

$sql = mysqli_query($conn,"DELETE `tb_antrian_increment`;");

if($sql){
  echo
  '<script>
  alert("Berhasil");
  document.location="/pulautemiang/index.php?m=petugas/petugas_pasien_semua";
  </script>';
}else{
  echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
}
?>
