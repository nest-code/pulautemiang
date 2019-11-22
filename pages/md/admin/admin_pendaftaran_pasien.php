  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h1><b>Data Pasien</b> Pendaftaran Pasien  </h1>
              </div>
            </div>
          </div>
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="?m=admin/admin_pasien">Data Pasien</a></li>
                  <li class="breadcrumb-item active">Pendaftaran Pasien</li>
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
                  <div class="card-title">  </div>
                  <div class="card-body">
                    <div class="basic-elements">
                      <form>
                        <div class="row">
                          <div class="col-lg-12">
                            <input class="form-control" type="hidden" name="id_pasien" placeholder="id_pasien"  readonly=""  >
                            <div class="form-group">
                              <label>Nama Pasien</label>
                              <input type="text" class="form-control"  name="nama" placeholder="Masukan Nama Pasien..." >
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
                              <label>Golongan Darah</label>
                              <select class="form-control" name="gol_darah">
                                <option>-Pilih-</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
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
                              <label>Alamat</label>
                              <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan Alamat.." required></textarea>
                            </div>
                            <div class="form-group">
                              <label>No HP</label>
                                <input type="text" class="form-control" name="no_hp" placeholder="Masukan Nomor HP.." required>
                            </div>
                            <div class="" align="center">
                            <button type="submit" name="tambah_pendaftaran" class="btn btn-primary">Simpan</button>
                            <button type="button" name=""class="btn btn-danger">Batal</button>
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

          <div class="row">
            <div class="col-lg-12">
              <div class="footer">
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
