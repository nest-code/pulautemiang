<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


<?php $date = date('Y-m-d', strtotime('- 0 days'));
// $date = strtotime("+3 day", $date);
 ?>
<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1> <b>Data Pasien</b> | Pendaftaran Pasien </h1>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-l-0 title-margin-left">
          <div class="page-header">
            <div class="page-title">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?m=admin/admin_pasien">Data Pasien</a></li>
                <li class="breadcrumb-item active">Pendaftaran Pasien</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <section id="main-content">
        <form class="" action="" method="post">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-title"></div>
                <div class="card-body">
                  <div class="basic-elements">
                    <form>
                      <div class="row">
                        <div class="col-lg-12">
                          <!-- <input class="form-control" type="hidden" name="id_pasien" placeholder="id_pasien"  readonly=""  > -->

                          <div class="form-group">
                            <label>NIK</label>
                            <input type="text" class="form-control"  name="nik" min="5" placeholder="Masukan NIK Pasien..." required onkeypress="return isNumberKey(event)" maxlength="16" >
                          </div>


                          <div class="form-group">
                            <label>Nama Pasien</label>
                            <input type="text" class="form-control"  name="nama" placeholder="Masukan Nama Pasien..." required>
                          </div>
                          <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $date; ?>" max="<?php echo $date;?>" required>
                          </div>
                          <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jk" required>
                              <option>-Pilih-</option>
                              <option value="L">Laki-laki</option>
                              <option value="P">Perempuan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Golongan Darah</label>
                            <select class="form-control" name="gol_darah" required>
                              <option>-Pilih-</option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="AB">AB</option>
                              <option value="O">O</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" name="agama" required>
                              <option>-Pilih-</option>
                              <option value="Buddha">Buddha</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Katolik">Katolik</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" placeholder="Masukan Pekerjaan.." required>
                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan Alamat.." required></textarea>
                          </div>
                          <div class="form-group">
                            <label>No HP</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="Masukan Nomor HP.."  maxlength="13"  onkeypress="return isNumberKey(event)" required >
                          </div>

                          <?php
                          $ambilkode = "SELECT max(no_rm) as no_id from tb_rekam_medis";
                          $hasil = mysqli_query($conn,$ambilkode);
                          while ($data = mysqli_fetch_array($hasil)) {
                            $kode_registrasi=$data['no_id'];
                            $no_urut=(int) substr($kode_registrasi,3,5);
                            $no_urut++;
                            $char="RM";
                            $new_reg=$char.sprintf("%05s",$no_urut);
                            ?>
                            <div class="form-group">
                              <label>No Rekam Medis</label>
                              <input class="form-control"  type="text" name="no_rm" value="<?php echo $new_reg; ?>" readonly>

                            </div>
                            <?php
                          }
                          ?>

                          <div class="form-group">
                            <label>Jamkes</label>
                            <select class="form-control" name="jamkes" required>
                              <option>-Pilih-</option>
                              <option value="Umum">Umum</option>
                              <option value="BPJS">BPJS</option>
                              <option value="Askes">Askes</option>
                              <option value="KIS">KIS</option>

                            </select>
                          </div>

                          <div class="form-group">
                            <label>No Jamkes</label>
                            <input type="text" class="form-control" name="no_jamkes" placeholder="Masukan Nomor Jaminan Kesehatan.."  maxlength="20"  onkeypress="return isNumberKey(event)" required >

                          </select>
                        </div>


                        <?php
                        $host = "localhost";
                        $username = "root";
                        $pass = "";
                        $db = "db_temiang";
                        $conn = mysqli_connect($host, $username, $pass, $db);
                        $querys = mysqli_query($conn, "SELECT tb_petugas.id_petugas,tb_akun.id_akun,tb_petugas.nama  from tb_petugas inner join tb_akun on tb_petugas.id_akun=tb_akun.id_akun where tb_akun.id_akun='$id_akun'");
                        $as = mysqli_fetch_array($querys);

                        ?>
                        <div class="form-group">
                          <label>Nama Petugas</label>
                          <input class="form-control" type="hidden" value="  <?php echo $as['id_petugas'];?>"   name="id_petugas" readonly>
                          <input class="form-control" type="text" value="  <?php echo $as['nama'];?>"    readonly>
                        </div>

                        <div class="form-group">
                          <div class="" align="center">
                            <button type="submit" name="tambah_pendaftaran_petugas" class="btn btn-primary">Simpan</button>
                            <button type="button" name=""     onclick="window.location.href='?m=petugas/petugas_pendaftaran'"  class="btn btn-danger">Batal</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>

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

<div id="search">
  <button type="button" class="close">×</button>
  <form>
    <input type="search" value="" placeholder="type keyword(s) here" />
    <button type="submit" class="btn btn-primary">Search</button>
  </form>
</div>
<script src="assets/js/scripts.js"></script>
<script type="text/javascript">

function isNumberKey(evt)
{
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
  return false;
  return true;
}

</script>
