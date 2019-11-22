<?php
include_once 'koneksi.php';

$kode = $_POST['applicant_id'];
$tgl = date("Y-m-d H:i:s");
$terima = "Selesai";

$query = "UPDATE tb_applicant SET status='$terima', applicant_date_in='$tgl' where applicant_id='$kode'";

if (mysqli_query($conn, $query)){
  ?>
  <script type="text/javascript">
  swal("Permohonan Selesai","","success");
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
