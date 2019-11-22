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
              <!-- <button type="button" class="btn btn-primary"        onclick="window.location.href='/pulautemiang/pages/md/petugas/view/pendaftaran_umum.php'"  title="Data Pasien"><i class="fa fa-table" aria-hidden="true"></i> Daftar Antrian</button> -->
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
                                <div class="stat-text">  <a href="?m=petugas/petugas_antrian_dots">Poli DOTS</a></div>
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


    <script type="text/javascript">
    function antrian(id){
      var antrian = id;
      let cek=0;
      $.ajax({
        url:"/pulautemiang/backend/validasi.php",
        method:"POST",
        data: {id:antrian
        },
        success:function(data){
          var $response = $(data);
            cek = $response.filter('#cek').text();
            if (cek==1) {
              swal({
                      title: "Pasien sudah Terdaftar",
                      text: "Pasien telah terdaftar pada antrian berobat",
                      type: "warning",
                      confirmButtonColor: "#6495ED",
                      confirmButtonText: "Kembali",
                      closeOnConfirm: false
                  },
                );

            }else{
              window.location.href='/pulautemiang/pages/md/petugas/view/pendaftarn_umum.php?id_pasien='+antrian;
            }
        }
      })
    }
    </script>
