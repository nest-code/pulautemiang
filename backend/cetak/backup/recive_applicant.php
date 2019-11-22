<?php
include_once 'koneksi.php';

$kode = $_POST['applicant_id'];
$nip = $_SESSION['employees_nip'];
$terima = 'Proses';

$query = "UPDATE tb_applicant SET employees_nip='$nip', status='$terima' where applicant_id='$kode'";

if (mysqli_query($conn, $query)){
  ?>
  <script type="text/javascript">
  swal("Permohonan Diproses","","success");
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
