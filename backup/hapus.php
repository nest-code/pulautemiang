<?php
include_once 'backend/koneksi.php';
$nip=$_POST['12'];
$hapus=mysqli_query($koneksi,"DELETE FROM tb_dokter where nip=$nip");
if ($hapus){
  ?>
  <script type="text/javascript">
  swal({
    title: "Hapus Data!",
    text: "Apakah anda yakin menghapus data ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-warning",
    confirmWarningText: "Ya, keluar",
    closeOnConfirm: false
  },
  function() {
    swal({
      title: "Terhapus!",
      text: "Data berhasil dihapus",
      type: "success",
      confirmButtonText: "Oke",
      closeOnConfirm: false
    },
    function(){
      window.location="?m=dataDokter";
    });
  });
  </script>
  <?php
}

?>
