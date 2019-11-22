<html>
    <head>
    <title>Puskesmas Pulau Temiang| Pelayanan</title>

		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


    <link rel="stylesheet" href="bootstrap.min.css" />

		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>

      <?php
      // $host = "localhost";
      // $username = "root";
      // $pass = "";
      // $db = "db_temiang";
      // $conn = mysqli_connect($host, $username, $pass, $db);

      include_once '../../../../backend/koneksi.php';

      $id_drm=$_GET['id_resep_obat'];

      // $query = mysqli_query($conn, " SELECT * FROM tb_resep_obat where id_resep_obat='$id_drm'");
      $query = mysqli_query($conn, " SELECT * FROM tb_resep_obat inner join tb_detail_resep_obat on tb_resep_obat.id_resep_obat=tb_detail_resep_obat.id_resep_obat inner join tb_obat on tb_obat.id_obat=tb_detail_resep_obat.id_obat where tb_resep_obat.id_resep_obat='$id_drm'");

      $data = mysqli_fetch_array($query);
      $data['id_resep_obat'];
      $rm=$data['id_resep_obat'];
      ?>

        <div class="container">
			<br />

			<h3 align="center">Resep Obat </a></h3><br />
			<br />
			<br />
			<div align="right" style="margin-bottom:5px;">
        <button type="button" name="add" id="add" class="btn btn-success btn-xs">Tambah</button>
        <button type="button"  class="btn btn-default btn-xs"    onclick="window.location.href='/pulautemiang/pages/md/dokter/view/view_detail_rm_beranda.php?id_detail_rekam_medis=<?php echo $rm ?> '"  title="ubah"><i class="fa fa-edit"></i>  Selesai</button>


				<!-- <button type="button" name="add" id="add" class="btn btn-success btn-xs">Tambah</button> -->
			</div>
			<br />
			<form method="post" id="user_form">
				<div class="table-responsive">
					<table class="table table-striped table-bordered" id="user_data">
						<tr>
							<th>ID Resep Obat</th>
							<th>ID Obat</th>
              <th>Nama Obat</th>
              <th>Kategori Obat</th>
							<th>Jumlah Obat</th>
              <th>Keterangan</th>
              <th>Lihat</th>
							<th>Hapus</th>
						</tr>
					</table>
				</div>
				<div align="center">
					<input type="submit" name="insert" id="insert" class="btn btn-primary" value="Simpan" />
				</div>
			</form>

			<br />
		</div>


		<div id="user_dialog" title="Add Data">

			<div class="form-group">
				<label>ID Resep Obat</label>
				<input type="text" name="id_resep_obat" id="id_resep_obat"  class="form-control"  readonly/>
				<span id="error_id_resep_obat" class="text-danger"></span>
			</div>

			<div class="form-group">
				<label>Obat</label>
				<!-- <input type="text" name="id_obat" id="id_obat" class="form-control" /> -->
        <select  name="id_obat"  class="form-control" id="id_obat">
            <option>-Pilih-</option>
          <?php
          $n=0;
          // $host = "localhost";
          // $username = "root";
          // $pass = "";
          // $db = "db_temiang";
          // $conn = mysqli_connect($host, $username, $pass, $db);

          include_once '../../../../backend/koneksi.php';


          $query = mysqli_query($conn, "select * from tb_obat join tb_kategori_obat on tb_obat.id_kategori_obat=tb_kategori_obat.id_kategori_obat");
          while ($a = mysqli_fetch_array($query)) {
            $n=$n+1;
            ?>
            <option value="<?php echo $a['id_obat'];?>"><?php echo $a['nama_obat'];?></option>
            <?php
          }?>
        </select>
				<span id="error_id_obat" class="text-danger"></span>

        <input type="hidden" name="nama_obat" id="nama_obat" class="form-control" />
			</div>

      <div class="form-group">
        <?php $query = mysqli_query($conn, "select * from tb_obat inner join tb_kategori_obat on tb_obat.id_kategori_obat=tb_kategori_obat.id_kategori_obat where tb_obat.id_obat=''"); ?>
        <label>Kategori Obat</label>
        <input type="text"  name="jumlah" min="0" max='100' id="nama_kategori" onchange="cek_stok();" onkeydown="return false" class="form-control"  readonly/>
        <span id="error_jumlah" class="text-danger"></span>
      </div>

      <div class="form-group">
        <?php $query = mysqli_query($conn, "select * from tb_obat where id_obat=''"); ?>
				<label>Jumlah</label>
				<input type="number" value="0" name="jumlah" min="0" max='100' id="jumlah" onchange="cek_stok();" onkeydown="return false" class="form-control" />
				<span id="error_jumlah" class="text-danger"></span>
			</div>

      <div class="form-group">
        <?php $query = mysqli_query($conn, "select * from tb_obat where id_obat=''"); ?>
				<label>Stok Obat</label>
        <input type="text" name="stok_obat" id="stok_obat" class="form-control" readonly/>
				<span id="error_jumlah" class="text-danger"></span>
			</div>

      <div class="form-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" id="keterangan" class="form-control" />
				<span id="error_keterangan" class="text-danger"></span>
			</div>

			<div class="form-group" align="center">
				<input type="hidden" name="row_id" id="hidden_row_id" />
				<button type="button" name="save" id="save" class="btn btn-info">Simpan</button>
			</div>

		</div>
		<div id="action_alert" title="Action">

		</div>
    </body>
</html>



<script>
$(document).ready(function(){

	var count = 0;
	$('#user_dialog').dialog({
		autoOpen:false,
		width:400
	});




	$('#add').click(function(){
		$('#user_dialog').dialog('option', 'title', 'Add Data');
		$('#id_resep_obat').val('<?php echo "$id_drm"; ?>');
		$('#id_obat').val('');
    $('#nama_obat').val('');
    $('#jumlah').val('');
    $('#keterangan').val('');





		$('#id_resep_obat').text('');
		// $('#id_obat').text('');
    $('#jumlah').text('');
    $('#keterangan').text('');




		$('#id_resep_obat').css('border-color', '');
		$('#id_obat').css('border-color', '');
    $('#nama_obat').css('border-color', '');
    $('#jumlah').css('border-color', '');
    $('#keterangan').css('border-color', '');
		$('#save').text('Save');
		$('#user_dialog').dialog('open');
	});

	$('#save').click(function(){

		var error_id_resep_obat = '';
    var error_id_obat = '';
    // var error_nama_obat = '';
    var error_jumlah = '';
    var error_keterangan = '';
		var id_resep_obat = '';
    var id_obat = '';
    var nama_obat = '';
    var jumlah = '';
    var keterangan = '';



		if($('#id_resep_obat').val() == '')
		{
			error_id_resep_obat = 'First Name is required';
			$('#error_id_resep_obat').text(error_first_name);
			$('#id_resep_obat').css('border-color', '#cc0000');
			id_resep_obat = '';
		}
		else
		{
			error_id_resep_obat = '';
			$('#error_id_resep_obat').text(error_id_resep_obat);
			$('#id_resep_obat').css('border-color', '');
			id_resep_obat = $('#id_resep_obat').val();
		}





		if($('#id_obat').val() == '')
		{
			error_last_name = 'Last Name is required';
			$('#error_id_obat').text(error_id_obat);
			$('#id_obat').css('border-color', '#cc0000');
			last_name = '';
		}
		else
		{
			error_id_obat = '';
			$('#error_id_obat').text(error_id_obat);
			$('#id_obat').css('border-color', '');
  		id_obat = $('#id_obat').val();
		}

    if($('#nama_obat').val() == '')
		{
			error_last_name = 'Last Name is required';
			$('#error_nama_obat').text(error_nama_obat);
			$('#nama_obat').css('border-color', '#cc0000');
			last_name = '';
		}
		else
		{
			error_nama_obat = '';
			$('#error_nama_obat').text(error_nama_obat);
			$('#nama_obat').css('border-color', '');
  		nama_obat = $('#nama_obat').val();
		}


    if($('#nama_kategori').val() == '')
    {
      error_last_name = 'Last Name is required';
      $('#error_nama_kategori').text(error_nama_obat);
      $('#nama_kategori').css('border-color', '#cc0000');
      nama_kategori = '';
    }
    else
    {
      error_nama_obat = '';
      $('#error_nama_obat').text(error_nama_obat);
      $('#nama_obat').css('border-color', '');
      nama_obat = $('#nama_obat').val();
    }

    if($('#jumlah').val() == '')
    {
      error_jumlah= 'Last Name is required';
      $('#error_jumlah').text(error_jumlah);
      $('#id_jumlah').css('border-color', '#cc0000');
      jumlah = '';
    }
    else
    {
      error_jumlah = '';
      $('#error_jumlah').text(error_jumlah);
      $('#jumlah').css('border-color', '');
      jumlah= $('#jumlah').val();
    }


    if($('#keterangan').val() == '')
    {
      error_keterangan= 'Last Name is required';
      $('#error_keterangan').text(error_keterangan);
      $('#id_keterangan').css('border-color', '#cc0000');
      keterangan = '';
    }
    else
    {
      error_keterangan = '';
      $('#error_keterangan').text(error_keterangan);
      $('#jumlah').css('border-color', '');
      keterangan= $('#keterangan').val();
    }



		if(error_id_resep_obat != '' || error_keterangan != '')
		{
			return false;
		}
		else
		{
			if($('#save').text() == 'Save')
			{
				count = count + 1;
				output = '<tr id="row_'+count+'">';
        // output += '<td>'+jumlah+' <input type="hidden" name="hidden_first_name[]" id="first_name'+count+'" class="first_name" value="'+first_name+'" /></td>';
				output += '<td>'+id_resep_obat+' <input type="hidden"  name="hidden_id_resep_obat[]" id="id_resep_obat'+count+'" class="id_resep_obat" value="'+id_resep_obat+'" /></td>';
        output += '<td>'+id_obat+'       <input type="hidden"  name="hidden_id_obat[]" id="id_obat'+count+'" class="id_obat" value="'+id_obat+'" /></td>';
        output += '<td>'+nama_obat+'      <input type="hidden"  name="hidden_nama_obat[]" id="nama_obat'+count+'" class="nama_obat" value="'+nama_obat+'" /></td>';
        output += '<td>'+nama_kategori+'        <input type="hidden"  name="hidden_nama-kategori[]" id="nama_kategori'+count+'" class="nama_kategori" value="'+nama_kategori+'" /></td>';

        output += '<td>'+jumlah+'        <input type="hidden"  name="hidden_jumlah[]" id="jumlah'+count+'" class="jumlah" value="'+jumlah+'" /></td>';
        output += '<td>'+keterangan+'    <input type="hidden"  name="hidden_keterangan[]" id="keterangan'+count+'" value="'+keterangan+'" /></td>';
      	output += '<td><button type="button" name="view_details"   class="btn btn-warning btn-xs view_details" id="'+count+'">Lihat</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger  btn-xs remove_details" id="'+count+'">Hapus</button></td>';
				output += '</tr>';
				$('#user_data').append(output);
			}
			else
			{
				var row_id = $('#hidden_row_id').val();
				output = '<td>'+id_resep_obat+'  <input type="hidden" name="hidden_id_resep_obat[]" id="first_name'+row_id+'" class="id_resep_obat" value="'+id_resep_obat+'" /></td>';
				output += '<td>'+id_obat+'       <input type="hidden" name="hidden_id_obat[]"       id="last_name'+row_id+'"       value="'+id_obat+'" /></td>';
        output += '<td>'+nama_obat+'      <input type="hidden"  name="hidden_nama_obat[]" id="nama_obat'+row_id+'" class="nama_obat" value="'+nama_obat+'" /></td>';
        output += '<td>'+nama_nama_kategori+'      <input type="hidden"  name="hidden_nama_obat[]" id="nama_kategori'+row_id+'" class="nama_kategori" value="'+nama_kategori+'" /></td>';
        output += '<td>'+jumlah+'        <input type="hidden" name="hidden_jumlah[]"        id="last_name'+row_id+'"       value="'+jumlah+'" /></td>';
        output += '<td>'+keterangan+'    <input type="hidden" name="hidden_keterangan[]"    id="last_name'+row_id+'"      value="'+keterangan+'" /></td>';

      	output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">Lihat</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Hapus</button></td>';
				$('#row_'+row_id+'').html(output);
			}

			$('#user_dialog').dialog('close');
		}
	});




	$(document).on('click', '.view_details', function(){
		var row_id = $(this).attr("id");

		var id_resep_obat = $('#id_resep_obat'+row_id+'').val();
    var id_obat       = $('#id_obat'+row_id+'').val();
    var nama_obat       = $('#nama_obat'+row_id+'').val();
    var jumlah        = $('#jumlah'+row_id+'').val();
    var keterangan    = $('#keterangan'+row_id+'').val();

		$('#id_resep_obat').val(id_resep_obat);
		$('#id_obat').val(id_obat);
    $('#nama_obat').val(nama_obat);
    $('#nama_kategori').val(nama_kategori);

    $('#jumlah').val(jumlah);
    $('#keterangan').val(keterangan);

		$('#save').text('Edit');




		$('#hidden_row_id').val(row_id);
		$('#user_dialog').dialog('option', 'title', 'Edit Data');
		$('#user_dialog').dialog('open');
	});




	$(document).on('click', '.remove_details', function(){
		var row_id = $(this).attr("id");
		if(confirm("Yakin menghapus ?"))
		{
			$('#row_'+row_id+'').remove();
		}
		else
		{
			return false;
		}
	});

	$('#action_alert').dialog({
		autoOpen:false
	});

	$('#user_form').on('submit', function(event){
		event.preventDefault();
		var count_data = 0;
		$('.id_resep_obat').each(function(){
			count_data = count_data + 1;
		});
		if(count_data > 0)
		{
			var form_data = $(this).serialize();
			$.ajax({
				url:"insert.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#user_data').find("tr:gt(0)").remove();
					// $('#action_alert').html('<p>Berhasi Ditambahkan</p>');
          $('#action_alert').html('<p>Berhasi Ditambahkan</p>');

					$('#action_alert').dialog('open');



            window.location.href='/pulautemiang/pages/md/dokter/view/view_detail_rm_beranda.php?id_detail_rekam_medis=<?php echo "$id_drm"; ?>';
				}
			})
		}
		else
		{
			$('#action_alert').html('<p>Please Add atleast one data</p>');
			$('#action_alert').dialog('open');
		}
	});

});

  $("#id_obat").change(function(){
  let id_obat = $("#id_obat").val();
  let url = "../ajax/resep_obat.php?id_obat="+id_obat;
  $.ajax({url: url, success: function(result){
      console.log(result);
      var $response = $(result);
      stok = $response.filter('#stok').text();
      nama_obat = $response.filter('#nama_obat').text();
      nama_kategori = $response.filter('#nama_kategori').text();
      $("#nama_obat").val(nama_obat);
      $("#nama_kategori").val(nama_kategori);

      $("#stok_obat").val(stok);
  }});
  });

  function cek_stok(){
    let stok_obat = $("#stok_obat").val();
    let jumlah = $("#jumlah").val();

    if(jumlah>stok_obat){
      $("#jumlah").val(stok);
    }
  }

</script>
