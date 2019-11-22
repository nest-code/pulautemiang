<?php
// include_once '../koneksi.php';

$id_akun = $_POST['id_akun'];
$nama_akun = $_POST['nama_akun'];
$kata_sandi = $_POST['kata_sandi'];
$level = $_POST['level'];
$pertanyaan = $_POST['pertanyaan'];
$jawaban = $_POST['jawaban'];

// $id_akun = $_POST['id_akun'];

$user =mysqli_query($conn,"insert into tb_akun values('$id_akun','$nama_akun','$kata_sandi','$level','$pertanyaan','$jawaban')");
// eksekusi query dengan mysqli
  // if ($user) {
  //
 ?>
   <script type="text/javascript">
    swal({
      title: "Data tersimpan!",
      text: "Telah terdaftar",
      type: "success",
      confirmButtonText: "Oke",
      closeOnConfirm: false,
    },


    function(){

            <?php $hak= $_SESSION['level'];?>

            <?php if ($hak=='Admin'){?>

            window.location="?m=admin/admin_pasien";
      <?php }
            else if ($hak=='Petugas') { ?>

            window.location="?m=petugas/petugas_pasien";
        <?php }?>

    });
  </script>
  <?php
  // }else {
  //   // jika gagal
  //   ?>
   <script type="text/javascript">
  //   swal("Terjadi kesalahan", "Mohon periksa inputan anda dan inputkan kembali data yang benar.", "error");
  //   </script>
  <?php
  // }

   ?>
