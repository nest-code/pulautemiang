<?php include_once '../backend/kontroller.php'; ?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>Data Petugas</h1>
    </section>

    <section class="content">
      <?php if (isset($_POST['ubah'])) { ?>
        <div class="row">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Data</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <?php
          include '../backend/koneksi.php';
            $employees_nip= $_POST['employees_nip'];
            $liat=mysqli_query($conn,"select * from tb_employees where employees_nip = '$employees_nip'");
            while ($out = mysqli_fetch_object($liat)) {
           ?>
          <div class="box-body">
            <form class="" action="" method="post">

              <input type="hidden" name="employees_nip" value="<?php echo "$out->employees_nip"?>">

              <div class="form-group row">
                <div class="col-sm-2">
                NIP
                </div>
                <div class="col-sm-10">
                  <input type="text" name="employees_nip" value="<?php echo "$out->employees_nip"?>" class="form-control" placeholder="Nomor Induk Pegawai" required="true" onkeypress="return isNumberKey(event)">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2">
                  Nama Petugas
                </div>
                <div class="col-sm-10">
                  <input type="text" name="employees_name" value="<?php echo "$out->employees_name"?>" class="form-control" placeholder="Nama Petugas" required="true" onkeypress="return isAlphabetkey(event)">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2">
                  Jenis Kelamin
                </div>
                <div class="col-sm-10">
                  <input type="text" name="employees_gender" value="<?php echo "$out->employees_gender"?>" class="form-control" placeholder="Jenis Kelamin" required="true">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2">
                  Tanggal Lahir
                </div>
                <div class="col-sm-10">
                  <input type="date" name="employees_birthday" value="<?php echo "$out->employees_birthday"?>" class="form-control" placeholder="Jenis Kelamin" required="true">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2">
                  Alamat
                </div>
                <div class="col-sm-10">
                  <input type="text" name="employees_address" value="<?php echo "$out->employees_address"?>" class="form-control" placeholder="Alamat" required="true">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2">
                  No. HP

                </div>
                <div class="col-sm-10">
                  <input type="text" name="employees_hp" value="<?php echo "$out->employees_hp"?>" class="form-control" placeholder="No. HP" required="true">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2">
                Jabatan
                </div>
                <div class="col-sm-10">
                  <input type="text" name="employees_position" value="<?php echo "$out->employees_position"?>" class="form-control" placeholder="Jabatan" required="true">
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <div class="col-md-8 col-md-push-4">
                    <button type="submit" class="btn btn-primary" name="ubah_pimpinan" id="simpan">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <button type="reset" class="btn btn-danger">
                      <i class="fa fa-times"></i> Batal
                    </button>
                  </div>
                </div>
              </div>


            </form>
          <?php } ?>
          </div>
        </div>
      </div>
      <?php } ?>

      <!-- Insert -->
      <?php if (isset($_POST['tambah'])) { ?>
        <div class="row">
        <div class="box">
          <!-- header -->
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Data</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>

          <!-- body -->
          <div class="box-body">
            <form class="" action="#" method="post">
              <div class="form-group row">
                <div class="col-sm-2">
                  NIP
                </div>
                <div class="col-sm-10">
                  <input type="text" name="employees_nip" value="" class="form-control" placeholder="NIP" maxlength="18" required="true" onkeypress="return isAlphabetkey(event)"oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"  >
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2">
                  Nama
                </div>
                <div class="col-sm-10">
                  <input type="text" name="employees_name" value="" class="form-control" placeholder="Nama" required="true">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2">
                  Jenis Kelamin
                </div>

                <div class="col-sm-10">
                  <select class="form-control" name="employees_gender" id="employees_gender" required>
                    <option value="">-Pilih-</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2">
                  Tanggal Lahir
                </div>
                <div class="col-sm-10">
                	<td><input type="date"  value="<?php echo date('1990-m-d'); ?>" max="<?php echo date('Y-m-d'); ?>"  name="employees_birthday" class="form-control" placeholder="Tanggal Lahir" required="true">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2">
                  Alamat
                </div>
                <div class="col-sm-10">
                  <input type="text" name="employees_address" maxlength="20" class="form-control" placeholder="Alamat" required="true">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2">
                  No. HP
                </div>
                <div class="col-sm-10">
                  <input type="text" name="employees_hp" maxlength="13" value="" class="form-control" placeholder="No. HP" required="true">
                </div>
              </div>



              <div class="form-group row">
                <div class="col-sm-2">
                  Jabatan
                </div>

                <div class="col-sm-10">
                  <select class="form-control" name="employees_position" id="employees_position" required>
                    <option value="">-Pilih-</option>
                    <option value="Sekretaris">Sekretaris</option>
                    <option value="Lurah">Lurah</option>
                  </select>
                </div>
              </div>


              <br><br>
                <!-- Bagiann User -->

                <div class="form-group row">
                  <div class="col-sm-2">
                    Nama Akun
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="user_username" value="" class="form-control" placeholder="Nama Akun" required="true">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-2">
                    Kata Sandi
                  </div>
                  <div class="col-sm-10">
                    <input type="password" name="user_password" value="" class="form-control" placeholder="Kata Sandi" required="true">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">
                    Jenis
                  </div>

                  <div class="col-sm-10">
                    <select class="form-control" name="user_type" id="user_type" required>
                      <option value="">-Pilih-</option>
                      <option value="Admin">Admin</option>
                      <option value="Pimpinan">Pimpinan</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">
                    Pertanyaan Keamanan
                  </div>
                  <div class="col-sm-10">
                    <select class="form-control" name="user_question" id="user_question">
                      <option value="Dimanakah Letak Rumah makan favorit?">Dimanakah Letak Rumah makan favorit ?</option>
                      <option value="Dimanakah anda dilahirkan?">Dimanakah anda dilahirkan ?</option>
                      <option value="Siapakah nama sahabat anda sewaktu kecil?">Siapakah nama sahabat anda sewaktu kecil ?</option>
                      <option value="Apa nama pangilan akrab anda sewaktu kecil?">Apa nama pangilan akrab anda sewaktu kecil ??</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">
                    Jawaban
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="user_answer" value="" class="form-control" placeholder="Jawaban Pertanyaan" required="true">
                  </div>
                </div>

                <!--Tutup User  -->

              <div class="row">
                <div class="form-group">
                  <div class="col-md-8 col-md-push-4">
                    <button type="submit" class="btn btn-primary" name="add_employees" id="simpan">
                      <i class="fa fa-save"></i> Simpan
                    </button>
                    <button type="reset" class="btn btn-danger">
                      <i class="fa fa-times"></i> Batal
                    </button>
                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <?php } ?>

      <div class="row">
        <div class="box-tools pull-right">
          <div class="input-group input-group-sm" style="width: 150px;">
            <form action="#" method="post">
              <button type="submit" name="tambah" class="btn btn-primary">
                <i class="fa fa-user-plus"></i> Tambahkan Data
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- View -->
      <div class="row">
        <div class="box">
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr class="table-primary">
                  <th>No.</th>
                  <th>NIP</th>
                  <th>Nama Petugas</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $n=0;
                include '../backend/koneksi.php';
                $query = mysqli_query($conn, "select * from tb_employees");
                 while ($a = mysqli_fetch_object($query)) {
                   $n=$n+1;
                 ?>
                <tr>
                  <td><?php echo "$n"?>.</td>
                  <td><?php echo "$a->employees_nip"?></td>
                  <td><?php echo "$a->employees_name"?></td>
                  <td><?php echo "$a->employees_position"?></td>
                  <td>
                    <form class="" action="" method="post">
                      <input type="hidden" name="employees_nip" value="<?php echo "$a->employees_nip"?>">
                      <div class="btn-group-horizontal btn-group-sm">
                        <!-- <button type="submit" name="ubah" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</button> -->
                        <button type="submit" name="delete_employees" class="btn btn-danger"><i class="fa fa-eraser"></i> Hapus</button>
                        <button type="button" class="btn btn-info btn-lg" onclick="modalLihat('<?php echo $a->employees_nip?>');"><i class="fa fa-user"></i>Ubah</button>
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


      <!-- modal Lihat -->
      <div id="modalLihat" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Data Petugas</h4>
            </div>
              <div class="modal-body">
                <form class="" action="#" method="post">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      NIP
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="employees_nip" value="" id="employess_nip" class="form-control" maxlength="18"  required="true" onkeypress="return isAlphabetkey(event)"oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-2">
                      Nama Petugas
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="employees_name" value="" id="employess_name" class="form-control"  required="true">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-2">
                      Jenis Kelamin
                    </div>
                    <div class="col-sm-10">
                      <select class="form-control" name="employees_gender" id="employess_gender" required>
                        <option value="">-Pilih-</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-2">
                      TGL Lahir
                    </div>
                    <div class="col-sm-10">
                      <input type="date" name="employees_birthday" value="" id="employees_birthday" class="form-control"  required="true">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-2">
                      Alamat
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="employees_address" value="" id="employees_address" class="form-control"  required="true">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-2">
                      No. HP
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="employees_hp" value="" id="employees_hp" class="form-control"  required="true">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-2">
                      Jabatan
                    </div>
                    <div class="col-sm-10">
                      <select class="form-control" name="employees_position" id="employess_position">
                        <option value="Sekretaris">Sekretaris</option>
                        <option value="Bendahara">Bendahara</option>
                      </select>
                    </div>
                  </div>


                  <br>

                  <div class="form-group row">
                    <div class="col-sm-2">
                      Nama Akun
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="user_username" id="user_username" class="form-control"  required="true">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-2">
                      Kata Sandi
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="user_password" value="" id="user_password" class="form-control"  required="true">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-2">
                      Jenis Pengguna
                    </div>
                    <div class="col-sm-10">
                        <select class="form-control" name="user_type" value="" id="user_type" >
                          <option value="Pimpinan">Pimpinan</option>
                          <option value="Admin">Admin</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-2">
                      Pertanyaan Keamanan
                    </div>
                    <div class="col-sm-10">
                      <select class="form-control" name="user_question" id="user_question">
                        <option value="Dimanakah Letak Rumah makan favorit?">Dimanakah Letak Rumah makan favorit ?</option>
                        <option value="Dimanakah anda dilahirkan?">Dimanakah anda dilahirkan ?</option>
                        <option value="Siapakah nama sahabat anda sewaktu kecil?">Siapakah nama sahabat anda sewaktu kecil ?</option>
                        <option value="Apa nama pangilan akrab anda sewaktu kecil?">Apa nama pangilan akrab anda sewaktu kecil ??</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-2">
                      Jawab Pertanyaan
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="user_answer" value="" id="user_answer" class="form-control"  required="true">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group">
                      <div class="col-md-8 col-md-push-4">
                        <button type="submit" class="btn btn-primary" name="update_employees">
                          <i class="fa fa-save"></i> Simpan
                        </button>
                        <button type="reset" class="btn btn-danger">
                          <i class="fa fa-times"></i> Batal
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              </div>
            </div>
          </div>
        </div>
      <!-- akhir -->



      <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Data Petugas</h4>
              </div>
              <div class="modal-body">
                <!-- body -->
                <?php
                  include '../backend/koneksi.php';
                  $employees_nip = $_POST['employees_nip'];
                  $lihat=mysqli_query($conn,"select * from tb_employees where employees_nip = '$employees_nip'");
                  while ($out = mysqli_fetch_object($lihat)) {
                ?>
                  <input type="hidden" name="employees_nip" value="<?php echo "$out->employees_nip"?>">

                <div class="form-group row">
                  <div class="col-sm-4">
                    NIP
                  </div>
                  <div class="col-sm-8">
                   <?php echo "$out->employees_nip"?>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4">
                    Nama Petugas
                  </div>
                  <div class="col-sm-8">
                    <?php echo "$out->employees_name"?>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4">
                    Jenis Kelamin
                  </div>
                  <div class="col-sm-8">
                    <?php echo "$out->employees_gender"?>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4">
                    Tanggal Lahir
                  </div>
                  <div class="col-sm-8">
                   <?php echo "$out->employees_birthday"?>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4">
                    Alamat
                  </div>
                  <div class="col-sm-8">
                    <?php echo "$out->employees_address"?>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4">
                    No. HP
                  </div>
                  <div class="col-sm-8">
                    <?php echo "$out->employees_hp"?>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4">
                    Jabatan
                  </div>
                  <div class="col-sm-8">
                    <?php echo "$out->employees_position"?>
                  </div>
                </div>

                <br>
                <br>

                <div class="form-group row">
                  <div class="col-sm-4">
                    Nama Akun
                  </div>
                  <div class="col-sm-8">
                    <?php echo "$out->user_username"?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4">
                    Kata Sandi
                  </div>
                  <div class="col-sm-8">
                    <?php echo "$out->user_password"?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4">
                    Jenis Akun
                  </div>
                  <div class="col-sm-8">
                    <?php echo "$out->user_type"?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4">
                    Pertanyaan Keamanan
                  </div>
                  <div class="col-sm-8">
                    <option value="Dimanakah Letak Rumah makan favorit?">Dimanakah Letak Rumah makan favorit ?</option>
                    <option value="Dimanakah anda dilahirkan?">Dimanakah anda dilahirkan ?</option>
                    <option value="Siapakah nama sahabat anda sewaktu kecil?">Siapakah nama sahabat anda sewaktu kecil ?</option>
                    <option value="Apa nama pangilan akrab anda sewaktu kecil?">Apa nama pangilan akrab anda sewaktu kecil ??</option>
                    <?php echo "$out->user_question"?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4">
                    Jawaban Pertanyaaan
                  </div>
                  <div class="col-sm-8">
                    <?php echo "$out->user_answer"?>
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

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- <strong>&copy; Copyright <a href="#">Sistem Informasi Pelayanan Rekomendasi Perizinan | Sipri DIY <?php echo date('Y') ?></a>.</strong> -->
  </footer>
  </div>
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/app.min.js"></script>

<script type="text/javascript">
  function modalLihat(id) {
    $.ajax({
      type:'get',
      url:'../backend/view_employess.php',
      data:"id="+id,
      success: function (data) {
        var $response = $(data);
        $('#employess_nip').val($response.filter('#employess_nip').text());
        $('#employess_name').val($response.filter('#employess_name').text());
        $('#employess_gender').val($response.filter('#employess_gender').text());
        $('#employees_birthday').val($response.filter('#employees_birthday').text());
        $('#employees_address').val($response.filter('#employees_address').text());
        $('#employees_hp').val($response.filter('#employees_hp').text());
        $('#employees_position').val($response.filter('#employees_position').text());
        $('#user_username').val($response.filter('#user_username').text());
        $('#user_password').val($response.filter('#user_password').text());
        $('#user_type').val($response.filter('#user_type').text());
        // $('#user_question').val($response.filter('#user_question').text());
      document.getElementById('user_question').value='Dimanakah anda dilahirkan?';
        $('#user_answer').val($response.filter('#user_answer').text());
        $('#modalLihat').modal('show');
      }
    });
  }
</script>

<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
         return true;
         // onkeypress="return isNumberKey(event)"
      }

			function isAlphabetkey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
            return false;
        return true;
        // onkeypress="return isAlphabetkey(event)"
}
      //-->
   </SCRIPT>
