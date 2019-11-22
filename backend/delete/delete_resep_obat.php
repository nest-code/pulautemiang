<?php
  include_once 'koneksi.php';

  $kode_resep= $_POST['kode_resep'];
  $query= "DELETE FROM tb_resep_obat WHERE kode_resep='$kode_resep'";
}
