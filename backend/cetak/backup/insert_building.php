<?php
include 'koneksi.php';

$bpc_id = $_POST['bpc_id'];
$bpc_type = $_POST['bpc_type'];
$bpc_place = $_POST['bpc_place'];
$bpc_rt = $_POST['bpc_rt'];
$bpc_rw = $_POST['bpc_rw'];
$bpc_north = $_POST['bpc_north'];
$bpc_south = $_POST['bpc_south'];
$bpc_east = $_POST['bpc_east'];
$bpc_west = $_POST['bpc_west'];
$bpc_information = $_POST['bpc_information'];


$view_applicant_id = mysqli_query($conn, "select max(applicant_id) as applicant_new from tb_applicant");
if ($view_applicant_id){
while ($view = mysqli_fetch_array($view_applicant_id)) {
  $app=$view['applicant_new'];

  $insert_building = mysqli_query($conn, "insert into tb_building_permit_certificate values ('$bpc_id','$app','$bpc_type','$bpc_place','$bpc_rt','$bpc_rw','$bpc_north','$bpc_south','$bpc_east','$bpc_west','$bpc_information')");
}




  ?>
  <script type="text/javascript">
  // swal("Berhasil Login","","success");
  // alert("Berhasil")
  // swal("Permohonan Selesai","","success");
  //

  swal({
    title:  "NO. REGISTRASI: <?php echo $app; ?>",
    text: "Permohonan Selesai, Data surat izin bangunan telah diajukan, harap catat NO. REGISTRASI Anda ",
    type: "success",
    confirmButtonText : "Ok",
    closeOnConfirm : false
  },

  function(){

        <?php if(isset($_SESSION['user_type'])){ ?>
          window.location='index.php?m=page_building_permit_certificate';
          <?php
        }else{ ?>
          window.location='index.php?page=home';
        <?php  } ?>
  });

  </script>
  <?php
}else {
  ?>
  <script type="text/javascript">
  swal("Terjadi kesalahan","Periksa kembali","error");
  // alert("Gagal Pengajuan")

  </script>
  <?php
}

 ?>
