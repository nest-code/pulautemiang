<?php

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST ['tgl_lahir'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$status = $_POST['status'];
$id_jenis_poli = $_POST['id_jenis_poli'];
$id_akun= $_POST['id_akun'];


// $id_akun = $_POST['id_akun'];


$user =mysqli_query($conn,"insert into tb_dokter values('$nip','$nama','$tgl_lahir','$jk','$agama','$alamat','$no_hp','$status','$id_jenis_poli','$id_akun')") ;
// eksekusi query dengan mysqli

// eksekusi query dengan mysqli
  //
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

  //
  //   function(){
  //     // window.location="?m=uv_page_register_employess";
  //
  //   });
  //   </script>
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
