<?php
include "../koneksi.php";
$id = $_POST['id_obat'];
$nama = $_POST['nama_obat'];
$satuan = $_POST['satuan'];
$stok = $_POST['stok'];
$keterangan = $_POST['keterangan'];

  $query = "UPDATE tb_obat SET nama_obat='$nama',satuan='$satuan',stok='$stok',keterangan='$keterangan' where id_obat = '$id' ";
  $input = mysqli_query($conn, $query);
  if($input){
    ?>
    <script type="text/javascript">
      swal({
        title: "Data dirubah!",
        text: "data Obat <?php echo $nama?> telah dirubah",
        type: "success",
        confirmButtonText: "Oke",
        closeOnConfirm: false
      },
      function(){
        window.location="?m=dataObat";
      });
    </script>
    <?php
  }else {
    ?>
    <script type="text/javascript">
      swal({
        title: "Maaf",
        text: "Data gagal dirubah!",
        type: "error",
        confirmWarningText: "Oke",
      },
      function () {
        window.location='./';
      });
    </script>
    <?php
  }
}?>
