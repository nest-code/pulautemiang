
<?php include_once '../backend/kontroller.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Modal SURAT TEMPAT USAHA -->
<div id="ModalUsaha" class="modal fade" role="dialog">
	<div class="modal-dialog" style="width:715px">

		<!-- Modal content-->
		<form action="#" method="post" enctype="multipart/form-data">
			<div class="modal-content">
				<!-- heading modal -->
				<div align="center" class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">NOMOR REGISTRASI</h4>
					<!-- membuat nomor registrasi otomatis -->
					<?php
					$ambilkode = "SELECT max(pobpc_id) as no_id from tb_place_of_bussines_permit_certificate";
					$hasil = mysqli_query($conn,$ambilkode);
					while ($data = mysqli_fetch_array($hasil)) {
						$kode_registrasi=$data['no_id'];
						$no_urut=(int) substr($kode_registrasi,3,5);
						$no_urut++;
						$char="POB";
						$new_reg=$char.sprintf("%05s",$no_urut);
						?>
						<input style="text-align:center;" type="hidden" name="pobpc_id" value="<?php echo $new_reg; ?>" readonly>
						<?php
					}
					?>

					<?php
					$appkode = "SELECT max(applicant_id) as app_id from tb_applicant";
					$hasilkode = mysqli_query($conn,$appkode);
					while ($dataapp = mysqli_fetch_array($hasilkode)) {
						$kode_app=$dataapp['app_id'];
						$no_urutapp=(int) substr($kode_app,3,5);
						$no_urutapp++;
						$charapp="APP";
						$new_app=$charapp.sprintf("%05s",$no_urutapp);
						?>
						<input style="text-align:center;" type="text" name="applicant_id" value="<?php echo $new_app; ?>" readonly>
						<?php
					}
					?>
				</div>

				<!-- body modal -->
				<div class="modal-body">
					<input type="hidden" name="no_registrasi" >
					<div class="container">
						<div class="panel panel-default" style="width:650px">
							<div class="panel-heading">
								<h4>PENDUDUK</h4>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table">
										<tr>
											<td width="150px">Nomor Identitas</td>
											<td>:</td>
											<td><input type="text" maxlength="20" name="population_nik" id="nik" class="form-control"  placeholder="Nomor Identitas" required="true" onkeypress="return isNumberKey(event)"></td>
										</tr>
										<tr>
											<td width="150px">Nama Lengkap</td>
											<td>:</td>
											<td><input type="text" maxlength="30" name="population_name" value="" class="form-control" placeholder="isi nama lengkap anda" required="true" onkeypress="return isAlphabetkey(event)"></td>
										</tr>
										<tr>
											<td width="150px">Alamat</td>
											<td>:</td>
											<td><input type="text"  maxlength="200" name="population_place" value="" class="form-control" placeholder="isi alamat anda" required="true"></td>
										</tr>
										<tr>
											<td width="150px">Tanggal Lahir</td>
											<td>:</td>
											<td><input type="date"  value="<?php echo date('1990-m-d'); ?>" max="<?php echo date('Y-m-d'); ?>" name="population_birthday"  class="form-control" placeholder="isi tgl lahir anda" required="true"oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"  onkeypress="return isAlphabetkey(event)"></td>
										</tr>
										<tr>
											<td width="150px">RT</td>
											<td>:</td>
											<td><input type="phone" maxlength="3" name="population_rt" value="" class="form-control" placeholder="isi RT" required="true" onkeypress="return isNumberKey(event)"></td>
										</tr>
										<tr>
											<td width="150px">RW</td>
											<td>:</td>
											<td><input type="phone" maxlength="3" name="population_rw" value="" class="form-control" placeholder="isi RW" required="true" onkeypress="return isNumberKey(event)"></td>
										</tr>
										<tr>
											<td width="150px">Kelurahan</td>
											<td>:</td>
											<td><input type="text" maxlength="25" name="population_kelurahan" value="" class="form-control" placeholder="isi kelurahan" required="true" onkeypress="return isAlphabetkey(event)"></td>
										</tr>
										<tr>
											<td width="150px">Kecamatan</td>
											<td>:</td>
											<td><input type="text"  maxlength="25" name="population_kecamatan" value="" class="form-control" placeholder="isi kecamatan" required="true" onkeypress="return isAlphabetkey(event)"></td>
										</tr>
										<tr>
											<td width="150px">Provinsi</td>
											<td>:</td>
											<td><input type="text" maxlength="27" name="population_provinsi" value="" class="form-control" placeholder="isi provinsi" required="true"  onkeypress="return isAlphabetkey(event)"></td>
										</tr>
										<tr>
											<td width="150px">Pekerjaan</td>
											<td>:</td>
											<td>
												<select name="population_work" class="form-control" required>
													<option value="">-Pilih-</option>
													<option value="PNS">PNS</option>
													<option value="Pelajar">Pelajar</option>
													<option value="Wiraswasta">Wiraswasta</option>
													<option value="Mahasiswa">Mahasiswa</option>
													<option value="Tani">Tani</option>
													<option value="Ibu Rumah Tangga">Ibu rumah tangga</option>
												</select>
											</td>
										</tr>
										<tr>
											<td width="150px">Status</td>
											<td>:</td>
											<td><select name="population_status" class="form-control" required >
											  <option value="">-Pilih-</option>
												<option value="Belum Menikah">Belum Menikah</option>
												<option value="Kawin">Kawin</option>
												<option value="Janda">Janda</option>
												<option value="Duda">Duda</option>
											</select>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="panel panel-default" style="width:650px">
						<div class="panel-heading">
							<h4>KETERANGAN USAHA</h4>
						</div>

						<!-- onkeypress="return isAlphabetkey(event)"oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" -->

						<div class="panel-body">
							<div class="table-responsive">
								<table class="table">

									<tr>
										<td width="150px">Nama Usaha</td>
										<td>:</td>
										<td><input type="text" maxlength="25" name="pobpc_name" value="" class="form-control" placeholder="isi nama usaha" required="true" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
									</tr>

									<tr>
										<td width="150px">Alamat Tempat Usaha</td>
										<td>:</td>
										<td><input type="text" maxlength="25" name="pobpc_place" value="" class="form-control" placeholder="isi dengan alamat" required="true" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
									</tr>
									<tr>
										<td width="150px">No Sertifikat</td>
										<td>:</td>
										<td>
											<input type="text" maxlength="25" name="pobpc_certificate_no" value="" class="form-control" onkeypress="return isNumberKey(event)"  placeholder="isi no sertifikat" required="true" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</td>
									</tr>
									<tr>
										<td width="150px">Tahun PBB</td>
										<td>:</td>
										<td>
											<input type="text" maxlength="4"name="pobpc_pbb_year" class="form-control" placeholder="isi tahun PBB" onkeypress="return isNumberKey(event)" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</td>
									</tr>

									<tr>
										<td width="150px">Keterangan</td>
										<td>:</td>
										<td>
											<input type="text" maxlength="20" name="pobpc_information"  class="form-control" placeholder="isi keterangan usaha" required="true"  oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</td>
									</tr>

								</table>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div align="center">
					<p>&nbsp;</p>
					<button type="submit" name="applicant_place_of_bussines" class="btn btn-primary"><i class="fa fa-send"></i> Kirim</button>
				</div>
			</div>
		</form>

	</div>
</div>
</div>
<!--END Modal SURAT TEMPAT USAHA -->




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header" >
		<h1 text-align="center">Daftar Pengajuan Surat Keterangan Izin Tempat Usaha</h1>
	</section>

	<section class="content">
		<button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalUsaha"> Tambah Data</button>


		<!-- View -->
		<div class="row">
			<div class="box">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-hover">
						<thead>
							<tr class="table-primary">
								<th>No.</th>
                <th><span class="fa fa-book"></span> No. Registrasi</th>
                <th><span class="fa fa-credit-card"></span> NIK</th>
                <th><span class="fa fa-user"> Nama</th>
                <th><span class="fa fa-info-circle"> Status</th>
                <th><span class="fa fa-gavel"> Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$n=0;
							include '../backend/koneksi.php';

							$query = mysqli_query($conn, "select * from tb_applicant join tb_population on tb_population.population_nik=tb_applicant.population_nik join tb_place_of_bussines_permit_certificate on tb_applicant.applicant_id=tb_place_of_bussines_permit_certificate.applicant_id where tb_applicant.status != 'Selesai' ORDER BY tb_applicant.status");
							while ($a = mysqli_fetch_array($query)) {
								$n=$n+1;
								?>
								<tr>
									<td><?php echo "$n"?>.</td>
									<td><?php echo $a['applicant_id'];?></td>
									<td><?php echo $a['population_nik'];?></td>
									<td><?php echo $a['population_name'];?></td>
									<td class="text-center" <?php if($a['status']=='Tolak'){ ?> bgcolor="#ff8585" <?php } if($a['status']=='Proses'){ ?> bgcolor="#FFECB3" <?php } ?> >
										<?php echo $a['status'];?></td>
									<td>
										<?php
										$pobpc_id=$a['pobpc_id'];
										$applicant_id=$a['applicant_id'];
										?>
										<form class="" action="#" method="post">
											<div class="btn-group-horizontal btn-group-sm">
												<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo $applicant_id;?>"><i class="fa fa-user"></i> Lihat</button>
												<button type="submit" name="delete_place_of_bussines" class="btn btn-danger"><i class="fa fa-eraser"></i> Hapus</button>


												<!-- Modal -->
												<div class="modal fade" id="myModal<?php echo $applicant_id;?>" role="dialog">
													<div class="modal-dialog modal-lg">
														<!-- Modal content-->
														<div class="modal-content">
															<div align="center" class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Data Mengajukan Surat Keterangan Izin Tempat Usaha</h4>
															</div>
															<div class="modal-body">
																<!-- body -->
																<?php
																include '../backend/koneksi.php';
																// $id_asisten = $_POST['id_asisten'];
																$lihat=mysqli_query($conn,"select * from tb_population join tb_applicant on tb_population.population_nik=tb_applicant.population_nik join tb_place_of_bussines_permit_certificate on tb_applicant.applicant_id=tb_place_of_bussines_permit_certificate.applicant_id where tb_applicant.applicant_id='$applicant_id'");

																while ($out = mysqli_fetch_object($lihat)) {
																	?>
																	<input type="hidden" name="pobpc_id" value="<?php echo $pobpc_id;?>">
																	<input type="hidden" name="applicant_id" value="<?php echo $applicant_id;?>">

																	<!--PELAPOR-->
																	<div class="panel panel-default">
																		<div class="panel-heading">
																			<h4>Permohonan Surat tempat Usaha</h4>
																		</div>
																		<div class="panel-body">
																			<div class="table-responsive">
																				<table class="table">

																					<tr>
																						<td  width="175px">ID </td>
																						<td>:</td>
																						<td width="525px" id="text3"><?php echo "$out->pobpc_id"?></td>
																						<td width="25px">
																							<button id="button3" type="button" class="btn btn-warning" onclick="copy('#text3')" href="#" data-toggle="popover3" data-content="Copied."><i class="fa fa-copy"></i></button>
																						</td>
																					</tr>

																					<tr>
																						<td  width="175px">Tempat </td>
																						<td>:</td>
																						<td width="525px" id="text4"><?php echo "$out->pobpc_place"?></td>
																						<td width="25px">
																							<button id="button4" type="button" class="btn btn-warning" onclick="copy('#text4')" href="#" data-toggle="popover4" data-content="Copied."><i class="fa fa-copy"></i></button>
																						</td>
																					</tr>

																					<tr>
																						<td  width="175px">No Sertifikat</td>
																						<td>:</td>
																						<td width="525px" id="text4"><?php echo "$out->pobpc_certificate_no"?></td>
																						<td width="25px">
																							<button id="button4" type="button" class="btn btn-warning" onclick="copy('#text4')" href="#" data-toggle="popover4" data-content="Copied."><i class="fa fa-copy"></i></button>
																						</td>
																					</tr>

																					<tr>
																						<td  width="175px">Pajak Bumi dan Bangunan (PBB) </td>
																						<td>:</td>
																						<td width="525px" id="text5"><?php echo "$out->pobpc_pbb_year"?></td>
																						<td width="25px">
																							<button id="button5" type="button" class="btn btn-warning" onclick="copy('#text5')" href="#" data-toggle="popover5" data-content="Copied."><i class="fa fa-copy"></i></button>
																						</tr>

																						<tr>
																							<td width="175px">Keterangan </td>
																							<td>:</td>
																							<td width="525px" id="text6"><?php echo "$out->pobpc_information"?></td>
																							<td width="25px">
																								<button id="button6" type="button" class="btn btn-warning" onclick="copy('#text6')" href="#" data-toggle="popover6" data-content="Copied."><i class="fa fa-copy"></i></button>
																							</td>
																						</tr>


																					</table>
																				</div>
																			</div>
																		</div>

																		<!--Data Penduduk-->
																		<div class="panel panel-default">
																			<div class="panel-heading">
																				<h4>Data Penduduk</h4>
																			</div>
																			<div class="panel-body">
																				<div class="table-responsive">

																					<table class="table">
																						<tr>
																							<td  width="175px">NIK</td>
																							<td>:</td>
																							<td width="525px" id="text8"><?php echo "$out->population_nik" ?></td>
																							<td width="25px">
																								<button id="button8" type="button" class="btn btn-warning" onclick="copy('#text8')" href="#" data-toggle="popover8" data-content="Copied."><i class="fa fa-copy"></i></button>
																							</td>
																						</tr>

																						<tr>
																							<td  width="175px">Nama Lengkap</td>
																							<td>:</td>
																							<td width="525px" id="text8"><?php echo "$out->population_name" ?></td>
																							<td width="25px">
																								<button id="button8" type="button" class="btn btn-warning" onclick="copy('#text8')" href="#" data-toggle="popover8" data-content="Copied."><i class="fa fa-copy"></i></button>
																							</td>
																						</tr>

																						<tr>
																							<td  width="175px">Tanggal Lahir</td>
																							<td>:</td>
																							<td width="525px" id="text8"><?php echo "$out->population_birthday" ?></td>
																							<td width="25px">
																								<button id="button8" type="button" class="btn btn-warning" onclick="copy('#text8')" href="#" data-toggle="popover8" data-content="Copied."><i class="fa fa-copy"></i></button>
																							</td>
																						</tr>

																						<tr>
																							<td  width="175px">Alamat</td>
																							<td>:</td>
																							<td width="525px" id="text9"><?php echo "$out->population_place" ?></td>
																							<td width="25px">
																								<button id="button9" type="button" class="btn btn-warning" onclick="copy('#text9')" href="#" data-toggle="popover9" data-content="Copied."><i class="fa fa-copy"></i></button>
																							</td>
																						</tr>

																						<tr>
																							<td  width="175px">RT</td>
																							<td>:</td>
																							<td width="525px" id="text9"><?php echo "$out->population_rt" ?></td>
																							<td width="25px">
																								<button id="button9" type="button" class="btn btn-warning" onclick="copy('#text9')" href="#" data-toggle="popover9" data-content="Copied."><i class="fa fa-copy"></i></button>
																							</td>
																						</tr>

																						<tr>
																							<td  width="175px">RW</td>
																							<td>:</td>
																							<td width="525px" id="text9"><?php echo "$out->population_rw" ?></td>
																							<td width="25px">
																								<button id="button9" type="button" class="btn btn-warning" onclick="copy('#text9')" href="#" data-toggle="popover9" data-content="Copied."><i class="fa fa-copy"></i></button>
																							</td>
																						</tr>

																						<tr>
																							<td  width="175px">Kelurahan</td>
																							<td>:</td>
																							<td width="525px" id="text9"><?php echo "$out->population_kelurahan" ?></td>
																							<td width="25px">
																								<button id="button9" type="button" class="btn btn-warning" onclick="copy('#text9')" href="#" data-toggle="popover9" data-content="Copied."><i class="fa fa-copy"></i></button>
																							</td>
																						</tr>




																							<td  width="175px">Kecamatan</td>
																							<td>:</td>
																							<td width="525px" id="text9"><?php echo "$out->population_kecamatan" ?></td>
																							<td width="25px">
																								<button id="button9" type="button" class="btn btn-warning" onclick="copy('#text9')" href="#" data-toggle="popover9" data-content="Copied."><i class="fa fa-copy"></i></button>
																							</td>
																						</tr>


																						<tr>
																							<td  width="175px">Pekerjaan</td>
																							<td>:</td>
																							<td width="525px" id="text11"><?php echo "$out->population_work" ?> </td>
																							<td width="25px">
																								<button id="button11" type="button" class="btn btn-warning" onclick="copy('#text11')" href="#" data-toggle="popover11" data-content="Copied."><i class="fa fa-copy"></i></button>
																							</td>
																						</tr>

																						<tr>
																							<td  width="175px">Status Pernikahan</td>
																							<td>:</td>
																							<td width="525px" id="text11"><?php echo "$out->population_status" ?> </td>
																							<td width="25px">
																								<button id="button11" type="button" class="btn btn-warning" onclick="copy('#text11')" href="#" data-toggle="popover11" data-content="Copied."><i class="fa fa-copy"></i></button>
																							</td>
																						</tr>

																					</table>
																				</div>
																			</div>
																		</div>

																		<div class="row">
																			<div class="form-group">
																				<div class="col-md-8 col-md-push-4">
																					<button type="submit" class="btn btn-primary" name="proses" id="simpan">
																						<i class="fa fa-check"></i> Terima
																					</button>
																					<button type="submit" class="btn btn-danger" name="tolak" >
																						<i class="fa fa-times"></i> Tolak
																					</button>
																				</div>
																			</div>
																		</div>
																	<?php } ?>


																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
																</div>
															</div>
														</div>
													</div>
													<!-- ======================================================== -->
												</div>
											</form>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
	</div>

	<script src="style/js/jquery-3.2.0.min.js"></script>
	<script>
	document.querySelector("#button").onclick=function(){
		document.querySelector("#input").select();
		document.execCommand("copy");
	};
</script>

<!-- Copy Text -->
<script>
function copy(element) {
	var $temp = $("<input>");
	$("body").append($temp);
	$temp.val($(element).text()).select();
	document.execCommand("copy");
	$temp.remove();

	var x = document.getElementById("snackbar");
	x.className = "show";
	setTimeout(function(){ x.className = x.className.replace("show", ""); }, 1000);
}
</script>
<!-- ================================= -->


<script>
// Get the modal
var modal = document.getElementById('myModalimage<?php ?>');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
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

<script>
$("#button1").click(function(){
	$('[data-toggle="popover1"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover1"]').popover('destroy')}, 1000);
});

$("#button2").click(function(){
	$('[data-toggle="popover2"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover2"]').popover('destroy')}, 1000);
});

$("#button3").click(function(){
	$('[data-toggle="popover3"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover3"]').popover('destroy')}, 1000);
});

$("#button4").click(function(){
	$('[data-toggle="popover4"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover4"]').popover('destroy')}, 1000);
});

$("#button5").click(function(){
	$('[data-toggle="popover5"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover5"]').popover('destroy')}, 1000);
});

$("#button6").click(function(){
	$('[data-toggle="popover6"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover6"]').popover('destroy')}, 1000);
});

$("#button7").click(function(){
	$('[data-toggle="popover7"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover7"]').popover('destroy')}, 1000);
});

$("#button8").click(function(){
	$('[data-toggle="popover8"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover8"]').popover('destroy')}, 1000);
});

$("#button9").click(function(){
	$('[data-toggle="popover9"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover9"]').popover('destroy')}, 1000);
});

$("#button10").click(function(){
	$('[data-toggle="popover10"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover10"]').popover('destroy')}, 1000);
});

$("#button11").click(function(){
	$('[data-toggle="popover11"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover11"]').popover('destroy')}, 1000);
});

$("#button12").click(function(){
	$('[data-toggle="popover12"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover12"]').popover('destroy')}, 1000);
});

$("#button13").click(function(){
	$('[data-toggle="popover13"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover13"]').popover('destroy')}, 1000);
});

$("#button14").click(function(){
	$('[data-toggle="popover14"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover14"]').popover('destroy')}, 1000);
});

$("#button15").click(function(){
	$('[data-toggle="popover15"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover15"]').popover('destroy')}, 1000);
});

$("#button16").click(function(){
	$('[data-toggle="popover16"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover16"]').popover('destroy')}, 1000);
});

$("#button17").click(function(){
	$('[data-toggle="popover17"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover17"]').popover('destroy')}, 1000);
});

$("#button18").click(function(){
	$('[data-toggle="popover18"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover18"]').popover('destroy')}, 1000);
});

$("#button19").click(function(){
	$('[data-toggle="popover19"]').popover('show');
	setTimeout(function(){$('[data-toggle="popover19"]').popover('destroy')}, 1000);
});

</script>


<SCRIPT language=Javascript>
<!--
function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
	return true;
}

function isAlphabetkey(evt){
	var charCode = (evt.which) ? evt.which : event.keyCode
	if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
	return false;
	return true;
}
//-->
</SCRIPT>
