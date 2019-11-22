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
                                  <label class="col-lg-4 col-form-label" for="val-username">No Hp <span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan Nomor HP Dokter..">
                                  </div>
                                </div>

                                <!-- <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Status <span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="status" name="status" placeholder="Masukan Status Dokter..">
                                  </div>
                                </div> -->


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
                          <th>NIP</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Poli</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                        $n=0;
                        include '../backend/koneksi.php';
                        $query = mysqli_query($conn, "select * from tb_dokter");
                        while ($a = mysqli_fetch_array($query)) {
                          $n=$n+1;
                          ?>
                          <tr>
                            <td><?php echo "$n"?>.</td>
                            <td><?php echo $a['nip'];?></td>
                            <td><?php echo $a['nama'];?></td>
                            <td><?php echo $a['jk'];?></td>
                            <td><?php echo $a['jenis_poli'];?></td>
                            <td><?php echo $a['status'];?></td>
                            <td class="color-primary">
                              <?php
                              $nip=$a['nip'];
                              ?>
                              <form class="" action="" method="post">
                                <input type="text" name="nip" id="nip" value="<?php echo $a['nip'];?>">
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $nip;?>"> <i class="fa fa-user"></i> Lihat</button>
                                <button type="button" class="btn btn-warning btn-flat btn-sm" onclick="#editDokter('<?php echo $row->nip; ?>')"><i class="fa fa-edit"></i> Edit</button>

                                <div class="modal fade" id="editDokter" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Form Edit Dokter</h4>
                                      </div>
                                      <form class="" action="" method="post">
                                        <div class="modal-body">
                                          <div class="form-group">
                                            <label for="">NIP</label>
                                            <input type="text" class="form-control" name="nip" required="required" id="nip">
                                            <p class="help-block">Nomor Induk Pegawai</p>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Nama</label>
                                            <input type="text" class="form-control" name="nama" required="required" id="nama">
                                          </div>
                                          <div class="form-group">
                                            <label for="">Spesialis</label>
                                            <select class="form-control" name="jenis_poli" id="jenis_poli">
                                              <?php
                                              $tampil=mysqli_query($koneksi,"select * from tb_jenis_poli");
                                              while($row=mysqli_fetch_array($tampil)){
                                                echo "<option value=$row[nama_jenis] >$row[nama_jenis]</option>";
                                              }
                                              echo "<option value='belum dipilih' selected>- pilih spesialis -</option>";
                                              ?>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Jenis Kelamin</label> <br>
                                            <label class="checkbox-inline">
                                              <input type="radio" name="jk" value="Laki-laki" id="jk1">Laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                              <input type="radio" name="jk" value="Perempuan" id="jk2">Perempuan
                                            </label>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" required="required" id="alamat">
                                          </div>
                                          <div class="form-group">
                                            <label for="">No Telp/Hp</label>
                                            <input type="text" class="form-control" name="noHp" required="required" id="no_hp">
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                          <button type="submit" class="btn btn-primary" name="editdokter">Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <!-- <button type="button" class="btn btn-default btn-flat btn-sm" > <i class="fa fa-edit"></i> Edit</button> -->
                                <button type="submit" name="hapus_akun" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i>Hapus</button>

                                <!-- ======================================================== -->

                                <div class="container">
                                  <div class="modal fade" id="myModalihats<?php echo $nip;?>" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <?php
                                        include '../backend/koneksi.php';
                                        $lihat=mysqli_query($conn,"select * from tb_dokter where nip='$nip'");
                                        while ($out = mysqli_fetch_object($lihat)) {
                                          ?>
                                          <input type="hidden" name="nip" value="<?php echo $nip;?>">
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
                                                      <label class="col-lg-4 col-form-label" for="val-username">Alamat<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="txt" class="form-control"  value="<?php echo "$out->jk"?>" readonly="">
                                                      </div>
                                                    </div>

                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">No HP<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="txt" class="form-control"  value="<?php echo "$out->no_hp"?>" readonly="">
                                                      </div>
                                                    </div>

                                                    <!-- <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">Status<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="txt" class="form-control"  value="<?php echo "$out->status"?>" readonly="">
                                                      </div>
                                                    </div> -->

                                                    <div class="form-group row">
                                                      <label class="col-lg-4 col-form-label" for="val-username">Jenis Poli<span class="text-danger"></span></label>
                                                      <div class="col-lg-8">
                                                        <input type="txt" class="form-control"  value="<?php echo "$out->jenis_poli"?>" readonly="">
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


      <!-- modal tambah data -->


      <div id="search">
        <button type="button" class="close">×</button>
        <form>
          <input type="search" value="" placeholder="type keyword(s) here" />
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
      </div>


      <script type="text/javascript">
        function editDokter(id){
          $.ajax({
            type: "GET",
            url : "../backend/update/update_dokter.php",
            data: "id="+id,
            success: function (data){
             var $response = $(data);
               $('#nip').val($response.filter('#nip').text());
               $('#nama').val($response.filter('#nama').text());
               if (($response.filter('#jk').text().trim())=="P"){
                   document.getElementById('jk2').checked=true;
               }else{
                 document.getElementById('jk1').checked=true;
               }
               $('#alamat').val($response.filter('#alamat').text());
               $('#no_hp').val($response.filter('#no_hp').text());
               $('#jenis_poli').val($response.filter('#jenis_poli').text());
               $('#edit').modal('show');
            }
          });
        }
      </script>

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
