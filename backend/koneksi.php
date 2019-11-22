<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "db_temiang";

	$conn = mysqli_connect($host, $username, $pass, $db);
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
		echo "GAGAL";
	}
 ?>
