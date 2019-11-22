<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Focus Admin: Basic Form </title>

</head>


<body>

  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                  <h1>Selamat bekerja :  <span><?php echo " $namaakun"; ?></span> </h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="?m=admin/admin_pasien">Data Dokter</a></li>
                  <li class="breadcrumb-item active">Pendaftaran Dokter</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">

          <!-- /# row -->

          <form class="" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-title">
                    <!-- <h4>Pendaftaran Pasien</h4> -->

                  </div>
                  <div class="card-body">
                    <div class="basic-elements">
                      <form>
                        <div class="row">
                          <div class="col-lg-6">

                            <div class="form-group">
                              <label>Nama NIP</label>
                              <input type="text" class="form-control"  name="nip" placeholder="Masukan NIP Dokter..." min="18" required maxlength="18"  onkeypress="return isNumberKey(event)" >
                            </div>

                            <div class="form-group">
                              <label>Nama Dokter</label>
                              <input type="text" class="form-control"  name="nama" placeholder="Masukan Nama Dokter...">
                            </div>

                            <div class="form-group">
                              <label>Jenis Kelamin</label>
                              <select class="form-control" name="jk">
                                <option>-Pilih-</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <input type="date" class="form-control" name="tgl_lahir">
                            </div>

                            <div class="form-group">
                              <label>Agama</label>
                              <select class="form-control" name="agama">
                                <option>-Pilih-</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hinddu">Hindu</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                              </select>
                            </div>



                            <div class="form-group">
                              <label>Alamat</label>
                              <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan Alamat.." required></textarea>
                            </div>

                            <div class="form-group">
                              <label>NO HP</label>
                              <input type="text" class="form-control"  name="no_hp" placeholder="Masukan NO HP Dokter..." required maxlength="14"  onkeypress="return isNumberKey(event)">
                            </div>


                              <!--  Status -->
                            <input type="hidden" class="form-control"  name="status" value="nonaktif">
                              <!-- Status -->

                            <div class="form-group">
                              <label>Jenis Poli</label>

                                <select class="form-control" name="id_jenis_poli">
                                    <option>-Pilih-</option>
                                  <?php
                                  $n=0;
                                  include '../backend/koneksi.php';
                                  $query = mysqli_query($conn, "select * from tb_jenis_poli");
                                  while ($a = mysqli_fetch_array($query)) {
                                    $n=$n+1;
                                    ?>
                                    <option value="<?php echo $a['id_jenis_poli'];?>"><?php echo $a['nama_jenis'];?></option>
                                    <?php
                                  }?>
                                </select>
                            </div>
                            <div class="form-group">
                              <label>Foto</label>
                              <input type="file" class="form-control"  name="foto" >
                            </div>

                          </div>




                          <div class="col-lg-6">


                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="tambah_pendaftaran_dokter_foto" class="btn btn-default">Simpan</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /# column -->

              <!-- /# column -->
            </div>
          </form>
          <!-- /# row -->


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


  <div id="search">
    <button type="button" class="close">×</button>
    <form>
      <input type="search" value="" placeholder="type keyword(s) here" />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
  </div>
  <!-- sidebar -->

  <!-- bootstrap -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


  <script src="assets/js/scripts.js"></script>
  <!-- scripit init-->

  <script type="text/javascript">

  function isNumberKey(evt)
  {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
    return true;
  }

  </script>



</body>

</html>


<script>
$(document).ready(function(){

 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#image_data').html(data);
   }
  })
 }
 $('#add').click(function(){
  $('#imageModal').modal('show');
  $('#image_form')[0].reset();
  $('.modal-title').text("Add Image");
  $('#image_id').val('');
  $('#action').val('insert');
  $('#insert').val("Insert");
 });
 $('#image_form').submit(function(event){
  event.preventDefault();
  var image_name = $('#image').val();
  if(image_name == '')
  {
   alert("Please Select Image");
   return false;
  }
  else
  {
   var extension = $('#image').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#image').val('');
    return false;
   }
   else
   {
    $.ajax({
     url:"action.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
      fetch_data();
      $('#image_form')[0].reset();
      $('#imageModal').modal('hide');
     }
    });
   }
  }
 });
 $(document).on('click', '.update', function(){
  $('#image_id').val($(this).attr("id"));
  $('#action').val("update");
  $('.modal-title').text("Update Image");
  $('#insert').val("Update");
  $('#imageModal').modal("show");
 });
 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var action = "delete";
  if(confirm("Are you sure you want to remove this image from database?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{image_id:image_id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
    }
   })
  }
  else
  {
   return false;
  }
 });
});
</script>
