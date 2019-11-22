<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Puskesmas Pulau Temiang | Pelayanan</title>
  <link rel="shortcut icon" href="/pulautemiang/images/logos/logo.png">
  <link href="/pulautemiang/assets/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="/pulautemiang/assets/css/lib/themify-icons.css" rel="stylesheet">
  <link href="/pulautemiang/assets/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="/pulautemiang/assets/css/lib/helper.css" rel="stylesheet">
  <link href="/pulautemiang/assets/css/style.css" rel="stylesheet">
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">

  <?php
  // include_once 'link/css.php';
   ?>
</head>
<body style="background-color:#343957"; >


  <?php
  if(isset($_POST['submit'])){
    // $host = "localhost";
    // $username = "root";
    // $pass = "";
    // $db = "db_temiang";
    // $conn = mysqli_connect($host, $username, $pass, $db);
    include_once '../../backend/koneksi.php';
    $nama_akun= $_POST['nama_akun'];


    // $sql = mysqli_query($conn,"SELECT nama_akun FROM `tb_akun` where nama_akun='$nama_akun'") or die(mysqli_error($conn));
    $sql = mysqli_query($conn,"SELECT nama_akun FROM `tb_akun` where nama_akun='$nama_akun'") or die(mysqli_error($conn));
    $row = mysqli_num_rows($sql);

    // var_dump($row);
    // die();

    // echo '<script>alert("Berhasil menyimpan data.   echo "$nama_akun);</script>';
    // echo '<script>alert("Berhasil menyimpan data.   echo "$nama_akun";"); document.location="edit_pasien.php?id_pasien='.$id_pasien.'";</script>';


    // Kalau username sudah ada yang pakai
    if ($row > 0){
      $nama_akun= $_POST['nama_akun'];
      $cek = mysqli_query($conn,"SELECT id_akun FROM `tb_akun` where nama_akun='$nama_akun'") or die(mysqli_error($conn));
      // $data = mysqli_fetch_assoc($cek);
      $data = mysqli_fetch_array($cek);
       // echo $data['id_akun'];
       $akun=$data['id_akun'];

      // ditemukan
      // echo "Nama Akun Tidak Ditemukan";
      // echo '<script>alert("Berhasil menyimpan data."); document.location="/pulautemiang/pages/md/cetak/print_no_antrian.php?id_pasien='.$id_pasien.'";</script>';
      header('Location: reset.php?id_akun='.$akun.'');
    }
    // Kalau username valid, inputkan data ke tabel users
    else{
      echo '<script>alert("Maaf Nama Akun tidak ditemukan, silahkan hubungi bagian admin puskesmas"); </script>';

      // <script> echo 'Nama Akun tidak ditemukan ?"); </script>';
      // echo "Nama Akun Tidak Ditemukan";
    }
  }

    ?>
    <div class="unix-login">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="login-content">
              <div class="login-logo">
              </div>
              <div class="login-form">
                <h4>Reset Kata Sandi</h4>
                <form class="" action="forget.php" method="post">
                <form class="" action="forget.php" method="post">
                  <div class="form-group">
                    <label>Nama Akun</label>
                    <input type="text" class="form-control" placeholder="Nama Akun.." name="nama_akun">
                    <br>
                    <span>*untuk mereset kata sandi akun, masukkan nama akun anda</span>
                  </div>
                  <!-- <button type="submit" name="submit" value="submit" class="btn btn-primary btn-flat m-b-15">Kirim</button> -->
                  <button type="submit" name="submit"  value="submit" class="btn btn-primary">OKE</button>

                  <!-- <button onclick="classic()">Normal Alert</button> -->

                  <!-- <button onclick="sweet()">Sweet Alert</button> -->

                  <!-- <button type="button" class="btn btn-success btn-sm"       onclick="antrian(<?php echo $a['id_pasien']?>);"  title=" Daftar Antrian "><i class="fa fa-table" aria-hidden="true"></i> Daftar Antrian</button> -->

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>

  </html>

  <script type="text/javascript">
  function normal () {
alert("Normal Alert!");
}
  </script>


  <script type="text/javascript">
  function antrian(id){
    var antrian = id;
    let cek=0;
    $.ajax({
      url:"/pulautemiang/backend/validasi.php",
      method:"POST",
      data: {id:antrian
      },
      success:function(data){
        var $response = $(data);
        cek = $response.filter('#cek').text();
        if (cek==1) {
          swal({
            title: "Pasien sudah Terdaftar",
            text: "Pasien telah terdaftar pada antrian berobat",
            type: "warning",
            confirmButtonColor: "#6495ED",
            confirmButtonText: "Kembali",
            closeOnConfirm: false
          },
        );

      }else{
        window.location.href='/pulautemiang/pages/md/petugas/view/view_pendaftaran.php?id_pasien='+antrian;
      }
    }
  })
}
</script>
