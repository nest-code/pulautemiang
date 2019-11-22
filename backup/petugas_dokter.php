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
              <!-- <button type="button" class="btn btn-primary" onclick="window.location.href='?m=admin/admin_pendaftaran_dokter'">Tambah Data</button> -->
                <!--

              -->
              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Tambah Data Dokter</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                      <div class="card">
                        <div class="card-body">
                          <div class="form-validation">
                            <form class="form-valide" action="" method="post">

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">NIP Dokter <span class="text-danger" maxlength="20"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan nama dokter.." onkeypress="return isNumberKey(event)" required>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Nama Dokter <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama dokter.." required>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Jenis Kelamin<span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="jk" required>
                                    <option value="">-Pilih-</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                  </select>
                                </div>
                              </div>


                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Tanggal Lahir<span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                </div>
                              </div>


                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Alamat <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat.." required>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">No HP <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan Nomor HP.." onkeypress="return isNumberKey(event)" required>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Jenis Poli <span class="text-danger"></span></label>
                                <div class="col-lg-8">

                                  <input type="text" class="form-control" id="jenis_poli" name="jenis_poli" placeholder="Masukan Jenis Poli.." required>
                                </div>
                              </div>


                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username"> ID Akun <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="id_akun" name="id_akun" placeholder="Masukan ID Akun..">
                                </div>
                              </div>


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
              <li class="breadcrumb-item active">Tabel  Dokter</li>
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
              <!-- <h4>Table Dokter</h4> -->
            </div>
            <div class="card-body">
              <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                  <table id="bootstrap-data-table-export" class="table table-striped ">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Status</th>
                        <th>No Induk Kependudukan</th>
                        <th>Jenis Kelamin</th>
                        <th>Nama</th>
                        <th>Poli</th>
                        <th>No Hp</th>
                        <th>Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                      // $query = mysqli_query($conn, "SELECT * FROM tb_dokter inner join tb_jenis_poli on  tb_dokter.id_jenis_poli = tb_jenis_poli.id_jenis_poli  where tb_dokter.id_jenis_poli = tb_jenis_poli.id_jenis_poli");
                      // $query = mysqli_query($conn, "SELECT * from tb_akun join tb_dokter on tb_dokter.id_akun = tb_akun.id_akun join tb_jenis_poli on tb_dokter.id_jenis_poli=tb_jenis_poli.id_jenis_poli");
                      $query = mysqli_query($conn, "SELECT * from tb_dokter");

                      while ($a = mysqli_fetch_array($query)) {
                        $n=$n+1;
                        ?>
                        <tr>
                          <td><?php echo "$n"?>.</td>
                          <td><?php echo $a['status'];?></td>
                          <td><?php echo $a['nip'];?></td>
                          <td><?php echo $a['jk'];?></td>
                          <td><?php echo $a['nama'];?></td>
                          <td><?php echo $a['nama_jenis'];?></td>

                          <td><?php echo $a['no_hp'];?></td>
                          <td class="color-primary">


                            <form class="" action="" method="post">
                              <!-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $id_dokter;?>"> <i class="fa fa-user"></i> Lihat</button> -->
                                <button type="button" class="btn btn-info btn-sm"             data-toggle="modal" data-target="#myModal<?php echo $id_pasien;?>"><i class="ti-eye"></i></button>
                              <!-- <button type="button" class="btn btn-default btn-flat btn-sm" > <i class="fa fa-edit"></i>Ubah</button> -->
                              <!-- <button type="submit" name="delete_pasien" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i> Hapus</button> -->
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

            <!--                                    awal Modal   -->


        <div class="container">
          <div class="modal fade" id="myModalihats<?php echo $nip;?>" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <?php
                include '../backend/koneksi.php';
                $lihat=mysqli_query($conn,"select * from tb_dokter where nip='$nip'");
                while ($out = mysqli_fetch_object($lihat)) {
                  ?>

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <!-- <h4 class="modal-title">Data Pasien</h4> -->
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="card">
                      <div class="card-body">
                        <div class="form-validation">
                          <form class="form-valide" action="" method="post">
                            <!-- <input type="hidden" name="id" id="id" value=""> -->

                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label" for="val-username">NIP <span class="text-danger"></span></label>
                              <div class="col-lg-8">
                                <input type="text" class="form-control" value="<?php echo "$out->nip"?>" readonly="">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label" for="val-username">Nama Dokter<span class="text-danger"></span></label>
                              <div class="col-lg-8">
                                <input type="text" class="form-control"  value="<?php echo "$out->nama"?>" readonly="">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label" for="val-username">Jenis Kelamin<span class="text-danger"></span></label>
                              <div class="col-lg-8">
                                <input type="text" class="form-control"  value="<?php echo "$out->jk"?>" readonly="">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label" for="val-username">Tanggal Lahir<span class="text-danger"></span></label>
                              <div class="col-lg-8">
                                <input type="text" class="form-control"  value="<?php echo "$out->tgl_lahir"?>" readonly="">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label" for="val-username">Jenis Poli<span class="text-danger"></span></label>
                              <div class="col-lg-8">
                                <input type="txt" class="form-control"  value="<?php echo "$out->jenis_poli"?>" readonly="">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label" for="val-username">Alamat<span class="text-danger"></span></label>
                              <div class="col-lg-8">
                                <input type="txt" class="form-control"  value="<?php echo "$out->alamat"?>" readonly="">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label" for="val-username">No HP<span class="text-danger"></span></label>
                              <div class="col-lg-8">
                                <input type="txt" class="form-control"  value="<?php echo "$out->no_hp"?>" readonly="">
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

        <!--                                    AKhir Modal   -->
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

<script type="text/javascript">
function isNumberKey(evt)
{
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
  return false;
  return true;
}
</script>
