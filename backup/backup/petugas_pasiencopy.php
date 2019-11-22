
<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">

              <h1> <b>Data Pasein</b> | Pasien  </h1>
              <div class="container">

                <!--  Modal Poli-->
                <div class="modal fade" id="exampleModal">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Pelayanan (Poli)</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <div class="card">
                          <div class="card-body">
                            <div class="form-validation">
                              <form class="form-valide" action="" method="post">
                                <input type="text" name="id_pasien" id="id_pasien_antrian" value="">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Nama Poli <span class="text-danger"></span></label>
                                  <div class="col-lg-8">

                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="col-lg-3 col-form-label" for="val-username">No. Antrian<span class="text-danger"></span></label>
                                  <div class="col-lg-9">
                                    <input type="text" name="no_antrian" value="">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-lg-8 ml-auto" align="right">
                                    <!-- <div class="col-lg-8 ml-auto"> -->
                                    <button type="submit" class="btn btn-primary" name="tambah_poli">Simpan</button>
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


                <!-- The Modal -->
                <div class="modal fade" id="myModal<?php echo $id_pasien;?>" >
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <br><br><br><br>
                        <br><br>
                        <br><br><br>
                        <h4 class="modal-title">Lihat Data Pasien</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <?php
                      include '../backend/koneksi.php';
                      $lihat=mysqli_query($conn,"select * from tb_pasien");
                      while ($out = mysqli_fetch_object($lihat)) {
                        ?>
                        <input type="text" name="id_pasien" value="<?php echo $id_pasien;?>">
                        <!-- Modal body -->
                        <div class="modal-body">
                          <div class="card">
                            <div class="card-body">
                              <div class="form-validation">
                                <form class="form-valide" action="" method="post">
                                  <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Nama Pasien<span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                      <input type="text" class="form-control" value="<?php echo $out->nama; ?>"  readonly>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Tanggal Lahir<span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                      <input type="date" class="form-control" value="<?php echo $out->tgl_lahir; ?>"  readonly >
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Jenis Kelamin<span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                      <input type="text" class="form-control" value="<?php echo $out->jk; ?>">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Agama<span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                      <input type="text" class="form-control" value="<?php echo $out->agama; ?>">
                                    </div>
                                  </div>


                                  <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Agama <span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                      <select class="form-control" readonly>
                                        <input type="text" class="form-control" value="<?php echo "$agama"; ?>">
                                      </select>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Pekerjaan <span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                      <input type="text" class="form-control" value="<?php echo "$pekerjaan"; ?>">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Pendidikan <span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                      <input type="text" class="form-control" value="<?php echo "$pendidikan"; ?>">
                                    </div>
                                  </div>



                                  <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Alamat <span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                      <input type="text" class="form-control" value="<?php echo "$alamat"; ?>">
                                    </div>
                                  </div>



                                  <!-- <input type="id_pasien" name="" value=""> -->
                                  <div class="row">
                                    <div class="form-group">
                                      <div class="col-md-8 col-md-push-4">
                                        <button type="submit" class="btn btn-primary" name="proses" id="simpan">
                                          <i class="fa fa-check"></i> Terima
                                        </button>
                                        <button type="submit" class="btn btn-danger" name="tolak" >
                                          <i class="fa fa-times"></i> Tolak
                                        </button>
                                      </div>
                                    </div>
                                  </div>

                                </form>
                              </div>
                            </div>
                          </div>
                        </div>


                      <?php } ?>

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
                <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
                <li class="breadcrumb-item active">Tabel Pasien</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <section id="main-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-title">
                <!-- <h4>Table Pasien </h4> -->
              </div>
              <div class="card-body">
                <div class="bootstrap-data-table-panel">
                  <div class="table-responsive">
                    <table id="bootstrap-data-table-export" class="table table-striped ">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>JK</th>
                          <!-- <th>Tanggal Lahir</th> -->
                          <th>Usia</th>
                          <!-- <th>Gol. Darah</th> -->
                          <!-- <th>Alamat</th> -->
                          <!-- <th>Pekerjaan</th> -->
                          <th>No HP</th>
                          <th>Tindakan</th>
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
                          <?php
                          // $tgl_lahir =date_format(date_create($a->tgl_lahir), 'Y');
                          $tgl_lahir =date_format(date_create($a['tgl_lahir']), 'Y');
                          $sekarang = date('Y');
                          $usia = $sekarang - $tgl_lahir;
                          ?>

                          <tr>
                            <td><?php echo "$n"?>.</td>
                            <td><?php echo $a['nama'];?></td>
                            <td><?php echo $a['jk'];?></td>
                            <!-- <td><?php echo $a['tgl_lahir'];?></td> -->
                            <td><?php echo  $usia?> Tahun</td>
                            <!-- <td><?php echo $a['gol_darah'];?></td> -->
                            <!-- <td><?php echo $a['alamat'];?></td> -->
                            <!-- <td><?php echo $a['pekerjaan'];?></td> -->
                            <td><?php echo $a['no_hp'];?></td>

                            <td class="color-primary">
                              <form class="" action="" method="post">
                                <!-- <button type="button" class="btn btn-info btn-sm"             data-toggle="modal" data-target="#myModal<?php echo $id_pasien;?>"  title="Lihat"><i class="ti-eye"></i></button> -->

                                <button type="button"  class="btn btn-success btn-sm"         onclick="window.location.href='/pulautemiang/admin/pages/md/petugas/view/view_pendaftaran.php?id_pasien=<?php echo $a['id_pasien'] ?> '"  title="Cetak Kartu Berobat"><i class="ti-layers"></i></button>
                                <button type="button" class="btn btn-warning btn-sm"          onclick="window.location.href='../backend/cetak/print_kartu_berobat_DW.php?id_pasien=<?php echo $a['id_pasien'] ?> '"  title="Cetak Kartu Berobat"><i class="ti-printer"></i></button>
                                <button type="button"  class="btn btn-info btn-sm"          onclick="window.location.href='/pulautemiang/admin/pages/md/petugas/view/view_pasien.php?id_pasien=<?php echo $a['id_pasien'] ?> '"  title="Lihat"><i class="ti-eye"></i></button>
                                <button type="button" class="btn btn-default btn-sm"     title="Ubah"     onclick="window.location.href='/pulautemiang/admin/pages/md/petugas/edit/edit_pasien.php?id_pasien=<?php echo $a['id_pasien'] ?> '"  title="Lihat"><i class="fa fa-edit"></i></button>

                                <!-- <button type="submit" class="btn btn-default btn-sm"          name="select"  title="Ubah"  > <i class="fa fa-edit"></i></button> -->
                                <button type="submit" class="btn btn-danger btn-sm"           name="delete_pasien"  title="Hapus"><i class="ti-trash"></i></button>
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
          </div>
        </div>


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

<script type="text/javascript">
function antrian(id){
  var antrian = id;
  $('#id_pasien_antrian').val(antrian);
  // alert('cek');
  $('#exampleModal').modal('show');
}
</script>
