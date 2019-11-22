<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1>Selamat bekerja :  <span><?php echo " $namaakun"; ?></span> </h1>
              <div class="container">
              </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
          <div class="page-title">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Tabel Pengguna</li>
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
                        <th>Tgl Rekam Medis</th>
                        <th>No Rekam Medis</th>
                        <th>NIK</th>
                        <th>Nama Pasien</th>
                        <th>Jaminan Kesehatan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                      $query = mysqli_query($conn, "select * from tb_rekam_medis");
                      while ($a = mysqli_fetch_array($query)) {
                        $n=$n+1;
                        ?>
                        <tr>
                          <td><?php echo "$n"?>.</td>
                          <td><?php echo $a['tgl_rekam'];?></td>
                          <td><?php echo $a['no_rm'];?></td>
                          <td><?php echo $a['nip'];?></td>
                          <td></td>
                          <td><?php echo $a['jaminan_kesehatan'];?></td>
                          <td class="color-primary">
                            <?php $id_pasien=$a['id_pasien']; ?>
                            <form class="" action="" method="post">
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $id_pasien;?>"> <i class="fa fa-user"></i> Detail</button>
                              <button type="button" class="btn btn-default btn-flat btn-sm" > <i class="fa fa-edit"></i>Edit</button>
                              <button type="submit" name="delete_pasien" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i> Hapus</button>
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
