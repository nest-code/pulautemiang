<?php
//insert.php
// $connect = new PDO("mysql:host=localhost;dbname=db_temiang", "root", "");

include_once '../../../../backend/koneksi.php';

$query = "
INSERT INTO tb_detail_resep_obat
(id_resep_obat, id_obat, jumlah, keterangan)
VALUES (:id_resep_obat, :id_obat,:jumlah,:keterangan)
";

for($count = 0; $count<count($_POST['hidden_id_resep_obat']); $count++)
{
	$data = array(
		':id_resep_obat'	=>	$_POST['hidden_id_resep_obat'][$count],
		':id_obat'	=>	$_POST['hidden_id_obat'][$count],
		':jumlah'	=>	$_POST['hidden_jumlah'][$count],
		':keterangan'	=>	$_POST['hidden_keterangan'][$count],
	);
	$statement = $conn->prepare($query);
	$statement->execute($data);
}

?>
