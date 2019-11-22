<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
                <h1><b>Data Poli</b>  </h1>


            </div>
          </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
          <div class="page-header">
            <div class="page-title">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Poli</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /# column -->
      </div>
      <!-- /# row -->
      <section id="main-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-title">
                <!-- <h4>Table Pengguna </h4> -->
              </div>
              <div class="card-body">
                <div class="bootstrap-data-table-panel">
                  <div class="table-responsive">
                    <table id="bootstrap-data-table-export" class="table table-striped ">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Poli</th>
                          <th>Tindakan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $n=0;
                        include '../backend/koneksi.php';
                        $query = mysqli_query($conn, "select * from tb_jenis_poli");
                        while ($a = mysqli_fetch_array($query)) {
                          $n=$n+1;
                          ?>
                          <tr>
                            <td><?php echo "$n"?>.</td>
                            <td><?php echo $a['nama_jenis'];?></td>
                            <td class="color-primary">
                              <form class="" action="#" method="get">
                                <!-- <button type="button"  class="btn btn-default btn-flat btn-sm" onclick="editPasien(<?php echo $a['id_obat'] ?>)" title="Ubah" ><i class="fa fa-edit"></i></button> -->
                                <!-- <button type="button"  class="btn btn-danger btn-sm" onclick="window.location.href='../backend/delete/delete_jenis_poli.php?id_jenis_poli=<?php echo $a['id_jenis_poli'] ?> '" ><i class="fa fa-eraser"></i> Hapus</button> -->
                                <!-- <button type="button"  class="btn btn-danger btn-sm" onclick="window.location.href='../backend/delete/delete_jenis_poli.php?id_jenis_poli=<?php echo $a['id_jenis_poli'] ?> '" title="Hapus" ><i class="fa fa-eraser"></i></button> -->
                              </form>
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
