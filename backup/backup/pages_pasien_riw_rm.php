<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1>Hello, <span>Welcome Here</span></h1>
              <div class="container">
                <!-- <h2>Large Modal</h2> -->
                <!-- Button to Open the Modal -->
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Tambah Data
                </button> -->



                <!-- The Modal -->


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
                <li class="breadcrumb-item active">Table-Basic</li>
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
                <h4>Table Bordered </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Subjektif</th>
                        <th>Objektif</th>
                        <th>Analisis</th>
                        <th>Tindakan (Obat)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                      $query = mysqli_query($conn, "select * from tb_detail_rekam_medis");
                      $query = mysqli_query($conn, "select * from tb_detail_rekam_medis");
                      while ($a = mysqli_fetch_array($query)) {
                        $n=$n+1;
                        ?>
                        <tr>
                          <td><?php echo "$n"?>.</td>
                          <td><?php echo $a['tgl_kunjungan'];?></td>
                          <td><?php echo $a['subjektif'];?></td>
                          <td><?php echo $a['objektif'];?></td>
                          <td><?php echo $a['assement'];?></td>
                          <td><?php echo $a['plant'];?></td>


                      </tr>

                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="footer">
              <p>2018 © Admin Board. - <a href="#">example.com</a></p>
            </div>
          </div>
        </div>


      </section>
    </div>
  </div>
</div>
