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
              <!-- <button type="button" class="btn btn-primary" onclick="window.location.href='?m=admin/admin_pengguna'">Tambah Data</button> -->


              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Tambah Data Pasien</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                      <div class="card">
                        <div class="card-body">
                          <div class="form-validation">
                            <form class="form-valide" action="" method="post">
                              <input type="hidden" name="id_pasien" value="">
                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Nama Pasien<span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Pasien..">
                                </div>
                              </div>


                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Tanggal Lahir<span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" >
                                </div>
                              </div>


                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Jenis Kelamin<span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="jk">
                                    <option value="">-Pilih-</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>

                                  </select>
                                </div>
                              </div>


                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Agama <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="agama">
                                    <option value="">-Pilih-</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Katolik">Kristen Katolik</option>
                                    <option value="Protestan">Kristen Protestan</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Pekerjaan <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukan Pekerjaan Pasien..">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Pendidikan <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Masukan Pendidikan Pasien..">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Alamat <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Pasien..">
                                </div>
                              </div>
                              <!-- <input type="id_pasien" name="" value=""> -->

                              <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                  <button type="submit" class="btn btn-primary" name="tambah_pasien">Simpan</button>
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
              <li class="breadcrumb-item active">Tabel Pengguna</li>
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
              <!-- <h4>Table Pengguna </h4> -->
            </div>
            <div class="card-body">
              <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                  <table id="bootstrap-data-table-export" class="table table-striped ">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Akun</th>
                        <th>Jenis Akun</th>
                        <th>Pertanyaan Keamanan</th>
                        <th>Jawaban Keamanan</th>
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
                          <td class="text-center" <?php if($a['level']=='Admin'){ ?> bgcolor="#ff8585" <?php } if($a['level']=='Dokter'){ ?> bgcolor="#FFECB3" <?php } ?> >
                              <?php echo $a['level'];?></td>
                          <td><?php echo $a['pertanyaan'];?></td>
                          <td><?php echo $a['jawaban'];?></td>

                          <td class="color-primary">
                            <?php $id_pasien=$a['id_pasien']; ?>
                            <form class="" action="" method="post">
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $id_pasien;?>"> <i class="fa fa-user"></i> Lihat</button>
                              <button type="button" class="btn btn-default btn-flat btn-sm" > <i class="fa fa-edit"></i>Edit</button>
                              <!-- <button type="submit" name="delete_pasien" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i> Hapus</button> -->
                              <button type="button"  class="btn btn-danger btn-sm" onclick="window.location.href='../backend/delete/delete_akun.php?id_akun=<?php echo $a['id_akun'] ?> '" ><i class="fa fa-eraser"></i> Hapus</button>

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
