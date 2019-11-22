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
</head>


<?php
if(isset($_POST['submit'])){




  $jawab= $_POST['kata_sandi'];

  $id =$_POST['id_akun'];
  $akuns= $_POST['kata_sandi'];


  $host = "localhost";
  $username = "root";
  $pass = "";
  $db = "db_temiang";
  $conn = mysqli_connect($host, $username, $pass, $db);

  // $sql = mysqli_query($conn,"SELECT * FROM tb_akun where id_akun='$akuns'") or die(mysqli_error($conn));
  $sql = mysqli_query($conn,"UPDATE tb_akun SET kata_sandi='$jawab' WHERE id_akun='$id'") or die(mysqli_error($conn));



  if($sql){
    echo '<script>alert("Berhasil menyimpan data."); document.location="/pulautemiang/";</script>';
  }else{
    echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
  }



}



?>
<body style="background-color:#343957"; >
  <?php
  // $host = "localhost";
  // $username = "root";
  // $pass = "";
  // $db = "db_temiang";
  // $conn = mysqli_connect($host, $username, $pass, $db);

  $host = "localhost";
  $username = "root";
  $pass = "";
  $db = "db_temiang";

  	$conn = mysqli_connect($host, $username, $pass, $db);

  $akun= $_GET['id_akun'];
  // $jakun=$akun;
  $query = mysqli_query($conn, "  SELECT * FROM tb_akun where id_akun= '$akun'");
  $data = mysqli_fetch_array($query);
  $jakun=$data['id_akun'];

  $tanya=$data['jawaban'];




  ?>







  <div class="unix-login">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="login-content">
            <div class="login-logo">
              <!-- <a href="index.html"><span>Focus</span></a> -->
            </div>
            <div class="login-form">
              <h4>Reset Kata sandi</h4>
              <!-- <h1><?php echo $dataa['nama_akun']; ?></h1> -->

              <!-- <form class="" action="reset.php?id_akun <?php echo $jakun  ?> " method="post"> -->
              <form action="pwchange.php"  method="post">
                <form action="reset.php?id_akun=<?php echo "$jakun"; ?>"  method="post">


                <input type="hidden" name="id_akun" value="<?php echo $data['id_akun']; ?>">

                <div class="form-group">
                  <label>Masukan Kata Sandi Baru</label>
                  <input type="text" class="form-control" name="kata_sandi" placeholder="Kata Sandi Baru..">
                </div>

                <button type="submit" name="submit"  value="submit" class="btn btn-primary">Simpan</button>
                <!-- <button type="submit" class="btn btn-primary btn-flat m-b-15">Kirim</button> -->

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
