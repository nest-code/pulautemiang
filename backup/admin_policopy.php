<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
                <h1><b>Data Poli</b>  </h1>
              <!-- <a href="../backend/update/update_poli.php">ahay</a> -->
              <div class="container">
                <!-- <h2>Large Modal</h2> -->
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Tambah Data
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Poli</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <div class="card">
                          <div class="card-body">
                            <div class="form-validation">
                              <form class="form-valide" action="" method="post">
                                <input type="hidden" name="id_jenis_poli" value="" id="id_jenis_poli">

                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label" for="val-username">Nama Poli <span class="text-danger"></span></label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" placeholder="Nama Poli" required>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <div class="col-lg-8 ml-auto" align="right">

                                    <!-- <div class="col-lg-8 ml-auto"> -->
                                    <button type="submit" class="btn btn-primary" name="tambah_poli">Simpan</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                      </div>

                    </div>
                  </div>
                </div>

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
                                <button type="button"  class="btn btn-default btn-flat btn-sm" onclick="editPasien(<?php echo $a['id_obat'] ?>)" title="Ubah" ><i class="fa fa-edit"></i></button>
                                <!-- <button type="button"  class="btn btn-danger btn-sm" onclick="window.location.href='../backend/delete/delete_jenis_poli.php?id_jenis_poli=<?php echo $a['id_jenis_poli'] ?> '" ><i class="fa fa-eraser"></i> Hapus</button> -->
                                <button type="button"  class="btn btn-danger btn-sm" onclick="window.location.href='../backend/delete/delete_jenis_poli.php?id_jenis_poli=<?php echo $a['id_jenis_poli'] ?> '" title="Hapus" ><i class="fa fa-eraser"></i></button>
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

      <div class="modal fade" id="editPoli" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Ubah Data Poli</h4>
            </div>


            <form class="" action="" method="post">
              <input type="hidden" name="id_jenis_poli" id="id_jenis_poli" value="">
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Nama Poli</label>
                  <input type="text" class="form-control" name="nama_jenis" required="required" id="nama_jenis">
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary" name="update_poli">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>


  <script type="text/javascript">
  function editPasien(id){
    $.ajax({
      type: "GET",
      url : "../backend/update/update_poli.php",
      data: "id="+id,
      success: function (data){
        var $response = $(data);
        $('#id_jenis_poli').val($response.filter('#id_jenis_poli').text());
        $('#nama_jenis').val($response.filter('#nama_jenis').text());
        $('#editPoli').modal('show');
      }
    });
  }
</script>

<script>

function normal () {
  alert("Normal Alert!");
}



function sweet (){
  title: "Hapus Data!",
  text: "Apakah anda yakin menghapus data ini?",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-warning",
  confirmWarningText: "Ya, keluar",
  closeOnConfirm: false
}

</script>
