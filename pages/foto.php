


<?php $hak= $_SESSION['level'];?>
<?php if ($hak=='Dokter'){?>
  <img src="/pulautemiang/img/dokter/<?php echo $data['foto'];?>" class="img-circle" width="160" height="160" >
<?php }
else if ($hak=='Apoteker') { ?>
  <img src="/pulautemiang/img/petugas/<?php echo $data['foto'];?>" class="img-circle" width="160" height="160" >
<?php }
else if ($hak=='Kepala') { ?>
  <img src="/pulautemiang/img/petugas/<?php echo $data['foto'];?>" class="img-circle" width="160" height="160" >
<?php }
else if ($hak=='Admin') { ?>
  <img src="/pulautemiang/img/petugas/<?php echo $data['foto'];?>" class="img-circle" width="160" height="160" >
<?php }
else if ($hak=='Petugas') { ?>
  <img src="/pulautemiang/img/petugas/<?php echo $data['foto'];?>" class="img-circle" width="160" height="160" >

<?php } ?>
