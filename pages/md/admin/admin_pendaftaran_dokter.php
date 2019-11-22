  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
              <h1><b>Data Dokter</b> | Pendaftaran Dokter  </h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="?m=admin/admin_pasien">Data Dokter</a></li>
                  <li class="breadcrumb-item active">Pendaftaran Dokter</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <section id="main-content">
          <form class="" action="" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-title"></div>
                  <div class="card-body">
                    <div class="basic-elements">
                      <form>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Nama NIP</label>
                              <input type="text" class="form-control"  name="nip" placeholder="Masukan NIP Dokter..." min="18" required maxlength="18"  onkeypress="return isNumberKey(event)" >
                            </div>
                            <div class="form-group">
                              <label>Nama Dokter</label>
                              <input type="text" class="form-control"  name="nama" placeholder="Masukan Nama Dokter...">
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
                              <label>Tanggal Lahir</label>
                              <input type="date" class="form-control" name="tgl_lahir">
                            </div>
                            <div class="form-group">
                              <label>Agama</label>
                              <select class="form-control" name="agama">
                                <option>-Pilih-</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hinddu">Hindu</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Alamat</label>
                              <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan Alamat.." required></textarea>
                            </div>
                            <div class="form-group">
                              <label>NO HP</label>
                              <input type="text" class="form-control"  name="no_hp" placeholder="Masukan NO HP Dokter..." required maxlength="14"  onkeypress="return isNumberKey(event)">
                            </div>
                              <div class="form-group">
                                <label>Foto</label>
                                <input type="file" class="form-control"  name="foto" placeholder="Pilih Foto">
                              </div>
                            <div class="form-group">
                              <label>Jenis Poli</label>
                                <select class="form-control" name="id_jenis_poli">
                                    <option>-Pilih-</option>
                                  <?php
                                  $n=0;
                                  include '../backend/koneksi.php';
                                  $query = mysqli_query($conn, "select * from tb_jenis_poli");
                                  while ($a = mysqli_fetch_array($query)) {
                                    $n=$n+1;
                                    ?>
                                    <option value="<?php echo $a['id_jenis_poli'];?>"><?php echo $a['nama_jenis'];?></option>
                                    <?php
                                  }?>
                                </select>
                            </div>
                          </div>

                          <div class="col-lg-6">


                            <!-- <div class="form-group"> -->
                              <!-- <label>ID</label> -->
                              <input class="form-control" type="hidden" name="id_akun" value="<?php echo date('dmYHis'); ?>" readonly>
                            <!-- </div> -->

                            <div class="form-group">
                              <label>Nama Akun</label>
                              <input class="form-control" type="text" name="nama_akun" required >
                            </div>

                            <div class="form-group">
                              <label>Kata Sandi</label>
                              <input class="form-control" type="password" value="password" name="kata_sandi" required>
                            </div>

                            <div class="form-group">
                              <label>Jenis Akun</label>
                              <input class="form-control" type="text" name="level" value="Dokter" readonly="">
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


                              <div class="col-sm-7" align="right">
                                <button type="submit" name="tambah_pendaftaran_dokter" class="btn btn-primary">Simpan</button>
                                <button type="button" name=""class="btn btn-danger">Batal</button>
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
  <!-- sidebar -->

  <!-- bootstrap -->


  <script src="assets/js/scripts.js"></script>
  <!-- scripit init-->

  <script type="text/javascript">

  function isNumberKey(evt)
  {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
    return true;
  }

  </script>
