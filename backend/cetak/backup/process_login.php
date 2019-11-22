<?php

include_once 'koneksi.php';

$user = $_POST['namaakun'];
$pass = $_POST['katasandi'];

$query = "select * from tb_akun where namaakun='$user' and katasandi='$pass'";
$login = mysqli_query($conn, $query);

if(mysqli_num_rows($login)>=1){


  while ($row = mysqli_fetch_assoc($login)) {
    $user_name = $row['namaakun'];
    $pass = $row['katasandi'];
    $level = $row['level'];
  }

  $q = "select tb_karyawan.nip as nip from tb_akun,tb_karyawan where tb_akun.namaakun='$user' group by tb_akun.namaakun";
  $eksekusi = mysqli_query($conn, $q);
  while ($baris = mysqli_fetch_assoc($eksekusi)){
    $nip=$baris['nip'];
  }

  session_start();
  $_SESSION['namaakun']=$user;
  $_SESSION['katasandi']=$pass;
  $_SESSION['level']=$level;
  // $_SESSION['nip']=$nip;

  ?>
  <script type="text/javascript">
  // swal("Berhasil Login","","success");
  // swal("Permohonan Selesai","","success");
  swal({
    title: "Berhasil Masuk",
    text: "Anda berhasil Masuk",
    type: "success",
    confirmButtonText : "Ok",
    closeOnConfirm : false
  },

  function(){
    window.location='admin/index.php';
  });

  </script>

  <?php

    // header('location:admin/index.php');

} else {
  ?>
  <script type="text/javascript">
    swal("Terjadi kesalahan", "Pastikan Nama Akun dan Kata Sandi benar", "error");
    // alert("Username atau password salah");
    // $.notify("berhasil login");

    </script>
    <?php
}
?>
