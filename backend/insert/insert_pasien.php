<?php
// include '../koneksi.php';
$id_pasien = $_POST['id_pasien'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$gol_darah = $_POST['gol_darah'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

// $id_akun = $_POST['id_akun'];

$query =mysqli_query($conn,"insert into tb_pasien values('','$nama','$tgl_lahir','$jk','$gol_darah','$agama','$pekerjaan','$alamat','$no_hp')");


// eksekusi query dengan mysqli

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

    <?php $hak= $_SESSION['level'];?>

    <?php if ($hak=='Admin'){?>

      window.location="?m=karyawan/karyawan_pasien";
      <?php }
      else if ($hak=='Petugas') { ?>

        window.location="?m=karyawan/admin_pasien";
        <?php }?>
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
