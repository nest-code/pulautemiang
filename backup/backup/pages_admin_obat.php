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
                  <!--

                -->
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
          </div>
        </div>



<section id="main-content">
  <div class="row">
        <div class="col-12">
          <div class="card">
              <div class="bootstrap-data-table-panel">
                  <div class="table-responsive">
                      <table id="bootstrap-data-table-export" class="table table-striped ">
                          <thead>
                              <tr>
                                <th>No</th>
                                <th>Name Obat</th>
                                <th>Satuan</th>
                                <th>Stok</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
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
                                <td class="color-primary">
                              <?php
                                $id_obat=$a['id_obat'];
                                ?>
                                <form class="" action="" method="post">
                                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $id_obat;?>"> <i class="fa fa-user"></i> Lihat</button>
                                  <button type="button" class="btn btn-default btn-sm" onclick="editObat(<?php echo $id_obat=$a['id_obat']; ?>)"> <i class="fa fa-edit"></i>Edit</button>
                                  <button type="submit" name="hapus_obat" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i> Hapus</button>

                                  <!-- Modal ############################################################################################  -->




                                  <div class="container">
                                    <div class="modal fade" id="myModalihats<?php echo $id_obat;?>" role="dialog">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <?php
                                          include '../backend/koneksi.php';
                                          $lihat=mysqli_query($conn,"select * from tb_obat where id_obat='$id_obat'");
                                          while ($out = mysqli_fetch_object($lihat)) {
                                            ?>
                                            <input type="hidden" name="id_obat" value="<?php echo $id_obat;?>">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                              <h4 class="modal-title">Data Obat</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                              <div class="card">
                                                <div class="card-body">
                                                  <div class="form-validation">
                                                    <form class="form-valide" action="" method="post">
                                                      <input type="hidden" name="id_obat" id="id_obat" value="">

                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">ID Obat <span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="text" class="form-control" value="<?php echo "$out->id_obat"?>" readonly="">
                                                        </div>
                                                      </div>


                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Nama Obat<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="text" class="form-control"  value="<?php echo "$out->nama_obat"?>" readonly="">
                                                        </div>
                                                      </div>


                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Jenis Kelamin<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="text" class="form-control"  value="<?php echo "$out->satuan"?>" readonly="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Tanggal Lahir<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="text" class="form-control"  value="<?php echo "$out->stok"?>" readonly="">
                                                        </div>
                                                      </div>

                                                      <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Keterangan<span class="text-danger"></span></label>
                                                        <div class="col-lg-8">
                                                          <input type="txt" class="form-control"  value="<?php echo "$out->keterangan"?>" readonly="">
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

                <div class="modal fade" id="editObat" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Form Data Obat</h4>
                      </div>
                      <form class="" action="" method="post">
                        <input type="hidden" name="id_obat" id="id_obat" value="">
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="">Nama Obat</label>
                            <input type="text" class="form-control" name="nama_obat" required="required" id="nama_obat">
                          </div>
                          <div class="form-group">
                            <label for="">Jenis Obat</label>
                            <select class="form-control" name="kategori_obat" id="kategori_obat">
                              <option value="Tab">Tablet</option>
                              <option value="Cap">Capsul</option>
                              <option value="Btl">Botol</option>
                              <option value="Sc">Sachet</option>
                              <option value="Stk">Suntik</option>
                              <option value="bl">Blister</option>
                              <option value="lm">Lembar</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="">Kategori Obat</label> <br>
                            <label class="checkbox-inline">
                              <input type="radio" name="jenis_obat" value="G" id="jo1">Generik
                            </label>
                            <label class="checkbox-inline">
                              <input type="radio" name="jenis_obat" value="P" id="jo2">Paten
                            </label>
                          </div>
                          <div class="form-group">
                            <label for="">Harga</label>
                            <div class="input-group">
                              <span class="input-group-addon">Rp</span>
                              <input type="text" class="form-control"  required="required"  id="harga_obat_edit" name="harga_obat" onkeyup="formatangka(this);">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="text" class="form-control" name="stok_obat" required="required" id="stok_obat">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary" name="edit_obat">Simpan</button>
                        </div>
                      </form>
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


                    <script type="text/javascript">
                      function editObat(id_obat){
                        $.ajax({
                          type: "GET",
                          url : "../backend/update_obat.php",
                          data: "id="+id,
                          success: function (data){
                           var $response = $(data);
                           $('#id_obat').val($response.filter('#id_obat').text());
                           $('#nama_obat').val($response.filter('#nama_obat').text());
                           $('#satuan').val($response.filter('#satuan').text());
                           $('#keterangan').val($response.filter('#keterangan').text());
                           $('#editObat').modal('show');
                         }
                       });
                      }
                    </script>




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
