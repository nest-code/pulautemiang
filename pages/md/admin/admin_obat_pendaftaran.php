

  <?php
 $date = date('Y-m-d', strtotime('- 0 days'));
   ?>

<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1><b>Data Obat</b> | Tambah Obat </h1>
          </div>
        </div>
      </div>
      <!-- /# column -->

      <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
          <div class="page-title">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
              <li class="breadcrumb-item active">Tabel Obat</li>
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
            </div>
            <div class="card-body">
              <div class="basic-elements">
                <form action=""  method="post">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">

                        <input class="form-control" type="hidden" name="id_obat" readonly>

                        <div class="form-group">
                          <label> Nama Obat</label>
                          <input class="form-control" type="text"  name="nama_obat"  value="<?php echo $data['nama_obat'];?>" required>
                        </div>

                        <div class="form-group">
                          <label>Kategori Obat</label>

                            <select class="form-control" name="id_kategori_obat" required>
                                <option>-Pilih-</option>
                              <?php
                              $n=0;
                              include '../backend/koneksi.php';
                              $query = mysqli_query($conn, "select * from tb_kategori_obat order by nama_kategori");
                              while ($a = mysqli_fetch_array($query)) {
                                $n=$n+1;
                                ?>
                                <option value="<?php echo $a['id_kategori_obat'];?>"><?php echo $a['nama_kategori'];?></option>
                                <?php
                              }?>
                            </select>
                        </div>

                        <div class="form-group">
                          <label>Tanggal Kedaluarsa </label>
                          <input class="form-control" type="date"  name="tgl_kedaluarsa"  value="<?php echo $date; ?>" min="<?php echo $date;?>" required >

                        </div>

                        <div class="form-group">
                          <label>Harga Satuan </label>
                          <input class="form-control" type="text"  name="harga_satuan"  value="<?php echo $data['harga_satuan'];?>" onkeypress="return isNumberKey(event)" required maxlength="7">
                        </div>


                        <div class="form-group">
                          <label>Stok</label>
                          <input class="form-control" type="text" name="stok"   value="<?php echo $data['stok'];?>" maxlength="5" onkeypress="return isNumberKey(event)" required>
                        </div>

                        <!-- <div class="form-group">
                          <label>Keterangan</label>
                          <input class="form-control" type="text" name="keterangan"   value="<?php echo $data['keterangan'];?>" >
                        </div> -->

                        <div class="form-group" align="center">
                          <button class="btn btn-primary" type="submit" name="tambah_obat" value="submit">Simpan</button>
                          <button type="button" name=""class="btn btn-danger">Kembali</button>

                        </div>
                      </div>

                    </div>
                  </form>
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

function isNumberKey(evt)
{
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
  return false;
  return true;
}
</script>
