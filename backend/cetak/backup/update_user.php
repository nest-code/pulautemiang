<?php
  include_once 'koneksi.php';

  // $user_id= $_POST['user_id'];
  $employees_nip= $_POST['employees_nip'];
  $user_username= $_POST ['user_username'];
  $user_password= $_POST ['user_password'];
  $user_type= $_POST['user_type'];
  $user_question= $_POST['user_question'];
  $user_answer= $_POST['user_answer'];


  $query="UPDATE tb_user SET employees_nip='$employees_nip', user_username='$user_username',
   user_password='$user_password',
   user_type='$user_type',
   user_question='$user_question',
   user_answer='$user_answer' WHERE employees_nip='$employees_nip'";
    $update = mysqli_query($conn, $query);

?>
