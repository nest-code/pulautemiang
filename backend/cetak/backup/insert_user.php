<?php
include 'koneksi.php';

$employees_nip  =$_POST ['employees_nip'];
$user_username= $_POST['user_username'];
$user_password= $_POST['user_password'];
$user_type = $_POST['user_type'];
$user_question= $_POST['user_question'];
$user_answer = $_POST['user_answer'];


  $user = mysqli_query($conn, "insert into tb_user values ('','$employees_nip','$user_username','$user_password','$user_type','$user_question','$user_answer')");
  if ($user) {
    // jika berhasil


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
