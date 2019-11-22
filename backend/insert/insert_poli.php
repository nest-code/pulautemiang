<?php
// include '../koneksi.php';

$id_jenis_poli = $_POST['id_jenis_poli'];
$nama_jenis = $_POST['nama_jenis'];


// $id_akun = $_POST['id_akun'];

  $user = mysqli_query($conn, "insert into tb_jenis_poli values ('','$nama_jenis')");
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
      window.location="?m=admin/admin_poli";

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
