<?php
include 'backend/koneksi.php';
include_once 'backend/select/select_antrian_berobat.php';
include_once 'backend/select/select_antrian_poli.php';
?>

<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1><b>Berobat Pasien</b> | Antrian Poli  </h1>
            </div>
          </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
          <div class="page-header">
            <div class="page-title">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
                <li class="breadcrumb-item active">Antrian Poli </li>
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
                <div class="main">
                  <div class="container-fluid">
                    <div class="row">
                    </div>

                    <div id="main-content">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="card p-0">
                            <div class="stat-widget-three">
                              <div class="stat-icon bg-primary">
                              <i class="fa fa-users" aria-hidden="true"></i>
                              </div>
                              <div class="stat-content">
                                <div class="stat-digit">
                                  <?php
                                  echo "$jum_umum";
                                  ?>
                                </div>
                                <div class="stat-text">  <a href="?m=petugas/petugas_antrian_umum">Poli Umum</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="card p-0">
                            <div class="stat-widget-three">
                              <div class="stat-icon bg-success">
                                <i class="fa fa-child" aria-hidden="true"></i>
                              </div>
                              <div class="stat-content">
                                <div class="stat-digit">
                                <?php
                                  echo "$jum_anak";
                                  ?>
                                </div>
                                <div class="stat-text">  <a href="?m=petugas/petugas_antrian_anak">Poli Anak</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="card p-0">
                            <div class="stat-widget-three">
                              <div class="stat-icon bg-warning">
                                <i class="ti-face-smile"></i>
                              </div>
                              <div class="stat-content">
                                <div class="stat-digit">
                                  <?php
                                      echo "$jum_gigi";
                                  ?>
                                </div>
                                <div class="stat-text">  <a href="?m=petugas/petugas_antrian_gigi">Poli Gigi</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="card p-0">
                            <div class="stat-widget-three">
                              <div class="stat-icon bg-danger">
                              <i class="fa fa-female" aria-hidden="true"></i>
                              </div>
                              <div class="stat-content">
                                <div class="stat-digit">
                                  <?php
                                    echo "$jum_kb";
                                  ?>
                                </div>
                                <div class="stat-text">  <a href="?m=petugas/petugas_antrian_kiakb">Poli KIA/KB</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="card p-0">
                            <div class="stat-widget-three">
                              <div class="stat-icon bg-warning">
                            <i class="fa fa-bed" aria-hidden="true"></i>
                              </div>
                              <div class="stat-content">
                                <div class="stat-digit">
                                  <?php
                                  echo "$jum_dots";
                                  ?>
                                </div>
                                <div class="stat-text">  <a href="?m=petugas/petugas_antrian_dots">DOTS</a></div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="card p-0">
                            <div class="stat-widget-three">
                              <div class="stat-icon bg-danger">
                              <i class="fa fa-heartbeat" aria-hidden="true"></i>
                              </div>
                              <div class="stat-content">
                                <div class="stat-digit">
                                  <?php
                                    echo "$jum_igd";
                                  ?>
                                </div>
                                <div class="stat-text">  <a href="?m=petugas/petugas_antrian_igd">IGD</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
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
                            <th>Tanggal</th>
                            <th>Nama Pasien</th>
                            <th>Poli</th>
                            <th>Usia</th>
                            <th>Status</th>
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
                          $tanggal=date('Y-m-d');
                          $query = mysqli_query($conn, "  SELECT * from tb_pasien inner join tb_pendaftaran on tb_pasien.id_pasien=tb_pendaftaran.id_pasien inner join tb_jenis_poli on tb_pendaftaran.id_jenis_poli=tb_jenis_poli.id_jenis_poli where tb_pendaftaran.status='Menunggu' and tb_pendaftaran.tanggal like '%$tanggal%' order by tb_pendaftaran.tanggal asc");

                          // $query = mysqli_query($conn, "  select * from tb_pasien inner join tb_pendaftaran on tb_pasien.id_pasien=tb_pendaftaran.id_pasien inner join tb_jenis_poli on tb_pendaftaran.id_jenis_poli=tb_jenis_poli.id_jenis_poli where tb_pendaftaran.status='Menunggu' order by tb_pendaftaran.tanggal desc");
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
                              <td><?php echo $a['tanggal'];?></td>
                              <td><?php echo $a['nama'];?></td>
                              <td><?php echo $a['nama_jenis'];?></td>
                              <td><?php echo $usia?>  Tahun</td>
                              <td>
                                   <?php if($a['status'] == 'Menunggu'){ echo ' <span class="badge badge-primary">Menunggu</span>'; } ?>
                                   <?php if($a['status'] == 'Proses'){ echo ' <span class="badge badge-warning">Proses</span>'; } ?>
                                   <?php if($a['status'] == 'Selesai'){ echo ' <span class="badge badge-success">Selesai</span>'; } ?>
                              </td>
                              <td class="color-primary">
                                <form class="" action="" method="post">
                                  <button type="button"  class="btn btn-primary btn-sm"          onclick="window.location.href='/pulautemiang/pages/md/petugas/view/view_beranda_pendaftaran.php?id_pendaftaran=<?php echo $a['id_pendaftaran'] ?> '"  title="Lihat"><i class="ti-eye"></i></button>
                                  <button type="button"  class="btn btn-danger btn-sm"         onclick="hapus(<?php echo $a['id_pendaftaran']?>);"  title="Hapus"><i class="fa fa-eraser"></i></button>

                                  <!-- <a href="/pulautemiang/backend/delete/delete_pendaftaran.php?id_pendaftaran=<?php echo $a['id_pendaftaran'] ?>" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="fa fa-eraser" title="Hapus"></i></a> -->
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
                      window.location.href='/pulautemiang/backend/delete/delete_pendaftaran.php?id_pendaftaran='+hapus;
                  });

            }
    </script>
