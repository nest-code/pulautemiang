<?php
  include_once 'koneksi.php';

  $id_detail_rekam_medis= $_POST['id_detail_rekam_medis'];
  $query= "DELETE FROM tb_akun WHERE id_detail_rekam_medis='$id_detail_rekam_medis'";
}
