<?php include_once '../backend/kontroller.php'; ?>

<?php $date = date('Y-m-d', strtotime('+ 2 days'));
// $date = strtotime("+3 day", $date);
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Modal KEGIATAN -->
<div id="ModalKegiatan" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:715px">

    <!-- Modal content-->
    <form action="#" method="post" enctype="multipart/form-data">
      <div class="modal-content">
        <!-- heading modal -->
        <div align="center" class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">NOMOR REGISTRASI</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <input type="hidden" name="no_registrasi" >
          <div class="container">
            <div class="panel panel-default" style="width:650px">
              <div class="panel-heading">
                <h4>PENDUDUK</h4>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <td width="150px">Nomor Identitas</td>
                      <td>:</td>
                      <td><input type="text" maxlength="20" name="population_nik" id="nik" class="form-control"  placeholder="Nomor Identitas" required="true"  onkeypress="return isNumberKey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                    </tr>
                    <tr>
                      <td width="150px">Nama Lengkap</td>
                      <td>:</td>
                      <td><input type="text" maxlength="50" name="population_name" value="" class="form-control" placeholder="isi nama lengkap anda" required="true"></td>
                    </tr>
                    <tr>
                      <td width="150px">Alamat</td>
                      <td>:</td>
                      <td><input type="text" maxlength="200" name="population_place" value="" class="form-control" placeholder="isi alamat anda" required="true"></td>
                    </tr>
                    <tr>
											<td width="150px">Tanggal Lahir</td>
											<td>:</td>
											<td><input type="date"  value="<?php echo date('1990-m-d'); ?>" max="<?php echo date('Y-m-d'); ?>" name="population_birthday"  class="form-control" placeholder="isi tgl lahir anda" required="true"oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"  onkeypress="return isAlphabetkey(event)"></td>
										</tr>
                    <tr>
                      <td width="150px">RT</td>
                      <td>:</td>
                      <td><input type="text" maxlength="3" name="population_rt" value="" class="form-control" placeholder="isi RT" required="true"  onkeypress="return isNumberKey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                    </tr>
                    <tr>
                      <td width="150px">RW</td>
                      <td>:</td>
                      <td><input type="text" maxlength="3" name="population_rw" value="" class="form-control" placeholder="isi RW" required="true"  onkeypress="return isNumberKey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                    </tr>
                    <tr>
                      <td width="150px">Kelurahan</td>
                      <td>:</td>
                      <td><input type="text" maxlength="200" name="population_kelurahan" value="" class="form-control" placeholder="isi kelurahan" required="true"  onkeypress="return isAlphabetkey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                    </tr>
                    <tr>
                      <td width="150px">Kecamatan</td>
                      <td>:</td>
                      <td><input type="text" maxlength="25" name="population_kecamatan" value="" class="form-control" placeholder="isi kecamatan" required="true"  onkeypress="return isAlphabetkey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                    </tr>
                    <tr>
                      <td width="150px">Provinsi</td>
                      <td>:</td>
                      <td><input type="text" maxlength="25" name="population_provinsi" value="" class="form-control" placeholder="isi provinsi" required="true"  onkeypress="return isAlphabetkey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                    </tr>
                    <tr>
                      <td width="150px">Pekerjaan</td>
                      <td>:</td>
                      <td>
                        <select name="population_work" class="form-control"  required >
                          <option value="">-Pilih-</option>
                          <option value="PNS">PNS</option>
                          <option value="Pelajar">Pelajar</option>
                          <option value="Wiraswasta">Wiraswasta</option>
                          <option value="Mahasiswa">Mahasiswa</option>
                          <option value="Tani">Tani</option>
                          <option value="Ibu Rumah Tangga">Ibu rumah tangga</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td width="150px">Status</td>
                      <td>:</td>
                      <td><select name="population_status" class="form-control" required >
                        <option value="">-Pilih-</option>
                        <option value="Belum Menikah">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Janda">Janda</option>
                        <option value="Duda">Duda</option>
                      </select></td>
                    </tr>
                  </table>
                </div>
              </div>

            </div>
          </div>

          <div class="container">
            <div class="panel panel-default" style="width:650px">
              <div class="panel-heading">
                <h4>KETERANGAN KEGIATAN</h4>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table">

                    <tr>
                      <td width="150px">Nama Kegiatan</td>
                      <td>:</td>
                    	<td><input type="text"  maxlength="25"  name="apc_activity"  class="form-control" placeholder="isi Nama Kegiatan" required="true" onkeypress="return isAlphabetkey(event)"oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                   </tr>

                   <tr>
                     <td width="150px">Alamat Kegiatan</td>
                     <td>:</td>
                    <td><input type="text"  maxlength="25"  name="apc_place"  class="form-control" placeholder="isi Nama Kegiatan" required="true" onkeypress="return isAlphabetkey(event)"oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                  </tr>


                    <tr>
											<td width="150px">Tanggal Mulai</td>
                      <td>:</td>
											<td><input type="date" value="<?php echo date('Y-m-d'); ?>" name="apc_date_start"  class="form-control" placeholder="isi tgl " required="true" onkeypress="return isNumberKey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" onkeypress="return isAlphabetkey(event)" > </td>
									</tr>
                    </tr>
                    <tr>
											<td width="150px">Tanggal Selesai</td>
											<td>:</td>
											<td><input type="date" value="<?php echo date('Y-m-d'); ?>" name="apc_date_end"  class="form-control" placeholder="isi tgl selesai" required="true" onkeypress="return isNumberKey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" onkeypress="return isAlphabetkey(event)" > </td>
										</tr>
										<tr>
											<td width="150px">Waktu Mulai</td>
											<td>:</td>
											<td><input type="time" name="apc_time_start"  value="<?php echo date("g:i:s"); ?>" class="form-control" placeholder="isi waktu mulai" required="true" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
										</tr>
                    <tr>
                      <td width="150px">Waktu Selesai</td>
                      <td>:</td>
                      <td><input type="time" name="apc_time_end"  value="<?php echo date("g:i:s"); ?>" class="form-control" placeholder="isi waktu end" required="true" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
                    </tr>
                    <tr>
                      <td width="150px">Keterangan</td>
                      <td>:</td>
                      <td><textarea type="text" maxlength="20" name="apc_information"  class="form-control" placeholder="isi keterangan" required="true" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div align="center">
            <p>&nbsp;</p>
            <button type="submit" name="applicant_activity" class="btn btn-primary"><i class="fa fa-send"></i> Kirim</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!--END Modal SURAT PONDOKAN -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header" >
    <h1 text-align="center">Daftar Pengajuan Surat Keterangan Izin Kegiatan</h1>
  </section>

  <section class="content">
    <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalKegiatan"> Tambah Data</button>

    <!-- View -->
    <div class="row">
      <div class="box">
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr class="table-primary">
                <th>No.</th>
                <th><span class="fa fa-book"></span> No. Registrasi</th>
                <th><span class="fa fa-credit-card"></span> NIK</th>
                <th><span class="fa fa-user"> Nama</th>
                <th><span class="fa fa-info-circle"> Status</th>
                <th><span class="fa fa-gavel"> Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $n=0;
              include '../backend/koneksi.php';


              $query = mysqli_query($conn, "select tb_activity_permit_certificate.apc_id, tb_population.population_nik,tb_population.population_name,tb_applicant.applicant_id, tb_applicant.status from tb_applicant join tb_population on tb_population.population_nik=tb_applicant.population_nik join tb_activity_permit_certificate on tb_applicant.applicant_id=tb_activity_permit_certificate.applicant_id where tb_applicant.status != 'Selesai' ORDER BY tb_applicant.status");
              while ($a = mysqli_fetch_array($query)) {
                $n=$n+1;
                ?>
                <tr>
                  <td><?php echo "$n"?>.</td>
                  <td><?php echo $a['applicant_id'];?></td>
                  <td><?php echo $a['population_nik'];?></td>
                  <td><?php echo $a['population_name'];?></td>
                  <td class="text-center" <?php if($a['status']=='Tolak'){ ?> bgcolor="#ff8585" <?php } if($a['status']=='Proses'){ ?> bgcolor="#FFECB3" <?php } ?> >
                    <?php echo $a['status'];?></td>
                  <td>
                    <?php
                    $acp_id=$a['apc_id'];
                    $applicant_id=$a['applicant_id'];
                    ?>


                    <form class="" action="#" method="post">
                      <!-- <input type="text" name="apc_id" value="<?php echo $acp_id;?>"></input> -->
                      <div class="btn-group-horizontal btn-group-sm">
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo $applicant_id;?>"><i class="fa fa-user"></i> Lihat</button>
                          <button type="submit" name="delete_activity" class="btn btn-danger"><i class="fa fa-eraser"></i> Hapus</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal<?php echo $applicant_id;?>" role="dialog">
                          <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div align="center" class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Data Mengajukan Surat Keterangan Izin Kegiatan</h4>
                              </div>
                              <div class="modal-body">
                                <!-- body -->
                                <?php
                                include '../backend/koneksi.php';
                                $lihat=mysqli_query($conn,"select * from tb_population join tb_applicant on tb_population.population_nik=tb_applicant.population_nik join tb_activity_permit_certificate on tb_applicant.applicant_id=tb_activity_permit_certificate.applicant_id where tb_applicant.applicant_id='$applicant_id'");
                                while ($out = mysqli_fetch_object($lihat)) {
                                  ?>
                                  <input type="hidden" name="apc_id" value="<?php echo $acp_id;?>">
                                  <input type="hidden" name="applicant_id" value="<?php echo $applicant_id;?>">

                                  <!--PELAPOR-->
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h4>Permohonan Surat Kegiatan</h4>
                                    </div>
                                    <div class="panel-body">
                                      <div class="table-responsive">
                                        <table class="table">

                                          <tr>
                                            <td  width="175px">Nama Kegiatan</td>
                                            <td>:</td>
                                            <td width="525px" id="text3"><?php echo "$out->apc_activity"?></td>
                                            <td width="25px">
                                              <button id="button3" type="button" class="btn btn-warning" onclick="copy('#text3')" href="#" data-toggle="popover3" data-content="Copied."><i class="fa fa-copy"></i></button>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td  width="175px">Alamat Kegiatan</td>
                                            <td>:</td>
                                            <td width="525px" id="text3"><?php echo "$out->apc_place"?></td>
                                            <td width="25px">
                                              <button id="button3" type="button" class="btn btn-warning" onclick="copy('#text3')" href="#" data-toggle="popover3" data-content="Copied."><i class="fa fa-copy"></i></button>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td  width="175px">Tanggal Mulai</td>
                                            <td>:</td>
                                            <td width="525px" id="text3"><?php echo "$out->apc_date_start"?></td>
                                            <td width="25px">
                                              <button id="button3" type="button" class="btn btn-warning" onclick="copy('#text3')" href="#" data-toggle="popover3" data-content="Copied."><i class="fa fa-copy"></i></button>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td  width="175px">Tanggal Selesai</td>
                                            <td>:</td>
                                            <td width="525px" id="text4"><?php echo "$out->apc_date_end"?></td>
                                            <td width="25px">
                                              <button id="button4" type="button" class="btn btn-warning" onclick="copy('#text4')" href="#" data-toggle="popover4" data-content="Copied."><i class="fa fa-copy"></i></button>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td  width="175px">Waktu Mulai</td>
                                            <td>:</td>
                                            <td width="525px" id="text4"><?php echo "$out->apc_time_start"?></td>
                                            <td width="25px">
                                              <button id="button4" type="button" class="btn btn-warning" onclick="copy('#text4')" href="#" data-toggle="popover4" data-content="Copied."><i class="fa fa-copy"></i></button>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td  width="175px">Waktu Selesai</td>
                                            <td>:</td>
                                            <td width="525px" id="text5"><?php echo "$out->apc_time_end"?></td>
                                            <td width="25px">
                                              <button id="button5" type="button" class="btn btn-warning" onclick="copy('#text5')" href="#" data-toggle="popover5" data-content="Copied."><i class="fa fa-copy"></i></button>
                                            </tr>

                                            <tr>
                                              <td width="175px">Keterangan</td>
                                              <td>:</td>
                                              <td width="525px" id="text6"><?php echo "$out->apc_information"?></td>
                                              <td width="25px">
                                                <button id="button6" type="button" class="btn btn-warning" onclick="copy('#text6')" href="#" data-toggle="popover6" data-content="Copied."><i class="fa fa-copy"></i></button>
                                              </td>
                                            </tr>
                                          </table>
                                        </div>
                                      </div>
                                    </div>

                                    <!--Data Penduduk-->
                                    <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h4>Data Penduduk</h4>
                                      </div>
                                      <div class="panel-body">
                                        <div class="table-responsive">

                                          <table class="table">
                                            <tr>
                                              <td  width="175px">NIK</td>
                                              <td>:</td>
                                              <td width="525px" id="text8"><?php echo "$out->population_nik" ?></td>
                                              <td width="25px">
                                                <button id="button8" type="button" class="btn btn-warning" onclick="copy('#text8')" href="#" data-toggle="popover8" data-content="Copied."><i class="fa fa-copy"></i></button>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td  width="175px">Nama Lengkap</td>
                                              <td>:</td>
                                              <td width="525px" id="text8"><?php echo "$out->population_name" ?> </td>
                                              <td width="25px">
                                                <button id="button8" type="button" class="btn btn-warning" onclick="copy('#text8')" href="#" data-toggle="popover8" data-content="Copied."><i class="fa fa-copy"></i></button>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td  width="175px">Tanggal Lahir</td>
                                              <td>:</td>
                                              <td width="525px" id="text8"><?php echo "$out->population_birthday" ?></td>
                                              <td width="25px">
                                                <button id="button8" type="button" class="btn btn-warning" onclick="copy('#text8')" href="#" data-toggle="popover8" data-content="Copied."><i class="fa fa-copy"></i></button>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td  width="175px">Alamat</td>
                                              <td>:</td>
                                              <td width="525px" id="text9"><?php echo "$out->population_place" ?></td>
                                              <td width="25px">
                                                <button id="button9" type="button" class="btn btn-warning" onclick="copy('#text9')" href="#" data-toggle="popover9" data-content="Copied."><i class="fa fa-copy"></i></button>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td  width="175px">RT</td>
                                              <td>:</td>
                                              <td width="525px" id="text9"><?php echo "$out->population_rt" ?></td>
                                              <td width="25px">
                                                <button id="button9" type="button" class="btn btn-warning" onclick="copy('#text9')" href="#" data-toggle="popover9" data-content="Copied."><i class="fa fa-copy"></i></button>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td  width="175px">RW</td>
                                              <td>:</td>
                                              <td width="525px" id="text9"><?php echo "$out->population_rw" ?></td>
                                              <td width="25px">
                                                <button id="button9" type="button" class="btn btn-warning" onclick="copy('#text9')" href="#" data-toggle="popover9" data-content="Copied."><i class="fa fa-copy"></i></button>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td  width="175px">Kelurahan</td>
                                              <td>:</td>
                                              <td width="525px" id="text9"><?php echo "$out->population_kelurahan" ?></td>
                                              <td width="25px">
                                                <button id="button9" type="button" class="btn btn-warning" onclick="copy('#text9')" href="#" data-toggle="popover9" data-content="Copied."><i class="fa fa-copy"></i></button>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td  width="175px">Kecamatan</td>
                                              <td>:</td>
                                              <td width="525px" id="text9"><?php echo "$out->population_kecamatan" ?></td>
                                              <td width="25px">
                                                <button id="button9" type="button" class="btn btn-warning" onclick="copy('#text9')" href="#" data-toggle="popover9" data-content="Copied."><i class="fa fa-copy"></i></button>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td  width="175px">Provinsi</td>
                                              <td>:</td>
                                              <td width="525px" id="text9"><?php echo "$out->population_provinsi" ?></td>
                                              <td width="25px">
                                                <button id="button9" type="button" class="btn btn-warning" onclick="copy('#text9')" href="#" data-toggle="popover9" data-content="Copied."><i class="fa fa-copy"></i></button>
                                              </td>
                                            </tr>


                                            <tr>
                                              <td  width="175px">Pekerjaan</td>
                                              <td>:</td>
                                              <td width="525px" id="text11"><?php echo "$out->population_work" ?> </td>
                                              <td width="25px">
                                                <button id="button11" type="button" class="btn btn-warning" onclick="copy('#text11')" href="#" data-toggle="popover11" data-content="Copied."><i class="fa fa-copy"></i></button>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td  width="175px">Status Pernikahan</td>
                                              <td>:</td>
                                              <td width="525px" id="text11"><?php echo "$out->population_status" ?> </td>
                                              <td width="25px">
                                                <button id="button11" type="button" class="btn btn-warning" onclick="copy('#text11')" href="#" data-toggle="popover11" data-content="Copied."><i class="fa fa-copy"></i></button>
                                              </td>
                                            </tr>

                                          </table>
                                        </div>
                                      </div>
                                    </div>

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
                                  <?php } ?>


                                  <!-- The Modal -->
                                  <div id="myModalimage" class="modalimage">
                                    <span class="tutup">&times;</span>
                                    <img class="modal-image" id="img01">
                                    <div id="caption"></div>
                                  </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
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
    </section>
  </div>

  <script src="style/js/jquery-3.2.0.min.js"></script>
  <script>
  document.querySelector("#button").onclick=function(){
    document.querySelector("#input").select();
    document.execCommand("copy");
  };
</script>

<!-- Copy Text -->
<script>
function copy(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();

  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 1000);
}


</script>
<!-- ================================= -->

<script>


</script>


<script>
$("#button1").click(function(){
  $('[data-toggle="popover1"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover1"]').popover('destroy')}, 1000);
});

$("#button2").click(function(){
  $('[data-toggle="popover2"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover2"]').popover('destroy')}, 1000);
});

$("#button3").click(function(){
  $('[data-toggle="popover3"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover3"]').popover('destroy')}, 1000);
});

$("#button4").click(function(){
  $('[data-toggle="popover4"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover4"]').popover('destroy')}, 1000);
});

$("#button5").click(function(){
  $('[data-toggle="popover5"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover5"]').popover('destroy')}, 1000);
});

$("#button6").click(function(){
  $('[data-toggle="popover6"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover6"]').popover('destroy')}, 1000);
});

$("#button7").click(function(){
  $('[data-toggle="popover7"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover7"]').popover('destroy')}, 1000);
});

$("#button8").click(function(){
  $('[data-toggle="popover8"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover8"]').popover('destroy')}, 1000);
});

$("#button9").click(function(){
  $('[data-toggle="popover9"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover9"]').popover('destroy')}, 1000);
});

$("#button10").click(function(){
  $('[data-toggle="popover10"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover10"]').popover('destroy')}, 1000);
});

$("#button11").click(function(){
  $('[data-toggle="popover11"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover11"]').popover('destroy')}, 1000);
});

$("#button12").click(function(){
  $('[data-toggle="popover12"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover12"]').popover('destroy')}, 1000);
});

$("#button13").click(function(){
  $('[data-toggle="popover13"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover13"]').popover('destroy')}, 1000);
});

$("#button14").click(function(){
  $('[data-toggle="popover14"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover14"]').popover('destroy')}, 1000);
});

$("#button15").click(function(){
  $('[data-toggle="popover15"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover15"]').popover('destroy')}, 1000);
});

$("#button16").click(function(){
  $('[data-toggle="popover16"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover16"]').popover('destroy')}, 1000);
});

$("#button17").click(function(){
  $('[data-toggle="popover17"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover17"]').popover('destroy')}, 1000);
});

$("#button18").click(function(){
  $('[data-toggle="popover18"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover18"]').popover('destroy')}, 1000);
});

$("#button19").click(function(){
  $('[data-toggle="popover19"]').popover('show');
  setTimeout(function(){$('[data-toggle="popover19"]').popover('destroy')}, 1000);
});

</script>

<SCRIPT language=Javascript>
<!--
function isNumberKey(evt)
{
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
  return false;
  return true;
}

function isAlphabetkey(evt){
  var charCode = (evt.which) ? evt.which : event.keyCode
  if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
  return false;
  return true;
}
//-->
</SCRIPT>
