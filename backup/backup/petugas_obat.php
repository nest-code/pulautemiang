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
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Tambah Data
                </button> -->
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
      </div>
      <!-- /# column -->
      <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
          <div class="page-title">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Tabel Obat</li>
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
              <h4>Table Obat </h4>
            </div>
            <div class="card-body">
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
                              <!-- <button type="button" class="btn btn-default btn-sm" onclick="editObat(<?php echo $id_obat=$a['id_obat']; ?>)"> <i class="fa fa-edit"></i>Edit</button> -->
                              <!-- <button type="submit" name="hapus_obat" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i> Hapus</button> -->






                            </td>
                          </tr>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>






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

<!-- jquery vendor -->
<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
<script src="assets/js/lib/preloader/pace.min.js"></script>
<script src="assets/js/scripts.js"></script>
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
