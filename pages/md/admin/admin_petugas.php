<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
            <h1><b>Data Petugas</b>  </h1>
              <button type="button" class="btn btn-primary" onclick="window.location.href='/pulautemiang/index.php?m=admin/admin_pendaftaran_petugas'"><i class="fa fa-plus-circle" aria-hidden="true"></i>Tambah Data</button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
          <div class="page-title">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
              <li class="breadcrumb-item active">Tabel Petugas</li>
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
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Level</th>
                        <th>No. HP</th>
                        <th>Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                      $query = mysqli_query($conn, "select * from tb_petugas inner join tb_akun on tb_petugas.id_akun=tb_akun.id_akun order by level asc");
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
                          <td>
                            <!-- <?php echo $a['level'];?> -->
                            <?php if($a['level'] == 'Admin'){ echo ' <span class="badge badge-info">Admin</span>'; } ?>
                            <?php if($a['level'] == 'Petugas'){ echo ' <span class="badge badge-primary">Petugas</span>'; } ?>
                            <?php if($a['level'] == 'Kepala'){ echo ' <span class="badge badge-danger">Kepala</span>'; } ?>
                            <?php if($a['level'] == 'Apotek'){ echo ' <span class="badge badge-success">Apotek</span>'; } ?>
                            <?php if($a['level'] == 'Dokter'){ echo ' <span class="badge badge-warning">Dokter</span>'; } ?>
                          </td>
                          <td><?php echo $a['no_hp'];?></td>
                          <td class="color-primary">
                            <form class="" action="" method="post">
                              <button type="button"  class="btn btn-primary btn-sm"          onclick="window.location.href='/pulautemiang/pages/md/admin/view/view_petugas.php?id_petugas=<?php echo $a['id_petugas'] ?> '"  ><i class="fa fa-eye" title="Lihat"></i>  Lihat</button>
                              <button type="button" class="btn btn-default btn-flat btn-sm"  onclick="window.location.href='/pulautemiang/pages/md/admin/edit/edit_petugas.php?id_petugas=<?php echo $a['id_petugas'] ?> '"  ><i class="fa fa-edit" title="Ubah"></i>  Ubah</button>
                              <button type="submit" name="delete_pasien" class="btn btn-danger btn-sm"><i class="fa fa-eraser" title="Hapus"></i>  Hapus</button>
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
