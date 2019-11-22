<?php
include '/koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($conn,"SELECT * FROM tb_dokter inner join tb_user on  tb_dokter.id_akun = tb_akun.id_akun  where tb_akun.id_akun = '$id'");
$row = mysqli_fetch_object($sql);
?>

<div id="nip"><?php echo $row->nip;?></div>
<div id="nama"><?php echo $row->nama;?></div>
<div id="jk"><?php echo $row->jk;?></div>
<div id="tgl_lahir"><?php echo $row->tgl_lahir;?></div>
<div id="alamat"><?php echo $row->alamat;?></div>
<div id="agama"><?php echo $row->agama;?></div>
<div id="no_hp"><?php echo $row->no_hp;?></div>
<div id="status"><?php echo $row->status;?></div>
<div id="id_jenis_poli"><?php echo $row->id_jenis_poli;?></div>

<div id="id_akun"><?php echo $row->id_akun;?></div>

<div id="namaakun"><?php echo $row->namaakun;?></div>
<div id="katasandi"><?php echo $row->katasandi;?></div>
<div id="level"><?php echo $row->level;?></div>
<div id="pertanyaan"><?php echo $row->pertanyaan;?></div>
<div id="jawaban"><?php echo $row->jawaban;?></div>
