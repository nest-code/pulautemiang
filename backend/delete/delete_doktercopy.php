<?php
  // include_once 'koneksi.php';
  $nip= $_POST['nip'];
  $query= "DELETE FROM tb_dokter WHERE nip='$nip'";
  if ($query) {

    ?>
    <script type="text/javascript">
    swal({
      title: "Data Terhapus!",
      text: "Telah telah terhapus",
      type: "success",
      confirmButtonText: "Oke",
      closeOnConfirm: false,
    },


    function(){
      // window.location="?m=uv_page_register_employess";

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
