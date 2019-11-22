<?php
include 'koneksi.php';

$jawaban = $_POST['jawaban'];
$username = $_POST['namaakun'];
$cek2 = mysqli_query($conn,"select * from tb_akun WHERE namaakun='$namaakun'");

$row = mysqli_fetch_array($cek2);

$kunci = $row['jawaban'];
$user = $row['namaakun'];



if ($jawaban==$kunci){
  print_r($jawaban);
  print_r($kunci);
  print_r($row['namaakun']);
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
