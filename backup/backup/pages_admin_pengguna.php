<link rel="stylesheet" href="assets/css/sweetalert.css">
<script type="text/javascript" src="assets/js/sweetalert.min.js"></script>


<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1>Selamat bekerja :  <span><?php echo " $namaakun"; ?></span> </h1>
              <div class="container">
                <!-- <h2>Large Modal</h2> -->
                <!-- Button to Open the Modal -->
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Data</button> -->
                <!-- <button type="button" class="btn btn-primary" onclick="window.location.href='?m=admin/admin_pengguna'">Tambah Data</button> -->


                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Akun</h4>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <div class="card">
                          <div class="card-body">
                            <div class="form-validation">
                              <form class="form-valide" action="" method="post">
                                <input type="hidden" name="id" id="id" value="">

                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Nama Akun <span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="namaakun" name="namaakun" placeholder="Masukan Nama Akun..">
                                  </div>
                                </div>


                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Kata Sandi<span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="password" class="form-control" id="katasandi" name="katasandi" placeholder="Masukan Kata Sandi..">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-select2-multiple">Level<span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <select class="form-control" name="level">
                                      <option value="">-Pilih-</option>
                                      <option  value="Admin">Admin</option>
                                      <option  value="Dokter">Dokter</option>
                                      <option  value="Karyawan">Karyawan</option>
                                      <option  value="Pasien">Pasien</option>
                                      <option  value="Kepala">Kepala Puskesmas</option>
                                    </select>
                                    <!-- </select> -->
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Pertanyaan Keamanan<span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <select class="form-control" name="pertanyaan">
                                      <option name="" value="" >-Pilih-</option>
                                      <option  value="satu" >Dimana Anda Dilahirkan ?</option>
                                      <option  value="dua" >Siapa Nama Sahabat Waktu Anda Kecil ?</option>
                                      <option  value="tiga" >Berapa ukuran Sepatu Anda ?</option>
                                      <option  value="emapat" >Apa cita-cita Anda Sewaktu Kecil ?</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Jawaban Pertanyaan Keamanan <span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="jawaban" name="jawaban" placeholder="Masukan Jawaban..">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary" name="tambah_akun">Simpan</button>
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



        <section id="main-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="bootstrap-data-table-panel">
                  <div class="table-responsive">
                    <table id="bootstrap-data-table-export" class="table table-striped ">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Jenis Akun</th>
                          <th>Pertanyaan Keamanan</th>
                          <th>Jawaban Pertanyaan Keamanan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $n=0;
                        include '../backend/koneksi.php';
                        $query = mysqli_query($conn, "select * from tb_akun");
                        while ($a = mysqli_fetch_array($query)) {
                          $n=$n+1;
                          ?>
                          <tr>
                            <td><?php echo "$n"?>.</td>
                            <td><?php echo $a['namaakun'];?></td>
                            <td><?php echo $a['level'];?></td>
                            <td><?php echo $a['pertanyaan'];?></td>
                            <td><?php echo $a['jawaban'];?></td>

                            <td>
                              <form class="" action="#" method="post">
                                  <input type="text" name="id_akun" id="id_akun" value="<?php echo $a['id_akun'];?>">
                                  <?php
                                  $id=$a['id_akun'];
                                  ?>
                                  <button type="submit" name="hapus_akun" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i>Hapus</button>
                              </form>


                              <?php
                              $id=$a['id_akun'];
                              ?>
                              <form class="" action="#" method="post">


                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $id;?>"> <i class="fa fa-user"></i> Lihat</button>
                                <button type="button" class="btn btn-default btn-flat btn-sm" > <i class="fa fa-edit"></i> Edit</button>
                                <button type="hidden" name="hapus_akun" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i>Hapus</button>
                                <!-- ======================================================== -->

                                <div class="container">
                                  <div class="modal fade" id="myModalihats<?php echo $id;?>" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <?php
                                        include '../backend/koneksi.php';
                                        $lihat=mysqli_query($conn,"select * from tb_akun where id='$id'");
                                        while ($out = mysqli_fetch_object($lihat)) {
                                          ?>
                                          <input type="hidden" name="id" value="<?php echo $id;?>">
                                          <!-- Modal Header -->
                                          <div class="modal-header">
                                            <h4 class="modal-title">Tambah Data Akun</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>

                                          <!-- Modal body -->
                                          <div class="modal-body">
                                            <div class="card">
                                              <div class="card-body">
                                                <div class="form-validation">
                                                  <form class="form-valide" action="" method="post">
                                                    <input type="hidden" name="id" id="id" value="">

                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">Nama Akun <span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="text" class="form-control" value="<?php echo "$out->namaakun"?>">
                                                      </div>
                                                    </div>


                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">Kata Sandi<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="text" class="form-control"  value="<?php echo "$out->katasandi"?>">
                                                      </div>
                                                    </div>

                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">Level<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="text" class="form-control"  value="<?php echo "$out->level"?>">
                                                      </div>
                                                    </div>

                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">pertanyaan<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="txt" class="form-control"  value="<?php echo "$out->pertanyaan"?>">
                                                      </div>
                                                    </div>

                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">Jawaban<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="txt" class="form-control"  value="<?php echo "$out->jawaban"?>">
                                                      </div>
                                                    </div>

                                                  </form>
                                                </div>
                                              </div>
                                            <?php } ?>
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


                                <!--  ######################################################################################################################################################################-->


                                <!-- ======================================================== -->

                              </div>
                            </form>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /# card -->
        </div>
        <!-- /# column -->
      </div>
    </section>



    <!-- Modal ############################################################################################  -->




  </div>
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


<div id="search">
  <button type="button" class="close">×</button>
  <form>
    <input type="search" value="" placeholder="type keyword(s) here" />
    <button type="submit" class="btn btn-primary">Search</button>
  </form>
</div>

<!-- jquery vendor -->
<script src="assets/js/lib/jquery.min.js"></script>
<!-- <script src="assets/js/lib/jquery.nanoscroller.min.js"></script> -->
<!-- nano scroller -->
<!-- <script src="assets/js/lib/menubar/sidebar.js"></script> -->
<!-- <script src="assets/js/lib/preloader/pace.min.js"></script> -->
<!-- sidebar -->

<!-- bootstrap -->

<script src="assets/js/scripts.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/buttons.dataTables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.flash.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/datatables-init.js"></script>
