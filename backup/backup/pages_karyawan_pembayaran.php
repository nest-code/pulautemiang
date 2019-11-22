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
                          <th>Nama</th>
                          <th>Tanggal Pemeriksaaan</th>
                          <th>Biaya</th>
                          <th>Status Bayar</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                        $n=0;
                        include '../backend/koneksi.php';
                        $query = mysqli_query($conn, "select * from tb_pasien");
                        while ($a = mysqli_fetch_array($query)) {
                          $n=$n+1;
                          ?>
                          <tr>
                            <td><?php echo "$n"?>.</td>
                            <td><?php echo $a['nama'];?></td>
                            <td><?php echo $a['jk'];?></td>
                            <td><?php echo $a['tgl_lahir'];?></td>
                            <td><?php echo $a['alamat'];?></td>
                            <td class="color-primary">
                              <?php
                              $id_pasien=$a['id_pasien'];
                              ?>
                              <form class="" action="" method="post">

                                <form class="" action="cetak/print_kartu_berobat.php" method="post">
                                  <input type="text" name="id_pasien" >
                                    <button type="submit" class="btn btn-warning btn-sm" >   <i class="ti-printer"></i> Cetak Kartu Berobat</button>
                                </form>

                                <button type="button" class="btn btn-warning btn-sm"  name="cetak_kartu">   <i class="ti-printer"></i> Cetak Kartu Berobat</button>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $id_pasien;?>"> <i class="fa fa-user"></i> Lihat</button>
                                <button type="button" class="btn btn-default btn-flat btn-sm" > <i class="fa fa-edit"></i> Edit</button>
                                <button type="submit" name="delete_pasien" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i> Hapus</button>


                                <!-- Modal ############################################################################################  -->
                                <div class="container">
                                  <div class="modal fade" id="myModalihats<?php echo $id_pasien;?>" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <?php
                                        include '../backend/koneksi.php';
                                        $lihat=mysqli_query($conn,"select * from tb_pasien where id_pasien='$id_pasien'");
                                        while ($out = mysqli_fetch_object($lihat)) {
                                          ?>
                                          <input type="hidden" name="id_pasien" value="<?php echo $id_pasien;?>">
                                          <!-- Modal Header -->
                                          <div class="modal-header">
                                            <h4 class="modal-title">Data Pasien</h4>
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
                                                        <input type="text" class="form-control" value="<?php echo "$out->id_pasien"?>" readonly="">
                                                      </div>
                                                    </div>


                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">Nama Pasien<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="text" class="form-control"  value="<?php echo "$out->nama"?>" readonly="">
                                                      </div>
                                                    </div>

                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">Tanggal Lahir<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="text" class="form-control"  value="<?php echo "$out->tgl_lahir"?>" readonly="">
                                                      </div>
                                                    </div>

                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">Jenis Kelamin<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="txt" class="form-control"  value="<?php echo "$out->jk"?>" readonly="">
                                                      </div>
                                                    </div>

                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">Agama<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="txt" class="form-control"  value="<?php echo "$out->agama"?>" readonly="">
                                                      </div>
                                                    </div>

                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">Pekerjaan<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="txt" class="form-control"  value="<?php echo "$out->pekerjaan"?>" readonly="">
                                                      </div>
                                                    </div>

                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">Pendidikan<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="txt" class="form-control"  value="<?php echo "$out->pendidikan"?>" readonly="">
                                                      </div>
                                                    </div>

                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">Alamat<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="txt" class="form-control"  value="<?php echo "$out->alamat"?>" readonly="">
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


                              </div>
                            </div>
                          </div>
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
      <!-- /# card -->
    </div>
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
