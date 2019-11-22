<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rekam Medis</title>
</head>

<body>
  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                  <h1>Selamat bekerja :  <span><?php echo " $namaakun"; ?></span> </h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">

                  <li class="breadcrumb-item"><a href="?m=admin/admin_pasien">Data Pasien</a></li>
                  <li class="breadcrumb-item active">Rekam Medis</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <section id="main-content">
          <form class="" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-title">
                    <!-- <h4>Pendaftaran Pasien</h4> -->
                  </div>
                  <div class="card-body">
                    <div class="basic-elements">
                      <form>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>NO Rekam Medis</label>
                              <input type="text" class="form-control"  name="no_rm" readonly>
                            </div>

                            <div class="form-group">
                              <label>Tanggal Pertama Rekam</label>
                              <input type="date" class="form-control" name="tgl_rekam" value="<?php echo date('d-m-Y'); ?>" >
                            </div>

                            <div class="form-group">
                              <label>RPT</label>
                              <input type="text" class="form-control" name="rpt" placeholder="Masukan Rpt.." required>
                            </div>

                            <div class="form-group">
                              <label>RPO</label>
                              <textarea class="form-control" rows="3" name="rpo" placeholder="Masukan Rpt.." required></textarea>
                            </div>

                          </div>


                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Riwayat Alergi Makan</label>
                                <input type="text" class="form-control" name="riw_alergi_mkn" placeholder="Masukan riwayat makan.." required>
                            </div>

                            <div class="form-group">
                              <label>Riwayat Alergi Obat</label>
                                <input type="text" class="form-control" name="riw_alergi_obat" placeholder="Masukan Riwayat Alergi Ayah.." >
                            </div>

                            <div class="form-group">
                              <label>Riwayat Operasi</label>
                                <input type="text" class="form-control" name="riw_operasi" placeholder="Masukan Riwayat Operasi.." >
                            </div>

                            <div class="form-group">
                              <label>Riwayat Penyakit </label>
                                <input type="text" class="form-control" name="riw_penyakit" placeholder="Masukan Riwayat Penyakit.." >
                            </div>

                            <div class="form-group">
                              <label>Riwayat Penyakit Ayah</label>
                                <input type="text" class="form-control" name="riw_ayah" placeholder="Masukan Riwayat Penyakit Ayah..">
                            </div>

                            <div class="form-group">
                              <label>Riwayat Penyakit Ibu</label>
                                <input type="text" class="form-control" name="riw_ibu" placeholder="Masukan Riwayat Penyakit Ibu">
                            </div>

                            <div class="form-group">
                                <div class="" align="center">
                                <button type="submit"  name="submit"  value="submit" class="btn btn-primary">Simpan</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!-- /# row -->


          <div class="row">
            <div class="col-lg-12">
              <div class="footer">
                <!-- <p>2019 © Puskesmas Pulau Temiang<a href="#">example.com</a></p> -->
                <p>2019 © Puskesmas Pulau Temiang</p>
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
  <script src="assets/js/scripts.js"></script>
  <script type="text/javascript">

  function isNumberKey(evt)
  {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
    return true;
  }
  </script>
</body>

</html>
