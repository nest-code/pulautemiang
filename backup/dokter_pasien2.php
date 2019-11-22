<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1> <b>Data Pasien</b> </h1>

            </div>
          </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
          <div class="page-header">
            <div class="page-title">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Antrian Pasien</li>
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
                          <th>JK</th>
                          <th>Usia</th>
                          <th>Gol. Darah</th>
                          <th>No HP</th>
                          <th>Tindakan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $n=0;
                        include '../backend/koneksi.php';
                        $query = mysqli_query($conn, "select * from tb_pasien");
                        while ($a = mysqli_fetch_array($query)) {
                          $n=$n+1;
                          ?>
                          <?php
                          // $tgl_lahir =date_format(date_create($a->tgl_lahir), 'Y');
                          $tgl_lahir =date_format(date_create($a['tgl_lahir']), 'Y');
                          $sekarang = date('Y');
                          $usia = $sekarang - $tgl_lahir;
                          ?>

                          <tr>
                            <td><?php echo "$n"?>.</td>
                            <td><?php echo $a['nama'];?></td>
                            <td><?php echo $a['jk'];?></td>
                            <!-- <td><?php echo $a['tgl_lahir'];?></td> -->
                            <td><?php echo  $usia?> Tahun</td>
                            <td><?php echo $a['gol_darah'];?></td>
                            <!-- <td><?php echo $a['alamat'];?></td> -->
                            <td><?php echo $a['no_hp'];?></td>
                            <!-- <td><?php echo $a['pekerjaan'];?></td> -->

                            <td class="color-primary">
                              <form class="" action="" method="post">
                                <button type="button" class="btn btn-info btn-sm"       onclick="window.location.href='/pulautemiang/pages/md/dokter/view/view_rm.php?id_pasien=<?php echo $a['id_pasien'];  ?>'"  title="Lihat Rekam Medis"  ><i class="ti-eye"></i></button>
                                <!-- <button type="button" class="btn btn-default btn-sm"    onclick="window.location.href=''"><i class="ti-pencil-alt"></i></button> -->
                                <!-- <button type="submit" class="btn btn-danger btn-sm"           name="delete_pasien" ><i class="ti-trash"></i></button> -->
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
  </div>



  <script>
  //Inisiasi awal penggunaan jQuery
  $(document).ready(function(){
    //Pertama sembunyikan elemen class gambar
    $('.gambar').hide();

    //Ketika elemen class tampil di klik maka elemen class gambar tampil
    $('.tampil').click(function(){
      $('.gambar').show();
      $('.tampil').hide();

    });

    //Ketika elemen class sembunyi di klik maka elemen class gambar sembunyi
    $('.sembunyi').click(function(){
      //Sembunyikan elemen class gambar
      $('.gambar').hide();
    });
  });
  </script>




  <script>
  // Get the modal
  var modal = document.getElementById('myModalimage');

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById('myImg2');
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function(){
  	modal.style.display = "block";
  	modalImg.src = this.src;
  	captionText.innerHTML = this.alt;
  }
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("tutup")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
  	modal.style.display = "none";
  }
  </script>


  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>


  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<!--
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>

  <script src="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
