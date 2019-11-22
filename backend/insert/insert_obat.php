<?php
// include '../koneksi.php';

$id_obat = $_POST['id_obat'];
$nama_obat = $_POST['nama_obat'];
$id_kategori_obat = $_POST['id_kategori_obat'];
$tgl_kedaluarsa = $_POST['tgl_kedaluarsa'];

$harga_satuan = $_POST['harga_satuan'];
$stok = $_POST['stok'];
// $keterangan = $_POST['keterangan'];

// $id_akun = $_POST['id_akun'];

  $sql = mysqli_query($conn, "insert into tb_obat values ('','$nama_obat','$id_kategori_obat','$tgl_kedaluarsa','$harga_satuan','$stok')");
  if($sql){
    echo
    '<script>

    alert("Berhasil menambahkan data.");
    document.location="/pulautemiang/index.php?m=admin/admin_obat";

    </script>';


  }else{
    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
  }

   ?>
