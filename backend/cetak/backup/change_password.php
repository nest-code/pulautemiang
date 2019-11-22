

<?php
include "koneksi.php";

$user = $_POST['user'];
$newpas = $_POST['password'];

$ganti = mysqli_query($conn,"UPDATE tb_user set user_password = '$newpas' where user_username = '$user' ");

if ($ganti) {
  ?>
  <script type="text/javascript">

    alert("Kata Sandi Berhasil Diubah");
  	window.location="../login.php";


  </script>
  <?php
}else {
  ?>
  <script type="text/javascript">

  </script>
  <?php
}

 ?>
