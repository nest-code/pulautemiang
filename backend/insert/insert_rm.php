<?php
// include 'koneksi.php';

$no_rm = $_POST['no_rm'];
$id_pasien = $_POST['id_pasien'];
$nip = $_POST['nip'];
$tgl_rekam = $_POST['tgl_rekam'];
$rpt = $_POST['rpt'];
$rpo = $_POST['rpo'];


$riw_alergi_mkn = $_POST['riw_alergi_mkn'];
$riw_alergi_obat = $_POST['riw_alergi_obat'];
$riw_operasi = $_POST['riw_operasi'];
$riw_ayah = $_POST['riw_ayah'];
$riw_ibu = $_POST['riw_ibu'];
$riw_penyakit = $_POST['riw_penyakit'];
$jaminan_kesehatan = $_POST['jaminan_kesehatan'];





$user =mysqli_query($conn,"insert into tb_rekam_medis values('$no_rm','$id_pasien','$nip','$tgl_rekam','$rpt','$rpo','$riw_alergi_mkn','$riw_alergi_obat','$riw_operasi','$riw_ayah','$riw_ibu','$riw_penyakit','$jaminan_kesehatan')") ;
// ('$no_rm','$id_pasien','$id_dokter','$tgl_rekam','$rpt','$rpo','$riw_alergi_mkn','$riw_alergi_obat','$riw_operasi','$riw_ayah','$riw_ibu','$riw_penyakit','$jaminan_kesehatan')") ;


  if ($user) {

    ?>
    <script type="text/javascript">
    swal({
      title: "Data tersimpan!",
      text: "Telah terdaftar",
      type: "success",
      confirmButtonText: "Oke",
      closeOnConfirm: false
    },


    function(){
      window.location="?m=uv_page_register_employess";

    });
    </script>
    <?php
  }else {
    // jika gagal
    ?>
    <script type="text/javascript">
    swal("Terjadi kesalahan", "Mohon periksa inputan anda dan inputkan kembali data yang benar.", "error");
    </script>
    <?php
  }

   ?>
