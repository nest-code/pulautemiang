<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Masuk Sistem</title>
  <!-- Styles -->
  <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
  <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/lib/helper.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/pulautemiang/css/sweetalert.css">
  <script type="text/javascript" src="/pulautemiang/js/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="images/logos/logo.png">
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

            <h1>  <a href="#"><span>Puskesmas Pulau Temiang</span></a></h1>
            </div>
            <div align="center">
          
            </div>


            <div class="login-form">
              <!-- <h4>Masuk Sistem</h4> -->
              <div id="login">
                <form method="post" action="">
                  <!-- <input type="hidden" name="id" value="" id="namaakun"> -->
                  <div class="form-group">
                    <label>Nama Akun</label>
                    <input type="text" class="form-control" placeholder="Nama Akun"  name="namaakun"  id="namaakun" required>
                  </div>

                  <div class="form-group">
                    <label>Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="Kata Sandi"  name="katasandi" id="myInput"  required> <i class="glyphicon glyphicon-eye-open form-control-feedback"></i>
                  </div>

                  <div class="checkbox">
                    <label class="pull-right">
                      <input type="checkbox" onclick="show()">Tampilkan Kata Sandi
                    </label>
                  </div>

                  <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"  name="login">Masuk</button>

                </div>
              </form>

              <!--  -->

              <div id="resetPassword" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Ubah Kata Sandi</h4>
                    </div>
                      <div class="modal-body">

                          <input type="hidden" name="username1" id="username1">
                          <div class="form-group row">
                            <div class="col-sm-2">
                              Pertanyaan Keamanan
                            </div>
                            <div class="col-sm-10">
                              <input type="text" name="user_question" id="pertanyaan" class="form-control" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-2">
                              Jawaban Keamanan
                            </div>
                            <div class="col-sm-10">
                              <input type="text" name="user_answer" id="jawaban" autofocus class="form-control" required="true">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group">
                              <div class="col-md-8 col-md-push-4">
                                <input type="button" onclick="keramat();" class="btn btn-primary" value="Oke">
                                <button type="reset" class="btn btn-danger">
                                  <i class="fa fa-times"></i> Batal
                                </button>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    </div>
                  </div>
                </div>
              </div>


                  <div id="gantiPass" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content -->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>

                          <h4 class="modal-title">Halaman Ubah Kata sandi</h4>
                        </div>
                          <div class="modal-body">
                            <form class="" action="backend/change_password.php" method="post">
                              <input type="hidden" name="user" id="user" class="form-control">

                              <div class="form-group row">
                                <div class="col-sm-4">
                                  Kata Sandi Baru
                                </div>
                                <div class="col-sm-8">
                                  <input type="password" name="password"  class="form-control" required maxlength="15">
                                </div>
                              </div>
                            <div class="row">
                                <div class="form-group">
                                  <div class="col-md-8 col-md-push-4">
                                    <button type="submit" class="btn btn-primary" name="ganti" >
                                      <i class="fa fa-save"></i> Oke
                                    </form>
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                      <i class="fa fa-times"></i> Batal
                                    </button>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        </div>
                      </div>
                    </div>
                  </div>

              <!--  -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

























<script type="text/javascript">
// toggle password visibility
$('#password + .glyphicon').on('click', function() {
$(this).toggleClass('glyphicon-eye-close').toggleClass('glyphicon-eye-open'); // toggle our classes for the eye icon
$('#password').togglePassword(); // activate the hideShowPassword plugin
});
</script>

<script type="text/javascript">


function cek() {
  var username = document.getElementById('username').value;
  if (username =="") {
    alert("Harap isi Nama Akun, untuk mengganti Kata Sandi ");
  }else {
    $.ajax({
      url : "backend/user_forget.php",
      type : "post",
      data : {username:username},
      success: function(data){
        var $response = $(data);
        if (data) {
          $('#pertanyaan').val($response.filter('#pertanyaan').text());
          $('#username1').val($response.filter('#username1').text());
          $('#resetPassword').modal('show');
        }else {
          alert("Nama Akun tidak ditemukan");
        }
      }
    });
  }
}

function keramat(){

  var jawaban = document.getElementById('jawaban').value;
  var username = document.getElementById('username1').value;
  // alert(jawaban);

  $.ajax({
    url : "backend/check_password.php",
    type : "post",
    data : {jawaban:jawaban,username:username},
    success: function(data){
      var $response = $(data);

      console.log(data);

        if (data){
          // $('#user').val($response.filter('#user').text());
          document.getElementById('user').value=document.getElementById('username1').value;
          $('#gantiPass').modal('show');
        }else{
          alert('Maaf Jawaban Pertanyaan Keaamanan Salah, Silahkan Temui Lurah');
        }
}
  });

}


function show() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>

<script>
function sweet (){
swal("Good job!", "You clicked the button!", "success");
}
</script>
</body>
</html>
