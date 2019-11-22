<?php
  include_once 'koneksi.php';

  $employees_nip= $_POST['employees_nip'];
  $employees_name= $_POST['employees_name'];
  $employees_gender= $_POST['employees_gender'];
  $employees_birthday= $_POST['employees_birthday'];
  $employees_address= $_POST['employees_address'];
  $employees_hp= $_POST['employees_hp'];
  $employees_position = $_POST['employees_position'];

  $query="UPDATE tb_employees SET employees_name='$employees_name', employees_gender='$employees_gender', employees_birthday='$employees_birthday', employees_address='$employees_address', employees_hp='$employees_hp', employees_position='$employees_position' WHERE employees_nip='$employees_nip'";
  $update = mysqli_query($conn, $query);


?>
