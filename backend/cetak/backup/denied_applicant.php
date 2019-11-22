<?php
include_once 'koneksi.php';

$kode = $_POST['applicant_id'];
$terima = "Tolak";

$query = "UPDATE tb_applicant SET status='".$terima."' where applicant_id='".$kode."';";

if (mysqli_query($conn, $query)){
  ?>
  <script type="text/javascript">
  swal("Permohonan Ditolak","","success");
  </script>
  <?php
  
}else {
  ?>
  <script type="text/javascript">
  swal("Terjadi kesalahan","Periksa kembali","error");
  </script>
  <?php
}
 ?>
