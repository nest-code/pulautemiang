<?php
include 'koneksi.php';

$jawaban = $_POST['jawaban'];
$username = $_POST['username'];
$cek2 = mysqli_query($conn,"select * from tb_user WHERE user_username='$username'");

$row = mysqli_fetch_array($cek2);

$kunci = $row['user_answer'];
$user = $row['user_username'];



if ($jawaban==$kunci){
  print_r($jawaban);
  print_r($kunci);
  print_r($row['user_username']);
  return true;
}else {
  return false;
}

//
// if (mysqli_num_rows($cek2)> 0) {
//   if ($jawaban==$cekpass) {
//     return true;
//   }else{
//   return false;
// }
// }
 ?>
 <div id="user"><?php echo $username;?></div>
