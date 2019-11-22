<?php
include 'koneksi.php';

$id=$_POST['username'];

$lupa = mysqli_query($conn, "select * from tb_user where user_username='$id'");
if (mysqli_num_rows($lupa)> 0) {
  $data = mysqli_fetch_array($lupa);
}else {
  return false;
}

?>

<div id="username1"><?php echo $data['user_username'];?></div>
<div id="pertanyaan"><?php echo $data['user_question'];?></div>
