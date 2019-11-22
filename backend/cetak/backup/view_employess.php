<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($conn,"SELECT * FROM tb_user inner join tb_employees on  tb_user.employees_nip = tb_employees.employees_nip  where tb_employees.employees_nip = '$id'");
$row = mysqli_fetch_object($sql);
?>

<div id="employess_nip"><?php echo $row->employees_nip;?></div>
<div id="employess_name"><?php echo $row->employees_name;?></div>
<div id="employess_gender"><?php echo $row->employees_gender;?></div>
<div id="employees_birthday"><?php echo $row->employees_birthday;?></div>
<div id="employees_address"><?php echo $row->employees_address;?></div>
<div id="employees_hp"><?php echo $row->employees_hp;?></div>
<div id="employees_position"><?php echo $row->employees_position;?></div>

<div id="user_username"><?php echo $row->user_username;?></div>
<div id="user_password"><?php echo $row->user_password;?></div>
<div id="user_type"><?php echo $row->user_type;?></div>
<div id="user_question"><?php echo $row->user_question;?></div>
<div id="user_answer"><?php echo $row->user_answer;?></div>
