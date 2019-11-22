<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "db_temiang";
$conn = mysqli_connect($host, $username, $pass, $db);
if (isset($_GET["id_obat"])) {
  $id_obat = $_GET["id_obat"];
  $query = mysqli_query($conn, "select * from tb_obat inner join tb_kategori_obat on tb_obat.id_kategori_obat=tb_kategori_obat.id_kategori_obat where tb_obat.id_obat='".$id_obat."'");
  $result = mysqli_fetch_assoc($query);
  echo '<div id="nama_obat">'.$result['nama_obat'].'</div>';
  echo '<div id="stok">'.$result['stok'].'</div>';
  echo '<div id="nama_kategori">'.$result['nama_kategori'].'</div>';

  // echo $result['nama_obat'];
  // echo $result['stok'];
}
?>
