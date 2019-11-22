<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1><b>Data Pasien</b>  </h1>
              <!-- <button type="button" class="btn btn-primary" onclick="window.location.href='?m=admin/admin_pendaftaran_pasien'"><i class="fa fa-plus-circle" aria-hidden="true"></i>Tambah Data</button> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
          <div class="page-title">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
              <li class="breadcrumb-item active">Tabel Pasien</li>
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
              <!-- <h4>Table Pasien </h4> -->
            </div>
            <div class="card-body">
              <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                  <table id="bootstrap-data-table-export" class="table table-striped ">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>No. Hp</th>
                        <th>Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      $host = "localhost";
                      $username = "root";
                      $pass = "";
                      $db = "db_temiang";
                      	$conn = mysqli_connect($host, $username, $pass, $db);
                        $query = mysqli_query($conn, "select * from tb_pasien");
                        while ($a = mysqli_fetch_array($query)) {
                        $n=$n+1;
                        ?>
                        <?php
                        $tgl_lahir =date_format(date_create($a['tgl_lahir']), 'Y');
                        $sekarang = date('Y');
                        $usia = $sekarang - $tgl_lahir;
                        ?>
                        <tr>
                          <td><?php echo "$n"?>.</td>
                          <td><?php echo $a['nama'];?></td>
                          <td>
                            <?php if($a['jk'] == 'L'){ echo 'Laki-laki'; } ?>
                            <?php if($a['jk'] == 'P'){ echo 'Perempuan'; } ?>
                          </td>
                          <td><?php echo  $usia?> Tahun</td>
                          <td><?php echo $a['no_hp'];?></td>

                          <td class="color-primary">
                            <form class="" action="" method="post">
                              <button type="button"  class="btn btn-primary btn-sm"          onclick="window.location.href='/pulautemiang/pages/md/admin/view/view_pasien.php?id_pasien=<?php echo $a['id_pasien'] ?> '"  title="Lihat"><i class="ti-eye"></i>  Lihat</button>
                              <button type="button" class="btn btn-default btn-flat btn-sm"  onclick="window.location.href='/pulautemiang/pages/md//admin/edit/edit_pasien.php?id_pasien=<?php echo $a['id_pasien'] ?> '"  title="Ubah"> <i class="fa fa-edit"></i>  Ubah</button>
                              <button type="button"  class="btn btn-danger btn-sm"       onclick="hapus(<?php echo $a['id_pasien']?>);" ><i class="fa fa-eraser"></i>Hapus</button>
                              <button type="button"  class="btn btn-danger btn-sm"       onclick="/?m=admin/admin_petugas" ><i class="fa fa-eraser"></i>Hapus</button>
                              <!-- <button type="submit" name="delete_pasien" class="btn btn-danger btn-sm"  title="Hapus"><i class="fa fa-eraser"></i> Hapus</button> -->
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
                  window.location.href='/pulautemiang/backend/delete/delete_pasien.php?id_pasien='+hapus;
              });

        }
</script>
