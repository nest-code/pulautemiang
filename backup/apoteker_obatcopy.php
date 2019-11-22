<link rel="stylesheet" type="text/css" href="assets/css/lib/data-table/dataTables.bootstrap.min.css">
<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1> <b>Obat</b> | Data Obat  </h1>

              <!-- <a href="assets/css/lib/data-table/dataTables.bootstrap.min.css">aa</a> -->
              <div class="container">
                <!-- <h2>Large Modal</h2> -->
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Tambah Data
                </button>
                <!--

              -->
              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Tambah Data Obat</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                      <div class="card">
                        <div class="card-body">
                          <div class="form-validation">
                            <form class="form-valide" action="" method="post">
                              <input type="hidden" name="id_obat" value="" id="id_obat">

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Nama Obat <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="nama_obat" name="nama_obat" placeholder="Masukan nama Obat..">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Kategori Obat <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="id_kategori_obat">
                                      <option>-Pilih-</option>
                                    <?php
                                    $n=0;
                                    include '../backend/koneksi.php';
                                    $query = mysqli_query($conn, "select * from tb_kategori_obat");
                                    while ($a = mysqli_fetch_array($query)) {
                                      $n=$n+1;
                                      ?>
                                      <option value="<?php echo $a['id_kategori_obat'];?>"><?php echo $a['nama_kategori'];?></option>
                                      <?php
                                    }?>
                                  </select>
                                </div>
                              </div>


                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Harga Satuan<span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" placeholder="Masukan Harga Satu Obat..">
                                </div>
                              </div>


                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Stok<span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukan Jumlah Obat.."  onkeypress="return isNumberKey(event)">
                                </div>
                              </div>



                              <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Keterangan <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                  <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan Obat..">
                                </div>
                              </div>


                              <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                  <button type="submit" class="btn btn-primary" name="tambah_obat">Simpan</button>
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
              <li class="breadcrumb-item active">Tabel Obat</li>
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
              <!-- <h4>Table Obat </h4> -->
            </div>
            <div class="card-body">
              <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                  <table id="bootstrap-data-table-export" class="table table-striped ">

                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name Obat</th>
                        <th>Kategori Obat</th>
                        <th>Stok</th>
                        <th>Harga Satuan</th>
                        <!-- <th>Keterangan</th> -->
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $n=0;
                      include '../backend/koneksi.php';
                      $query = mysqli_query($conn, "select * from tb_obat");
                      while ($a = mysqli_fetch_array($query)) {
                        $n=$n+1;
                        ?>
                        <tr>
                          <td><?php echo "$n"?>.</td>
                          <td><?php echo $a['nama_obat'];?></td>
                          <td><?php echo $a['id_kategori_obat'];?></td>
                          <td><?php echo $a['stok'];?></td>
                          <td><?php echo Rp.$a['harga_satuan'];?></td>
                          <!-- <td><?php echo $a['keterangan'];?></td> -->
                          <td class="color-primary">

                              <!-- <a href="../backend/delete/delete_obat.php?id_obat=<?php echo $a['id_obat'] ?>" onClick='return confirm("Apakah Ada yakin menghapus?")'>Hapus</a> -->
                              <?php
                              $id_obat=$a['id_obat'];
                              ?>
                            <form class="" action="#" method="post">
                              <!-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalihats<?php echo $id_pasien;?>" title="Lihat Rekam Medis"><i class="ti-eye"></i></button> -->


                              <button type="button" class="btn btn-default btn-flat btn-sm"onclick="editPasien(<?php echo $a['id_obat'] ?>)" > <i class="fa fa-edit"></i></button>

                              <!-- <a href="../backend/delete/delete_obat.php?id_obat=<?php echo $a['id_obat'] ?>" onClick='return confirm("Apakah Ada yakin menghapus?")'>Hapus</a> -->
                              <button type="button"  class="btn btn-danger btn-sm" onclick="window.location.href='../backend/delete/delete_obat.php?id_obat=<?php echo $a['id_obat'] ?> '" ><i class="fa fa-eraser"></i></button>
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


      <div class="modal fade" id="editObat" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Form Data Obat</h4>
            </div>


            <form class="" action="" method="post">
              <input type="hidden" name="id_obat" id="id_obat" value="">
              <div class="modal-body">

                <div class="form-group">
                  <label for="">Nama Obat</label>
                  <input type="text" class="form-control" name="nama_obat" required="required" id="nama_obat">
                </div>

                <div class="form-group">
                  <label for="">Jenis Obat</label>
                    <input type="text" class="form-control" name="harga_satuan" required="required" id="satuan">
                </div>

                <div class="form-group">
                  <label for="">Jumlah</label>
                  <input type="text" class="form-control" name="stok" required="required" id="stok">
                </div>

                <div class="form-group">
                  <label for="">Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" required="required" id="keterangan">
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" name="edit_obat">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">

function isNumberKey(evt)
{
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
  return false;
  return true;
}
</script>

<script type="text/javascript">
function editPasien(id){
  $.ajax({
    type: "GET",
    url : "../backend/update/update_obat.php",
    data: "id="+id,
    success: function (data){
     var $response = $(data);
       $('#id_obat').val($response.filter('#id_obat').text());
       $('#nama_obat').val($response.filter('#nama_obat').text());
       $('#satuan').val($response.filter('#satuan').text());
       $('#stok').val($response.filter('#stok').text());
       $('#keterangan').val($response.filter('#keterangan').text());
       $('#editObat').modal('show');
    }
  });
}
</script>
