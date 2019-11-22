<?php
  include_once 'koneksi.php';

  $no_rm= $_POST['no_rm'];
  $query= "DELETE FROM tb_rekam_medis WHERE no_rm='$no_rm'";
}
