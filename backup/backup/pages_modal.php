<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1>Hello, <span>Welcome Here</span></h1>
              <div class="container">
                <!-- <h2>Large Modal</h2> -->
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Tambah Data
                </button>


                <div id="ModalKegiatan" class="modal fade" role="dialog">
                  <div class="modal-dialog" style="width:715px">

                    <!-- Modal content-->
                    <form action="#" method="post" enctype="multipart/form-data">
                      <div class="modal-content">
                        <!-- heading modal -->
                        <div align="center" class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">NOMOR REGISTRASI</h4>
                        </div>
                        <!-- body modal -->
                        <div class="modal-body">
                          <input type="hidden" name="no_registrasi" >
                          <div class="container">
                            <div class="panel panel-default" style="width:650px">
                              <div class="panel-heading">
                                <h4>PENDUDUK</h4>
                              </div>
                              <div class="panel-body">
                                <div class="table-responsive">
                                  <table class="table">
                                    <tr>
                                      <td width="150px">Nomor Identitas</td>
                                      <td>:</td>
                                      <td><input type="text" maxlength="20" name="population_nik" id="nik" class="form-control"  placeholder="Nomor Identitas" required="true"  onkeypress="return isNumberKey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                                    </tr>
                                    <tr>
                                      <td width="150px">Nama Lengkap</td>
                                      <td>:</td>
                                      <td><input type="text" maxlength="50" name="population_name" value="" class="form-control" placeholder="isi nama lengkap anda" required="true"></td>
                                    </tr>
                                    <tr>
                                      <td width="150px">Alamat</td>
                                      <td>:</td>
                                      <td><input type="text" maxlength="200" name="population_place" value="" class="form-control" placeholder="isi alamat anda" required="true"></td>
                                    </tr>
                                    <tr>
                											<td width="150px">Tanggal Lahir</td>
                											<td>:</td>
                											<td><input type="date"  value="<?php echo date('1990-m-d'); ?>" max="<?php echo date('Y-m-d'); ?>" name="population_birthday"  class="form-control" placeholder="isi tgl lahir anda" required="true"oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"  onkeypress="return isAlphabetkey(event)"></td>
                										</tr>
                                    <tr>
                                      <td width="150px">RT</td>
                                      <td>:</td>
                                      <td><input type="text" maxlength="3" name="population_rt" value="" class="form-control" placeholder="isi RT" required="true"  onkeypress="return isNumberKey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                                    </tr>
                                    <tr>
                                      <td width="150px">RW</td>
                                      <td>:</td>
                                      <td><input type="text" maxlength="3" name="population_rw" value="" class="form-control" placeholder="isi RW" required="true"  onkeypress="return isNumberKey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                                    </tr>
                                    <tr>
                                      <td width="150px">Kelurahan</td>
                                      <td>:</td>
                                      <td><input type="text" maxlength="200" name="population_kelurahan" value="" class="form-control" placeholder="isi kelurahan" required="true"  onkeypress="return isAlphabetkey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                                    </tr>
                                    <tr>
                                      <td width="150px">Kecamatan</td>
                                      <td>:</td>
                                      <td><input type="text" maxlength="25" name="population_kecamatan" value="" class="form-control" placeholder="isi kecamatan" required="true"  onkeypress="return isAlphabetkey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                                    </tr>
                                    <tr>
                                      <td width="150px">Provinsi</td>
                                      <td>:</td>
                                      <td><input type="text" maxlength="25" name="population_provinsi" value="" class="form-control" placeholder="isi provinsi" required="true"  onkeypress="return isAlphabetkey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                                    </tr>
                                    <tr>
                                      <td width="150px">Pekerjaan</td>
                                      <td>:</td>
                                      <td>
                                        <select name="population_work" class="form-control"  required >
                                          <option value="">-Pilih-</option>
                                          <option value="PNS">PNS</option>
                                          <option value="Pelajar">Pelajar</option>
                                          <option value="Wiraswasta">Wiraswasta</option>
                                          <option value="Mahasiswa">Mahasiswa</option>
                                          <option value="Tani">Tani</option>
                                          <option value="Ibu Rumah Tangga">Ibu rumah tangga</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td width="150px">Status</td>
                                      <td>:</td>
                                      <td><select name="population_status" class="form-control" required >
                                        <option value="">-Pilih-</option>
                                        <option value="Belum Menikah">Belum Kawin</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Janda">Janda</option>
                                        <option value="Duda">Duda</option>
                                      </select></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>

                            </div>
                          </div>

                          <div class="container">
                            <div class="panel panel-default" style="width:650px">
                              <div class="panel-heading">
                                <h4>KETERANGAN KEGIATAN</h4>
                              </div>
                              <div class="panel-body">
                                <div class="table-responsive">
                                  <table class="table">

                                    <tr>
                                      <td width="150px">Nama Kegiatan</td>
                                      <td>:</td>
                                    	<td><input type="text"  maxlength="25"  name="apc_activity"  class="form-control" placeholder="isi Nama Kegiatan" required="true" onkeypress="return isAlphabetkey(event)"oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                                   </tr>

                                   <tr>
                                     <td width="150px">Alamat Kegiatan</td>
                                     <td>:</td>
                                    <td><input type="text"  maxlength="25"  name="apc_place"  class="form-control" placeholder="isi Nama Kegiatan" required="true" onkeypress="return isAlphabetkey(event)"oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                                  </tr>


                                    <tr>
                											<td width="150px">Tanggal Mulai</td>
                                      <td>:</td>
                											<td><input type="date" value="<?php echo date('Y-m-d'); ?>" name="apc_date_start"  class="form-control" placeholder="isi tgl " required="true" onkeypress="return isNumberKey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" onkeypress="return isAlphabetkey(event)" > </td>
                									</tr>
                                    </tr>
                                    <tr>
                											<td width="150px">Tanggal Selesai</td>
                											<td>:</td>
                											<td><input type="date" value="<?php echo date('Y-m-d'); ?>" name="apc_date_end"  class="form-control" placeholder="isi tgl selesai" required="true" onkeypress="return isNumberKey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" onkeypress="return isAlphabetkey(event)" > </td>
                										</tr>
                										<tr>
                											<td width="150px">Waktu Mulai</td>
                											<td>:</td>
                											<td><input type="time" name="apc_time_start"  value="<?php echo date("g:i:s"); ?>" class="form-control" placeholder="isi waktu mulai" required="true" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                										</tr>
                                    <tr>
                                      <td width="150px">Waktu Selesai</td>
                                      <td>:</td>
                                      <td><input type="time" name="apc_time_end"  value="<?php echo date("g:i:s"); ?>" class="form-control" placeholder="isi waktu end" required="true" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                                    </tr>
                                    <tr>
                                      <td width="150px">Keterangan</td>
                                      <td>:</td>
                                      <td><textarea type="text" maxlength="20" name="apc_information"  class="form-control" placeholder="isi keterangan" required="true" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br>
                          <div align="center">
                            <p>&nbsp;</p>
                            <button type="submit" name="applicant_activity" class="btn btn-primary"><i class="fa fa-send"></i> Kirim</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Obat</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <div class="card">
                          <div class="card-body">
                            <div class="form-validation">
                              <form class="form-valide" action="" method="post">
                                <input type="hidden" name="id_obat" value="" id="id_obat">

                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Nama Obat <span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="nama_obat" name="nama_obat" placeholder="Masukan nama Obat..">
                                  </div>
                                </div>


                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Satuan<span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Masukan Satuan Obat..">
                                  </div>
                                </div>


                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Stok<span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukan Jumlah Obat..">
                                  </div>
                                </div>


                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Keterangan <span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan Obat..">
                                  </div>
                                </div>


                                <div class="form-group row">
                                  <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary" name="tambah_obat">Simpan</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>

                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
          <div class="page-header">
            <div class="page-title">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Table-Basic</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /# column -->
      </div>







      <!-- /# row -->
      <section id="main-content">
        <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <div class="card-title">
                <h4>Table Bordered </h4>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Price</th>
                        <th>Price</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                      $query = mysqli_query($conn, "select * from tb_obat");
                      while ($a = mysqli_fetch_array($query)) {
                        $n=$n+1;
                        ?>
                        <tr>
                          <td><?php echo "$n"?>.</td>
                          <td><?php echo $a['nama_obat'];?></td>
                          <td><?php echo $a['satuan'];?></td>
                          <td><?php echo $a['stok'];?></td>
                          <td><?php echo $a['keterangan'];?></td>
                          <td>
                            <?php
                            $id_obat=$a['id_obat'];
                            ?>

                          <form class="" action="" method="get">
                            <?php echo $id_obat;?>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalsa" data-target="#myModals <?php echo $id_obat;?>"><i class="fa fa-user"></i> Lihat</button>

                            <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModals <?php echo $id_obat;?>"><i class="fa fa-user"></i> Lihat</button> -->
                            <button type="submit" name="delete_obat" class="btn btn-danger"><i class="fa fa-eraser"></i> Hapus</button>
                            <div class="modal fade" id="myModalsa">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">Tambah Data Obat</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>

                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    <?php
    																include '../backend/koneksi.php';
    																// $id_asisten = $_POST['id_asisten'];
    																$lihat=mysqli_query($conn,"select * tb_obat where id_obat='$id_obat'");

    																while ($out = mysqli_fetch_object($lihat)) {
    																	?>
    																	<input type="hidden" name="id_obat" value="<?php echo $id_obat;?>">

                                    <div class="card">
                                      <div class="card-body">
                                        <div class="form-validation">
                                          <form class="form-valide" action="" method="post">
                                            <input type="hidden" name="id_obat" value="" id="id_obat">

                                            <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-username">Nama Obat <span class="text-danger"></span></label>
                                              <div class="col-lg-8">
                                                <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?php echo "$out->nama_obat"; ?>">
                                              </div>
                                            </div>


                                            <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-username">Satuan<span class="text-danger"></span></label>
                                              <div class="col-lg-8">
                                                <input type="text" class="form-control" id="satuan" name="satuan" value="<?php echo "$out->satuan"; ?>">
                                              </div>
                                            </div>


                                            <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-username">Stok<span class="text-danger"></span></label>
                                              <div class="col-lg-8">
                                                <input type="text" class="form-control" id="stok" name="stok" value="<?php echo "$out->stok"; ?>">
                                              </div>
                                            </div>


                                            <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-username">Keterangan <span class="text-danger"></span></label>
                                              <div class="col-lg-8">
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo "$out->keterangan"; ?>">
                                              </div>
                                            </div>


                                            <div class="form-group row">
                                              <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary" name="tambah_obat">Simpan</button>
                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                    	<?php } ?>
                                  </div>

                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>

                                </div>
                              </div>
                            </div>




                            </div>

                          </form>

                          </td>
                      </tr>

                    <?php } ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /# column -->

          <!-- /# column -->
        </div>
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
