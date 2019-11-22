<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1><b>Data Obat</b>  </h1>
              <button type="button" class="btn btn-primary"        onclick="window.location.href='?m=admin/admin_obat_pendaftaran'"  title="Tambah Obat"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Obat</button>
              <button type="button" class="btn btn-warning"        onclick="window.location.href='?m=admin/admin_kategori'"  title="Kategori Obat"><i class="fa fa-edit"></i> Tambah Kategori Obat</button>
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
                        <th>Aksi</th>
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
                          <td>Rp.<?php
                            $harga=$a['harga_satuan'];
                           echo number_format("$harga");?>
                         </td>
                          <td class="color-primary">
                            <form class="" action="" method="post">
                              <button type="button"  class="btn btn-default btn-sm"      onclick="window.location.href='/pulautemiang/pages/md/admin/edit/edit_obat.php?id_obat=<?php echo $a['id_obat'] ?> '"  title="Ubah"><i class="fa fa-edit" title="Ubah"></i> Ubah</button>
                              <button type="button"  class="btn btn-danger btn-sm"       onclick="hapus(<?php echo $a['id_obat']?>);" ><i class="fa fa-eraser"></i>Hapus</button>
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
