<?php
  include_once 'koneksi.php';

  $id_karyawan $_POST['id_karyawan'];
  $query= "DELETE FROM tb_karyawan WHERE id_karyawan='$id_karyawan'";
}
