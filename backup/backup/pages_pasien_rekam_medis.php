<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Focus Admin: Basic Form </title>

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
                <h1>Hello, <span><?php echo " $namaakun"; ?></span></h1>
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
        </div>
        <!-- /# row -->
        <section id="main-content">

          <!-- /# row -->

        <form class="" action="" method="post">


          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-title">
                  <h4>Rekam Medis</h4>
                </div>
                <div class="card-body">
                  <div class="basic-elements">
                    <form>
                      <div class="row">
                        <div class="col-lg-6">
                            <input class="form-control" type="hidden"  value=""  readonly="">

                          <div class="form-group">
                            <label>Nomor Rekam Medis</label>
                            <input type="text" class="form-control"  value="" readonly="">
                          </div>

                          <div class="form-group">
                            <label>Nama Pasien</label>
                            <input type="text" class="form-control"   value="" readonly="">
                          </div>

                          <div class="form-group">
                            <label>Nama Dokter</label>
                            <input type="text" class="form-control"   value="" readonly="">
                          </div>

                          <div class="form-group">
                            <label>Tanggal Rekam</label>
                            <input type="date" class="form-control"   value="" readonly="">
                          </div>

                          <div class="form-group">
                            <label>RPT</label>
                            <input type="text" class="form-control"   value="" readonly="">
                          </div>

                          <div class="form-group">
                            <label>RPO</label>
                            <input type="text" class="form-control"   value="" readonly="">
                          </div>

                        </div>
                        <div class="col-lg-6">

                          <div class="form-group">
                            <label>Riwayat Alergi Makan</label>
                            <input type="text" class="form-control"   value="" readonly="">
                          </div>

                          <div class="form-group">
                            <label>Riwayat Alergi Obat</label>
                            <input type="text" class="form-control"   value="" readonly="">
                          </div>

                          <div class="form-group">
                            <label>Riwayat Operasi</label>
                            <input type="text" class="form-control"   value="" readonly="">
                          </div>
                          <div class="form-group">
                            <label>Riwayat Ayah</label>
                            <input type="text" class="form-control"   value="" readonly="">
                          </div>

                          <div class="form-group">
                            <label>Riwayat Ibu</label>
                            <input type="text" class="form-control"   value="" readonly="">
                          </div>

                          <div class="form-group">
                            <label>Riwayat Penyakit</label>
                            <input type="text" class="form-control"   value="" readonly="">
                          </div>


                          <div class="form-group">
                            <label>Jaminan Kesehatan</label>
                            <input type="text" class="form-control"   value="" readonly="">
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
