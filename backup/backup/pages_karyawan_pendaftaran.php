<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ================= Favicon ================== -->
  <!-- Standard -->
  <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
  <!-- Retina iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
  <!-- Retina iPhone Touch Icon-->
  <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
  <!-- Standard iPad Touch Icon-->
  <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
  <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
  <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
  <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
  <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/lib/helper.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>


<body>

  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h1>Hello, <span>Welcome Here</span></h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active">Pendaftaran Pasien</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">

          <!-- /# row -->

          <form class="" action="#" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-title">
                    <h4>Pendaftaran Pasien</h4>

                  </div>
                  <div class="card-body">
                    <div class="basic-elements">
                      <form>
                        <div class="row">
                          <div class="col-lg-6">


                            <input class="form-control" type="hidden" name="id_pasien" placeholder="id_pasien"  readonly="">

                            <div class="form-group">
                              <label>Nama Pasien</label>
                              <input type="text" class="form-control"  name="nama" placeholder=""="Masukan Nama Pasien...">
                            </div>

                            <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <input type="date" class="form-control" name="tgl_lahir">
                            </div>

                            <div class="form-group">
                              <label>Jenis Kelamin</label>
                              <select class="form-control" name="jk">
                                <option>-Pilih-</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label>Agama</label>
                              <select class="form-control" name="agama">
                                <option>-Pilih-</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                              </select>
                            </div>


                            <div class="form-group">
                              <label>Pekerjaan</label>
                              <input type="text" class="form-control" name="pekerjaan" placeholder="Masukan Pekerjaan.." required>
                            </div>

                            <div class="form-group">
                              <label>Pendidikan</label>
                              <input type="text" class="form-control" name="pendidikan" placeholder="Masukan Pendidikan.." required>
                            </div>

                            <div class="form-group">
                              <label>Alamat</label>
                              <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan Alamat.." required></textarea>
                            </div>


                          </div>
                          <div class="col-lg-6">

                              <input class="form-control" type="hidden" name="id_akun" placeholder="id_akun"  required>
                            <div class="form-group">
                              <label>Nama Akun</label>
                              <input class="form-control" type="text" name="namaakun" required >
                            </div>

                            <div class="form-group">
                              <label>Password</label>
                              <input class="form-control" type="password" value="password" name="katasandi" required>
                            </div>

                            <div class="form-group">
                              <label>Jenis Akun</label>
                              <input class="form-control" type="text" name="level" value="Pasien" readonly="">
                            </div>

                            <div class="form-group">
                              <label>Pertanyaan Keamanan</label>
                              <select class="form-control" name="pertanyaan" >
                                <option  value="1" >Dimana Anda Dilahirkan ?</option>
                                <option  value="2" >Siapa Nama Sahabat Waktu Anda Kecil ?</option>
                                <option  value="3" >Berapa ukuran Sepatu Anda ?</option>
                                <option  value="4" >Apa cita-cita Anda Sewaktu Kecil ?</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label>Jawaban Pertanyaan</label>
                              <input class="form-control" type="text" name="jawaban" required>
                            </div>

                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="tambah_pendaftaran" class="btn btn-default">Simpan</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /# column -->

              <!-- /# column -->
            </div>
          </form>
          <!-- /# row -->


          <div class="row">
            <div class="col-lg-12">
              <div class="footer">
                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>





  <div id="search">
    <button type="button" class="close">×</button>
    <form>
      <input type="search" value="" placeholder="type keyword(s) here" />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
  </div>
  <!-- jquery vendor -->
  <script src="assets/js/lib/jquery.min.js"></script>
  <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
  <!-- nano scroller -->
  <script src="assets/js/lib/menubar/sidebar.js"></script>
  <script src="assets/js/lib/preloader/pace.min.js"></script>
  <!-- sidebar -->

  <!-- bootstrap -->


  <script src="assets/js/scripts.js"></script>
  <!-- scripit init-->





</body>

</html>
