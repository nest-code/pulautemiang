<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "db_temiang";
$conn = mysqli_connect($host, $username, $pass, $db);

$query=mysqli_query($conn,"SELECT * FROM tb_pasien order by id_pasien desc limit 1");
$data = mysqli_fetch_array($query);
$id=$data['id_pasien'];

echo "$id";
 ?>
