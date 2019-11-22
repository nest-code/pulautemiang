<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "db_temiang";

	$conn = mysqli_connect($host, $username, $pass, $db);
$id_obat =$_GET['id_detail_resep'];



$queryhapus = mysqli_query($conn, "DELETE FROM tb_detail_resep_obat WHERE id_detail_resep = $id_obat");



?>
