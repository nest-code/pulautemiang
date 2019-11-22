<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Pelayanan Puskesmas</title>
  <link rel="shortcut icon" href="img/logo.png">
  <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
  <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/lib/helper.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="/pulautemiang/assets/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
</head>
<style media="screen">
#password + .glyphicon {
cursor: pointer;
pointer-events: all;
}

/* Styles for CodePen Demo Only */
#wrapper {
max-width: 500px;
margin: auto;
padding-top: 25vh;
}
</style>

<?php
include 'backend/kontroller.php';
?>

<body style="background-color:#343957"; >
  <div class="unix-login">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="login-content">
            <div class="login-logo">
              <div align="center" width="500px">
                <img src="/pulautemiang/img/logo.png">
              </div>
            <h1>  <a href="#"><span>Puskesmas Pulau Temiang</span></a></h1>
            <br>
            </div>

            <div class="login-form">
              <div id="login">
                <form method="post" action="">
                  <br>
                  <div class="form-group">
                    <label>Nama Akun</label>
                    <input type="text" class="form-control" placeholder="Nama Akun"  name="nama_akun"  id="nama_akun" required>
                  </div>
                  <div class="form-group">
                    <label>Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="Kata Sandi"  name="kata_sandi" id="myInput"  required> <i class="glyphicon glyphicon-eye-open form-control-feedback"></i>
                  </div>
                  <label class="pull-left">
										<a href="/pulautemiang/pages/md/forget.php">Lupa Kata sandi?</a>
									</label>
                  <div class="checkbox">
                    <label class="pull-right">
                      <input type="checkbox" onclick="show()">Tampilkan Kata Sandi
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"  name="login">Masuk</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
