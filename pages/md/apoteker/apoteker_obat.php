<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1><b>Data Obat</b>  </h1>
              <!-- <button type="button" class="btn btn-primary"        onclick="window.location.href='?m=admin/admin_obat_pendaftaran'"  title="Tambah Obat"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Obat</button> -->
              <!-- <button type="button" class="btn btn-warning"        onclick="window.location.href='?m=admin/admin_kategori'"  title="Kategori Obat"><i class="fa fa-edit"></i> Tambah Kategori Obat</button> -->
          </div>
        </div>
      </div>
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
    <!-- /# row -->
    <section id="main-content">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-title"></div>
            <div class="card-body">
              <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                  <table id="bootstrap-data-table-export" class="table table-striped ">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Obat</th>
                        <th>Kategori Obat</th>
                        <th>Tanggal Kedaluarsa</th>
                        <th>Stok</th>
                        <th>Harga Satuan</th>
                        <!-- <th>Keterangan</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                      $query = mysqli_query($conn, "select * from tb_obat inner join tb_kategori_obat on tb_obat.id_kategori_obat=tb_kategori_obat.id_kategori_obat");
                      while ($a = mysqli_fetch_array($query)) {
                        $n=$n+1;
                        ?>
                        <tr>
                          <td><?php echo "$n"?>.</td>
                          <td><?php echo $a['nama_obat'];?></td>
                          <td><?php echo $a['nama_kategori'];?></td>
                          <td><?php echo $a['tgl_kedaluarsa'];?></td>
                          <td><?php echo $a['stok'];?></td>
                          <td><?php echo Rp. $a['harga_satuan'];?></td>
                          <!-- <td><?php echo $a['keterangan'];?></td> -->
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


      <div class="modal fade" id="editObat" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Form Data Obat</h4>
            </div>


            <form class="" action="" method="post">
              <input type="hidden" name="id_obat" id="id_obat" value="">
              <div class="modal-body">

                <div class="form-group">
                  <label for="">Nama Obat</label>
                  <input type="text" class="form-control" name="nama_obat" required="required" id="nama_obat">
                </div>

                <div class="form-group">
                  <label for="">Jenis Obat</label>
                    <input type="text" class="form-control" name="harga_satuan" required="required" id="satuan">
                </div>

                <div class="form-group">
                  <label for="">Jumlah</label>
                  <input type="text" class="form-control" name="stok" required="required" id="stok">
                </div>

                <div class="form-group">
                  <label for="">Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" required="required" id="keterangan">
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" name="edit_obat">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
function hapus(id){
  var hapus = id;
          swal({
                  title: "Anda yakin hapus data ini ?",
                  text: "Data tidak bisa dikembalikan jika sudah dihapus !!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Ya Hapus",
                  cancelButtonText: "Batal",
                  closeOnConfirm: false
              },
              function(){
                  swal("Berhasil dihapus !!", "Berhasil dihapus !!", "success");
                  window.location.href='/pulautemiang/backend/delete/delete_obat.php?id_obat='+hapus;
              });

        }
</script>





<script type="text/javascript">

function isNumberKey(evt)
{
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
  return false;
  return true;
}
</script>
