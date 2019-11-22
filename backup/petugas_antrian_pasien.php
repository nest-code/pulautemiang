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

              <!-- <button type="button"  class="btn btn-primary" onclick="window.location.href='?m=admin/admin_dokter'">Tambah Data</button> -->

              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

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
                              <input type="hidden" name="id_akun" value="">
                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">NIP <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan NIP Dokter..">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Nama <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Dokter..">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Tanggal Lahir<span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="Date" class="form-control" id="tgl_lahir" name="tgl_lahir" >
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-select2-multiple">Jenis Kelamin<span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="jk">
                                    <option value="">-Pilih-</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                  </select>
                                  <!-- </select> -->
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Alamat <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Nama Dokter..">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Nomor HP <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan Nomor HP Dokter..">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-select2-multiple">Jenis Poli<span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <!-- <select class="js-select2 form-control" id="val-select2-multiple" name="val-select2-multiple" style="width: 100%;" data-placeholder="Choose at least two.." multiple> -->
                                  <select class="form-control" name="jenis_poli">
                                    <option value="">-Pilih-</option>
                                    <option value="Umum">Poli Umum</option>
                                    <option value="Anak">Poli Anak</option>
                                    <option value="Gigi">Poli Gigi</option>
                                    <option value="KB">Poli KB</option>
                                    <option value="DOTS">Poli DOTS</option>
                                  </select>
                                  <!-- </select> -->
                                </div>
                              </div>

                              <input type="hidden" name="id_akun" value="1">

                              <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                  <button type="submit" class="btn btn-primary" name="tambah_dokter">Simpan</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
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
              <li class="breadcrumb-item active">Antrian Pasien</li>
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
              <!-- <h4>Table Bordered </h4> -->
            </div>
            <div class="card-body">
              <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                  <table id="bootstrap-data-table-export" class="table table-striped ">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No Induk Kependudukan</th>
                        <th>Nama</th>
                        <th>tanggal Lahir</th>
                        <th>Status</th>
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
                        <tr>
                          <td><?php echo "$n"?>.</td>
                          <td><?php echo $a['nip'];?></td>
                          <td><?php echo $a['nama'];?></td>
                          <td><?php echo $a['tgl_lahir'];?></td>
                          <td>
                            <?php if($a['status'] == 'Menunggu'){ echo ' <span class="badge badge-primary">Menunggu</span>'; } ?>
                            <?php if($a['status'] == 'Proses'){ echo ' <span class="badge badge-warning">Proses</span>'; } ?>
                            <?php if($a['status'] == 'Selesai'){ echo ' <span class="badge badge-succes">Selesai</span>'; } ?>

                          </td>
                          <td class="color-primary">

                            <form class="" action="" method="post">
                              <!-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $id_pasien;?>"> <i class="fa fa-user"></i> Lihat Rekam Medis</button> -->
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $id_pasien;?>"> <i class="fa fa-user"></i> Lihat Rekam Medis</button>
                              <button type="button" class="btn btn-default btn-flat btn-sm" > <i class="fa fa-edit"></i> Diagnosa</button>
                              <button type="submit" name="delete_pasien" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i> Hapus</button>
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
