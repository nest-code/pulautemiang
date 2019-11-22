<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
                <h1><b>Data Obat</b>  </h1>
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
                        <th>Jenis Akun</th>
                        <th>Nama Akun</th>
                        <th>Katasandi</th>
                        <th>Pertanyaan Keamanan</th>
                        <th>Jawaban Keamanan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                      $query = mysqli_query($conn, "select * from tb_akun");
                      while ($a = mysqli_fetch_array($query)) {
                        $n=$n+1;
                        ?>
                        <tr>
                          <td><?php echo "$n"?>.</td>
                          <td class="text-center" <?php if($a['level']=='Admin'){ ?> bgcolor="#ff8585" <?php } if($a['level']=='Dokter'){ ?> bgcolor="#FFECB3" <?php } ?> >
                            <?php echo $a['level'];?></td>
                          <td><?php echo $a['namaakun'];?></td>
                          <td><?php echo $a['katasandi'];?></td>
                          <td><?php echo $a['pertanyaan'];?></td>
                          <td><?php echo $a['jawaban'];?></td>

                          <td class="color-primary">
                            <?php $id_pasien=$a['id_pasien']; ?>
                            <form class="" action="" method="post">
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $id_pasien;?>" title="Lihat"><i class="ti-eye"></i></button>
                              <button type="button" class="btn btn-default btn-flat btn-sm" > <i class="fa fa-edit" title="Ubah"></i></button>

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
