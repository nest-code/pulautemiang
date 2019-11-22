<?php include 'backend/kontroller.php'; ?>
<?php $hak= $_SESSION['level'];?>
<?php if ($hak=='Admin'){?>
  <ul>
    <li class="label">Main</li>
    <li  class="sidebar-sub-toggle" ><a href="?m=beranda"> <i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a></li>
    <li><a href="?m=admin/admin_pasien"><i class="ti-wheelchair"></i>Pasien</a></li>
    <!-- <li><a href="?m=admin/admin_pasien2"><i class="ti-wheelchair"></i>Pasien</a></li> -->

    <li><a href="?m=admin/admin_petugas"><i class="ti-hand-open"></i>Petugas</a></li>
    <li><a href="?m=admin/admin_dokter"><i class="fa fa-user-md" aria-hidden="true"></i> Dokter</a></li>
    <li><a href="?m=admin/admin_obat"><i class="ti-package"></i>Obat</a></li>
    <li><a href="?m=admin/admin_poli"><i class="ti-pin2"></i>Poli</a></li>
  </ul>
<?php }
else if ($hak=='Petugas') { ?>
  <ul>
      <li class="label">Main</li>
      <li  class="sidebar-sub-toggle" ><a href="?m=beranda"> <i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a></li>
        <li  class="sidebar-sub-toggle" ><a href="?m=petugas/petugas_antrian_beranda"><i class="ti-layers-alt"></i> Antrian Berobat <span class="badge badge-primary"></span> </span></a></li>
        <li  class="sidebar-sub-toggle" ><a href="?m=petugas/petugas_pendaftaran"><i class="ti-pencil-alt"></i> Pasien Baru <span class="badge badge-primary"></span> </span></a></li>
        <li  class="sidebar-sub-toggle" ><a href="?m=petugas/petugas_pasien"><i class="ti-wheelchair"></i> Data Pasien <span class="badge badge-primary"></span> </span></a></li>
  </ul>
    <?php }
    else if ($hak=='Kepala') { ?>
      <ul>
          <li class="label">Main</li>
          <li  class="sidebar-sub-toggle" ><a href="?m=beranda"> <i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="?m=kepala/kepala_obat">  <i class="ti-package"></i>Laporan Obat <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="?m=kepala/kepala_transaksi"><i class="ti-money"></i> Laporan Transaksi<span class="badge badge-primary"></span> </span></a>
              <li  class="sidebar-sub-toggle" ><a href="?m=kepala/kepala_pasien"><i class="ti-wheelchair"></i> Laporan Pasien<span class="badge badge-primary"></span> </span></a>
              <li  class="sidebar-sub-toggle" ><a href="?m=kepala/kepala_poli"><i class="ti-pin2"></i> Laporan Poli Berobat<span class="badge badge-primary"></span> </span></a>
            </li>
          </ul>
        <?php }
        else if ($hak=='Apotek') { ?>
          <ul>
            <li class="label">Main</li>
            <li  class="sidebar-sub-toggle" ><a href="?m=beranda"> <i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="?m=apoteker/apoteker_obat"><i class="ti-package"></i>Data Obat <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="?m=apoteker/apoteker_antrian"><i class="ti-layers-alt"></i>Resep Obat <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="?m=apoteker/apoteker_pembayaran"><i class="ti-money"></i> Pembayaran <span class="badge badge-primary"></span> </span></a></li>
          </ul>
        <?php }
        else if ($hak=='Dokter') { ?>
          <ul>
            <li class="label">Main</li>
            <li  class="sidebar-sub-toggle" ><a href="?m=beranda"> <i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span> </span></a></li>
            <li  class="sidebar-sub-toggle" ><a href="?m=dokter/dokter_antrian"><i class="ti-layers-alt"></i>Antrian Periksa</a></li>
            <li class="sidebar-sub-toggle" ><a href="?m=dokter/dokter_pasien"><i class="ti-wheelchair"></i> Pasien</a></li>
          </ul>
        <?php }?>
      </section>
