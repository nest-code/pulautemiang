<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1> <b>Data Pasien</b> | Pasien </h1></div>
          </div>
        </div>
        <div class="col-lg-4 p-l-0 title-margin-left">
          <div class="page-header">
            <div class="page-title">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?m=beranda">Dashboard</a></li>
                <li class="breadcrumb-item active">Tabel Pasien</li>
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
                          <th>NIK</th>
                          <th>No Rekam Medis</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Usia</th>
                          <th>No HP</th>
                          <th>Tindakan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $n=0;
                        include '../backend/koneksi.php';
                        $query = mysqli_query($conn, "SELECT * from tb_pasien inner join tb_rekam_medis on tb_pasien.nik=tb_rekam_medis.nik order by  tb_pasien.nama asc ");
                        while ($a = mysqli_fetch_array($query)) {
                          $n=$n+1;
                          ?>
                          <?php
                          $tgl_lahir =date_format(date_create($a['tgl_lahir']), 'Y');
                          $sekarang = date('Y');
                          $usia = $sekarang - $tgl_lahir;
                          ?>
                          <tr>
                            <td><?php echo "$n"?>.</td>
                            <td><?php echo $a['nik'];?></td>

                            <td><?php echo $a['no_rm'];?></td>
                            <td><?php echo $a['nama'];?></td>
                            <td>
                              <?php if($a['jk'] == 'L'){ echo 'Laki-laki'; } ?>
                              <?php if($a['jk'] == 'P'){ echo 'Perempuan'; } ?>
                            </td>
                            <td><?php echo  $usia?> Tahun</td>
                            <td><?php echo $a['no_hp'];?></td>
                            <td class="color-primary">
                              <form class="" action="" method="post">
                                <button type="button" class="btn btn-success btn-sm"       onclick="antrian(<?php echo $a['nik']?>);"  title=" Daftar Antrian "><i class="fa fa-table" aria-hidden="true"></i> Daftar Antrian</button>
                                <!-- <button type="button" class="btn btn-success btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/petugas/edit/pendaftaran.php?id_pasien=<?php echo $a['id_pasien'] ?> '"  title="Data Pasien"><i class="fa fa-table" aria-hidden="true"></i> Daftar Antrian</button> -->

                                <!-- <button type="button" class="btn btn-success btn-sm"         onclick="window.location.href='/pulautemiang/pages/md/petugas/view/pendaftaran_umum.php'"  title="Data Pasien"><i class="fa fa-table" aria-hidden="true"></i> Daftar Antrian</button> -->
                                <!-- <button type="button" class="btn btn-warning btn-sm"          onclick="window.location.href='/pulautemiang/pages/md/cetak/print_kartu_berobat.php?id_pasien=<?php echo $a['id_pasien'] ?> '"  title="Cetak Kartu Berobat"><i class="ti-printer"></i> Cetak Kartu Berobat</button> -->
                                <button type="button" class="btn btn-warning btn-sm"    target="_blank" rel="nofollow"    onclick=" window.open('/pulautemiang/pages/md/cetak/print_kartu_berobat.php?nik=<?php echo $a['nik'] ?> ', '_blank'); return false;" title="Cetak Kartu Berobat"><i class="ti-printer"></i> Cetak Kartu Berobat</button>

                                <button type="button" class="btn btn-default btn-sm"     onclick="window.location.href='/pulautemiang/pages/md/petugas/edit/edit_pasien.php?nik=<?php echo $a['nik'] ?> '"  title="ubah"><i class="fa fa-edit"></i>  Ubah</button>
                                <button type="button"  class="btn btn-danger btn-sm"         onclick="hapus(<?php echo $a['nik']?>);"  title="Hapus "><i class="ti-trash"></i>  Hapus</button>
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
              <p>2019 © Puskesmas Pulau Temiang</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<script type="text/javascript">
function antrian(id){
  var antrian = id;
  let cek=0;
  $.ajax({
    url:"/pulautemiang/backend/validasi.php",
    method:"POST",
    data: {id:antrian
    },
    success:function(data){
      var $response = $(data);
        cek = $response.filter('#cek').text();
        if (cek==1) {

          swal({
                  title: "Pasien sudah Terdaftar",
                  text: "Pasien telah terdaftar pada antrian berobat",
                  type: "warning",
                  confirmButtonColor: "#6495ED",
                  confirmButtonText: "Kembali",
                  closeOnConfirm: false
              },
            );

        }else{
          window.location.href='/pulautemiang/pages/md/petugas/view/view_pendaftaran.php?nik='+antrian;
        }
    }
  })
}
</script>

<script type="text/javascript">
function hapus(id){
  var hapus = id;
          swal({
                  title: "Anda yakin hapus data ini ?",
                  text: "Data tidak bisa dikembalikan jika sudah dihapus !!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Ya Hapus",
                  cancelButtonText: "Batal",
                  closeOnConfirm: false
              },
              function(){
                  swal("Berhasil dihapus !!", "Berhasil dihapus !!", "success");
                  window.location.href='/pulautemiang/backend/delete/delete_pasien.php?nik='+hapus;
              });

        }
</script>
