<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1><b>Data Dokter</b>   </h1>
              <button type="button" class="btn btn-primary" onclick="window.location.href='?m=admin/admin_pendaftaran_dokter'"><i class="fa fa-plus-circle" aria-hidden="true"></i>Tambah Data</button>
          </div>
        </div>
      </div>
        <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
          <div class="page-title">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
              <li class="breadcrumb-item active">Tabel  Dokter</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

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
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>JK</th>
                        <th>Poli</th>
                        <th>No. Hp</th>
                        <th>Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                     $query = mysqli_query($conn, "SELECT * FROM tb_dokter inner join tb_jenis_poli on  tb_dokter.id_jenis_poli = tb_jenis_poli.id_jenis_poli  where tb_dokter.id_jenis_poli = tb_jenis_poli.id_jenis_poli");
                      while ($a = mysqli_fetch_array($query)) {
                        $n=$n+1;
                        ?>
                        <tr>
                          <td><?php echo "$n"?>.</td>
                          <td><?php echo $a['nip'];?></td>
                          <td><?php echo $a['nama'];?></td>
                          <td>
                            <?php if($a['jk'] == 'L'){ echo 'Laki-laki'; } ?>
                            <?php if($a['jk'] == 'P'){ echo 'Perempuan'; } ?>
                          </td>

                          <td><?php echo $a['nama_jenis'];?></td>
                          <td><?php echo $a['no_hp'];?></td>
                          <td class="color-primary">
                            <form class="" action="" method="post">
                              <button type="button"  class="btn btn-primary btn-sm"           onclick="window.location.href='/pulautemiang/pages/md/admin/view/view_dokter.php?nip=<?php echo $a['nip'] ?> '"  title="Lihat"><i class="fa fa-eye" title="Lihat"></i>  Lihat</button>
                              <button type="button" class="btn btn-default btn-flat btn-sm"   onclick="window.location.href='/pulautemiang/pages/md/admin/edit/edit_dokter.php?nip=<?php echo $a['nip'] ?> '"  > <i class="fa fa-edit" title="Ubah"></i>  Ubah</button>
                              <!-- <button type="button"  class="btn btn-danger btn-sm" onclick="window.location.href='../backend/delete/delete_dokter.php?nip=<?php echo $a['nip'] ?> '" title="Hapus"><i class="fa fa-eraser"></i>  Hapus</button> -->
                              <button type="button"  class="btn btn-danger btn-sm"       onclick="hapus(<?php echo $a['nip']?>);" ><i class="fa fa-eraser"></i>Hapus</button>
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
                  window.location.href='/pulautemiang/backend/delete/delete_dokter.php?nip='+hapus;
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
