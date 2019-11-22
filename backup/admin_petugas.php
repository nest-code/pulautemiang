<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1>Selamat bekerja :  <span><?php echo " $namaakun"; ?></span> </h1>
              <div class="container">
              <button type="button" class="btn btn-primary" onclick="window.location.href='?m=admin/admin_pendaftaran_petugas'">Tambah Data</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /# column -->
      <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
          <div class="page-title">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Tabel Petugas</li>
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
              <!-- <h4>Table Pasien </h4> -->
            </div>
            <div class="card-body">
              <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                  <table id="bootstrap-data-table-export" class="table table-striped ">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>No. HP</th>
                        <th>Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                      $query = mysqli_query($conn, "select * from tb_petugas");
                      while ($a = mysqli_fetch_array($query)) {
                        $n=$n+1;
                        ?>
                        <tr>
                          <td><?php echo "$n"?>.</td>
                          <td><?php echo $a['nama'];?></td>
                          <td><?php echo $a['jk'];?></td>
                          <td><?php echo $a['tgl_lahir'];?></td>
                          <td><?php echo $a['agama'];?></td>
                          <td><?php echo $a['alamat'];?></td>
                          <td><?php echo $a['no_hp'];?></td>

                          <td class="color-primary">
                            <?php $id_pasien=$a['id_pasien']; ?>
                            <form class="" action="" method="post">
                              <!-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $id_pasien;?>"> <i class="fa fa-user"></i>Lihat</button> -->
                              <button type="button" class="btn btn-default btn-flat btn-sm" > <i class="fa fa-edit" title="Ubah"></i></button>
                              <button type="submit" name="delete_pasien" class="btn btn-danger btn-sm"><i class="fa fa-eraser" title="Hapus"></i></button>
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
