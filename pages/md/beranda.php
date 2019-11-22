<?php
include 'menu.php';
include 'backend/koneksi.php';
include_once 'backend/select/select_akun.php';
include_once 'backend/select/select_tansaksi.php';
include_once 'backend/select/select_transaksi_kepala.php';

include_once 'backend/select/select_dokter.php';
include_once 'backend/select/select_obat.php';
include_once 'backend/select/select_pasien.php';
include_once 'backend/select/select_petugas.php';
include_once 'backend/select/select_jenis_poli.php';
include_once 'backend/select/select_antrian0.php';
include_once 'backend/select/select_resep_masuk.php';
include_once 'backend/select/select_resep_proses.php';
include_once 'backend/select/select_transaksi.php';
include_once 'backend/select/select_tansaksi_total.php';
include_once 'backend/select/select_tansaksi_totals.php';

include_once 'backend/select/select_resep_obat.php';
// include_once 'backend/select/select_pembayaran.php';
?>

<div class="content-wrap">
  <?php include '../backend/kontroller.php'; ?>
  <?php $hak= $_SESSION['level'];
  $id_akun=$_SESSION['id_akun'];
  ?>



  <?php if ($hak=='Admin'){?>
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h1>Hallo, <span>Selamat Datang</span></h1>
              </div>
            </div>
          </div>

          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                  <li class="breadcrumb-item active">Menu Utama</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- /# row -->
        <div id="main-content">
          <div class="row">
            <div class="col-lg-4">
              <div class="card p-0">
                <div class="stat-widget-three">
                  <div class="stat-icon bg-primary">
                    <i class="ti-user"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-digit">
                      <?php
                      echo "$petugas_banyakData";
                      ?>
                    </div>
                    <div class="stat-text">Data Petugas</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="card p-0">
                <div class="stat-widget-three">
                  <div class="stat-icon bg-warning">
                  <i class="fa fa-user-md" aria-hidden="true"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-digit">
                      <?php
                      echo "$dokter_banyakData";
                      ?>
                    </div>
                    <div class="stat-text">Data Dokter</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="card p-0">
                <div class="stat-widget-three">
                  <div class="stat-icon bg-danger">
                    <i class="ti-wheelchair"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-digit">
                      <?php
                      echo "$pasien_banyakData";
                      ?>
                    </div>
                    <div class="stat-text">Data Pasien</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="card p-0">
                <div class="stat-widget-three">
                  <div class="stat-icon bg-success">
                    <i class="ti-package"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-digit">
                      <?php
                      echo "$obat_banyakData";
                      ?>
                    </div>
                    <div class="stat-text"> Data Obat</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="card p-0">
                <div class="stat-widget-three">
                  <div class="stat-icon bg-primary">
                    <i class="ti-pin2"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-digit">
                      <?php
                      echo "$poli_banyakData";
                      ?>
                    </div>
                    <div class="stat-text">Ruang Poli</div>
                  </div>
                </div>
              </div>
            </div>







          </div>
        <?php }else if ($hak=='Kepala') { ?>

          <div class="main">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                  <div class="page-header">
                    <div class="page-title">
                      <h1>Hallo, <span>Selamat Datang</span></h1>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 p-l-0 title-margin-left">
                  <div class="page-header">
                    <div class="page-title">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">Menu Utama</li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>


              <div id="main-content">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card p-0">
                      <div class="stat-widget-three">
                        <div class="stat-icon bg-success">
                          <i class="ti-package"></i>
                        </div>
                        <div class="stat-content">
                          <div class="stat-digit">
                            <?php
                            echo "$obat_banyakData";
                            ?>
                          </div>
                          <div class="stat-text"> Data Obat</div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-6">
                    <div class="card p-0">
                      <div class="stat-widget-three">
                        <div class="stat-icon bg-info">
                          <i class="ti-money"></i>
                        </div>
                        <div class="stat-content">
                          <div class="stat-digit">
                            <?php
                            echo "$transaksi_banyakDatass";
                            ?>
                          </div>
                          <div class="stat-text">Data Transaksi Berobat </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="card p-0">
                      <div class="stat-widget-three">
                        <div class="stat-icon bg-primary">
                          <i class="ti-wheelchair"></i>
                        </div>
                        <div class="stat-content">
                          <div class="stat-digit">
                            <?php
                            $pasien_banyakData;
                            echo "$pasien_banyakData";
                            ?>
                          </div>
                          <div class="stat-text"> Pasien</div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-6">
                    <div class="card p-0">
                      <div class="stat-widget-three">
                        <div class="stat-icon bg-danger">
                          <i class="ti-pin2"></i>
                        </div>
                        <div class="stat-content">
                          <div class="stat-digit">
                            <?php
                            echo "$transaksi_banyakDatass";
                            ?>
                          </div>
                          <div class="stat-text">Data Poli Berobat </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <?php }else if ($hak=='Apotek') { ?>

              <div class="main">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                      <div class="page-header">
                        <div class="page-title">
                          <h1>Hallo, <span>Selamat Datang</span></h1>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 p-l-0 title-margin-left">
                      <div class="page-header">
                        <div class="page-title">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
                            <li class="breadcrumb-item active">Menu Utama</li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="main-content">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="card p-0">
                          <div class="stat-widget-three">
                            <div class="stat-icon bg-success">
                              <i class="ti-package"></i>
                            </div>
                            <div class="stat-content">
                              <div class="stat-digit">
                                <?php
                                echo "$obat_banyakData";
                                ?>
                              </div>
                              <div class="stat-text"> Data Obat</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card p-0">
                          <div class="stat-widget-three">
                            <div class="stat-icon bg-primary">
                              <i class="ti-layers-alt"></i>
                            </div>
                            <div class="stat-content">
                              <div class="stat-digit">
                                <?php
                                echo "$antriresep";
                                ?>
                              </div>
                              <div class="stat-text">Antrian Resep Obat</div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- <div class="col-lg-4">
                        <div class="card p-0">
                          <div class="stat-widget-three">
                            <div class="stat-icon bg-primary">
                              <i class="ti-hand-open"></i>
                            </div>
                            <div class="stat-content">
                              <div class="stat-digit">
                                <?php
                                echo "$resep_proses";
                                ?>
                              </div>
                              <div class="stat-text"> Ambil Obat</div>
                            </div>
                          </div>
                        </div>
                      </div> -->

                      <div class="col-lg-4">
                        <div class="card p-0">
                          <div class="stat-widget-three">
                            <div class="stat-icon bg-warning">
                              <i class="ti-money"></i>
                            </div>
                            <div class="stat-content">
                              <div class="stat-digit">
                                <?php
                                    echo "$transaksi_banyakDatas";

                                ?>
                              </div>
                              <div class="stat-text">Pembayaran</div>
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>

              <?php }else if ($hak=='Petugas') { ?>

                <div class="main">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                          <div class="page-title">
                            <h1>Hallo, <span>Selamat Datang</span></h1>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                          <div class="page-title">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                              <li class="breadcrumb-item active">Menu Utama</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- /# row -->
                    <div id="main-content">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="card p-0">
                            <div class="stat-widget-three">
                              <div class="stat-icon bg-success">
                                <i class="ti-layers-alt"></i>
                              </div>
                              <div class="stat-content">
                                <div class="stat-digit">
                                  <?php
                                  echo "$antri0";
                                  ?>
                                </div>
                                <div class="stat-text">Antrian Berobat</div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="card p-0">
                            <div class="stat-widget-three">
                              <div class="stat-icon bg-info">
                                <i class="ti-wheelchair"></i>
                              </div>
                              <div class="stat-content">
                                <div class="stat-digit">
                                  <?php
                                  $pasien_banyakData;
                                  echo "$pasien_banyakData";
                                  ?>
                                </div>
                                <div class="stat-text">Data Pasien</div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- <div class="col-lg-4">
                          <div class="card p-0">
                            <div class="stat-widget-three">
                              <div class="stat-icon bg-warning">
                                <i class="ti-money"></i>
                              </div>
                              <div class="stat-content">
                                <div class="stat-digit">
                                  <?php
                                  // echo "$bayar";
                                      echo "$transaksi_banyakData";
                                  ?>
                                </div>
                                <div class="stat-text">Pembayaran</div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                      </div>

                    <?php }else if ($hak=='Dokter') { ?>

                      <?php
                      // $host = "localhost";
                      // $username = "root";
                      // $pass = "";
                      // $db = "db_temiang";
                      // $conn = mysqli_connect($host, $username, $pass, $db);

                      include_once '../../backend/koneksi.php';


                      $query1 = mysqli_query($conn, " SELECT tb_dokter.nip,tb_dokter.id_jenis_poli FROM tb_dokter inner join tb_akun on tb_dokter.id_akun=tb_akun.id_akun  where tb_akun.id_akun='$id_akun'");
                      $data1 = mysqli_fetch_array($query1);
                      $polis=$data1['id_jenis_poli'];

                      $query0 = mysqli_query($conn, " SELECT COUNT(id_pendaftaran) as jumlah FROM tb_pendaftaran where id_jenis_poli='$polis' and status='Menunggu'");
                      $data0 = mysqli_fetch_array($query0);
                      $jum=$data0['jumlah'];
                      ?>



                      <div class="main">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-lg-8 p-r-0 title-margin-right">
                              <div class="page-header">
                                <div class="page-title">
                                  <h1>Hallo, <span>Selamat Datang</span></h1>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 p-l-0 title-margin-left">
                              <div class="page-header">
                                <div class="page-title">
                                  <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Menu Utama</li>
                                  </ol>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div id="main-content">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="card p-0">
                                  <div class="stat-widget-three">
                                    <div class="stat-icon bg-success">
                                      <i class="ti-layers-alt"></i>
                                    </div>
                                    <div class="stat-content">
                                      <div class="stat-digit">
                                        <?php
                                        echo "$jum";
                                        ?>
                                      </div>
                                      <div class="stat-text">Antrian Periksa</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>


                                <?php }else if ($hak=='Dokter') { ?>
                                  <div class="main">
                                    <div class="container-fluid">
                                      <div class="row">
                                        <div class="col-lg-8 p-r-0 title-margin-right">
                                          <div class="page-header">
                                            <div class="page-title">
                                              <h1>Hallo, <span>Selamat Datang</span></h1>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- /# column -->
                                        <div class="col-lg-4 p-l-0 title-margin-left">
                                          <div class="page-header">
                                            <div class="page-title">
                                              <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                                <li class="breadcrumb-item active">Menu Utama</li>
                                              </ol>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="main-content">
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <div class="card p-0">
                                              <div class="stat-widget-three">
                                                <div class="stat-icon bg-primary">
                                                  <i class="ti-user"></i>
                                                </div>
                                                <div class="stat-content">
                                                  <div class="stat-digit">
                                                    <?php
                                                    echo "$pasien_banyakData";
                                                    ?>

                                                  </div>
                                                  <div class="stat-text">Data Pasien</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-lg-6">
                                            <div class="card p-0">
                                              <div class="stat-widget-three">
                                                <div class="stat-icon bg-success">
                                                  <i class="ti-package"></i>
                                                </div>
                                                <div class="stat-content">
                                                  <div class="stat-digit">
                                                    <?php
                                                    echo "$rm_banyakData";
                                                    ?>
                                                  </div>
                                                  <div class="stat-text">Rekam Medis</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      <?php }?>

                                      <div class="row">
                                        <div class="col-lg-12">
                                          <div class="footer">
                                            <p>2019 © Puskesmas Pulau Temiang</p>
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                              </div>
