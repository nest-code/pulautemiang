<?php
ob_start();
session_start();
	include_once 'koneksi.php';
  // $id_akun = $_POST['id_akun'];
	$namaakun = $_POST['nama_akun'];
	$pass = $_POST['kata_sandi'];
	// $mPass=md5($pass);
	// $query="select * from tb_akun where id_akun='$id_akun' and katasandi='$mPass'";
  $query="select * from tb_akun where nama_akun='$namaakun' and kata_sandi='$pass'";
	$login = mysqli_query($conn, $query);
	// $login = mysqli_fetch_array($login);
	// die(var_dump($login));
	// die(var_dump(mysqli_num_rows($login)));
	if (mysqli_num_rows($login)>=1) {


			while ($row= mysqli_fetch_assoc($login)) {
		      $id_akun = $row['id_akun'];
					$namaakun = $row['nama_akun'];
					$pass = $row['kata_sandi'];
					// $id_petugas = $row['id_petugas'];
					$level = $row['level'];
					}

					$_SESSION['id_akun']=$id_akun;
			    $_SESSION['nama_akun']=$namaakun;
					$_SESSION['kata_sandi']=$pass;
					$_SESSION['level']=$level;
					// $_SESSION['id_petugas']=$id_petugas;

					?>

					<!-- <link href="/pulautemiang/assets/css/lib/sweetalert/sweetalert.css" rel="stylesheet">

				  <script type="text/javascript">
				  // swal("Berhasil Login","","success");
				  // swal("Permohonan Selesai","","success");
				  swal({
				    title: "Berhasil Masuk",
				    text: "Anda berhasil Masuk",
				    type: "success",
				    confirmButtonText : "Ok",
				    closeOnConfirm : false
				  }
					,
				  function(){
				    window.location='admin/index.php';
				  }
				);
				  </script> -->
				  <?php

		header('location:/pulautemiang');
	} else {
		?>
		<?php     echo '<script>alert("Maaf Nama Akun tidak ditemukan, silahkan hubungi bagian admin puskesmas"); </script>'; ?>
		<?php
	}

?>
