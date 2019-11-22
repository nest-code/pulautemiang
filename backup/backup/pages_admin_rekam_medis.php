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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Tambah Data
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Rekam Medis</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <div class="card">
                          <div class="card-body">
                            <div class="form-validation">
                              <form class="form-valide" action="" method="post">
                                <input type="hidden" name="no_rm" value="" id="no_rm">

                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Nomor RM<span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="disable" class="form-control" id="no_rm" name="no_rm" >
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Nama Pasien<span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="id_pasien" name="id_pasien" placeholder="Nama Pasien..">
                                  </div>
                                </div>


                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Pemeriksa<span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan Nama ">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Tanggal  Awal Rekam<span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="date" class="form-control" id="tgl_rekam" name="tgl_rekam" >
                                  </div>
                                </div>


                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">RPT <span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="rpo" name="rpt" placeholder="Masukan RPT..">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">RPO <span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="rpo" name="rpo" placeholder="Masukan RPO..">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Riwayat Alergi Obat <span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="riw_alergi_makan" name="riw_alergi_mkn" placeholder="Masukan Riwayat alergi Obat..">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Riwayat Alergi Makan <span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="riw_alergi_obt" name="riw_alergi_obat" placeholder="Masukan Riwayat alergi Obat..">
                                  </div>
                                </div>


                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Riwayat Operasi<span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="riw_operasi" name="riw_operasi" placeholder="Masukan Riwayat Operasi..">
                                  </div>
                                </div>


                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Riwayat Penyakit Ayah <span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="riw_ayah" name="riw_ayah" placeholder="Masukan Riwayat Penyakit Ayah..">
                                  </div>
                                </div>


                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Riwayat Penyakit Ibu<span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="riw_ibu" name="riw_ibu" placeholder="Masukan Riwayat Penyakit Ibu..">
                                  </div>
                                </div>


                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Riwayat Penyakit <span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="riw_penyakit" name="riw_penyakit" placeholder="Masukan Riwayat Penyakit..">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-select2-multiple">Jaminan Kesehatan<span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <!-- <select class="js-select2 form-control" id="val-select2-multiple" name="val-select2-multiple" style="width: 100%;" data-placeholder="Choose at least two.." multiple> -->
                                    <select class="form-control" name="jaminan_kesehatan">
                                      <option value="">-Pilih-</option>
                                      <option value="Umum">UMUM </option>
                                      <option value="BPJS">BPJS</option>
                                      <option value="KIS">KIS</option>
                                      <option value="Askes">Askes</option>
                                    </select>
                                    <!-- </select> -->
                                  </div>
                                </div>



                                <div class="form-group row">
                                  <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary" name="tambah_rm">Simpan</button>
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



          <section id="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="cards">
                  <div class="bootstrap-data-table-panel">
                    <div class="table-responsive">
                      <table id="bootstrap-data-table-export" class="table table-striped ">
                        <thead>
                          <tr>
                            <!-- <th>No</th> -->
                            <th>Nomor Rekam Medis</th>
                            <th>Nama Pasien</th>
                            <th>Dokter</th>
                            <th>Tanggal Rekam</th>
                            <th>Riwayat Penyakit</th>
                            <th>Jaminan Kesehatan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $n=0;
                          include '../backend/koneksi.php';
                          $query = mysqli_query($conn, "select * from tb_rekam_medis");
                          while ($a = mysqli_fetch_array($query)) {
                            $n=$n+1;
                            ?>
                            <tr>
                              <!-- <td><?php echo "$n"?>.</td> -->
                              <td><?php echo $a['no_rm'];?></td>
                              <td></td>
                              <td></td>
                              <td><?php echo $a['tgl_rekam'];?></td>
                              <td><?php echo $a['riw_penyakit'];?></td>
                              <td><?php echo $a['jaminan_kesehatan'];?></td>


                              <td class="color-primary">
                                <?php
                                $no_rm=$a['no_rm'];
                                ?>
                                <form class="" action="" method="post">
                                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $no_rm;?>"> <i class="fa fa-user"></i> Lihat</button>
                                  <button type="button" class="btn btn-default btn-flat btn-sm" > <i class="fa fa-edit"></i> Edit</button>
                                  <button type="submit" name="delete_obat" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i> Hapus</button>

                                  <div class="container">
                                    <div class="modal fade" id="myModalihats<?php echo $no_rm;?>" role="dialog">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <?php
                                          include '../backend/koneksi.php';
                                          $lihat=mysqli_query($conn,"select * from tb_rekam_medis where no_rm='$no_rm'");
                                          while ($out = mysqli_fetch_object($lihat)) {
                                            ?>
                                            <input type="hidden" name="no_rm" value="<?php echo $no_rm;?>">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                              <h4 class="modal-title">Data Rekam Medis</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                              <div class="card">
                                                <div class="card-body">
                                                  <div class="form-validation">
                                                    <form class="form-valide" action="" method="post">
                                                      <input type="hidden" name="no_rm" id="no_rm" value="">
                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">No Rekam Medis<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="text" class="form-control" value="<?php echo "$out->no_rm"?>" readonly="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">id Pasien<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="text" class="form-control"  value="<?php echo "$out->id_pasien"?>" readonly="">
                                                        </div>
                                                      </div>


                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">NIP<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="text" class="form-control"  value="<?php echo "$out->nip"?>" readonly="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Tanggal Rekam<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="text" class="form-control"  value="<?php echo "$out->tgl_rekam"?>" readonly="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">RPT<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="txt" class="form-control"  value="<?php echo "$out->rpt"?>" readonly="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">RPO<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="txt" class="form-control"  value="<?php echo "$out->rpo"?>" readonly="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Riwayat Alergi Makan<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="txt" class="form-control"  value="<?php echo "$out->riw_alergi_mkn"?>" readonly="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Riwayat Alergi Obat<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="txt" class="form-control"  value="<?php echo "$out->riw_alergi_obat"?>" readonly="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Riwayat Operasi<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="txt" class="form-control"  value="<?php echo "$out->riw_operasi"?>" readonly="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Riwayat Ayah<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="txt" class="form-control"  value="<?php echo "$out->riw_ayah"?>" readonly="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Riwayat Ibu<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="txt" class="form-control"  value="<?php echo "$out->riw_ibu"?>" readonly="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Riwayat Penyakit<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="txt" class="form-control"  value="<?php echo "$out->riw_penyakit"?>" readonly="">
                                                        </div>
                                                      </div>


                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Jaminan Kesehatan<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="txt" class="form-control"  value="<?php echo "$out->jaminan_kesehatan"?>" readonly="">
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
                                  <!-- Modal ############################################################################################  -->
                                  <!-- ======================================================== -->
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

          <div class="modal fade" id="myModal<?php echo $id;?>" role="dialog">
            <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                <div align="center" class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Data Akun</h4>
                </div>
                <div class="modal-body">
                  <!-- body -->
                  <?php
                  include '../backend/koneksi.php';
                  // $id_asisten = $_POST['id_asisten'];
                  $lihat=mysqli_query($conn,"SELECT * FROM tb_akun WHERE id='$id'");

                  while ($out = mysqli_fetch_object($lihat)) {
                    ?>
                    <input type="hidden" name="id" value="<?php echo $id;?>">

                    <!--PELAPOR-->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4>Data Pengaduan/Pertanyaan</h4>
                      </div>
                      <div class="panel-body">
                        <div class="table-responsive">

                          <table class="table">
                            <tr>
                              <td width="175px">Nama Akun </td>
                              <td>:</td>
                              <td width="525px" id="text1"><?php echo "$out->namaakun"?></td>

                            </tr>
                            <tr>
                              <td width="175px">Kata Sandi</td>
                              <td>:</td>
                              <td width="525px" id="text2"><?php echo "$out->katasandi"?></td>

                            </tr>
                            <tr>
                              <td  width="175px">Jenis Pengguna</td>
                              <td>:</td>
                              <td width="525px" id="text3"><?php echo "$out->level"?></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
        <?php } ?>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

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
<script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<!-- <script src="assets/js/lib/menubar/sidebar.js"></script> -->
<script src="assets/js/lib/preloader/pace.min.js"></script>
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
