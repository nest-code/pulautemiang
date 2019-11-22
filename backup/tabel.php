<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Status</th>
      <th>Date</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $n=0;
    include 'backend/koneksi.php';
    $query = mysqli_query($conn, "select * from tb_obat");
    while ($a = mysqli_fetch_array($query)) {
      $n=$n+1;
      ?>
      <tr>
        <td><?php echo "$n"?>.</td>
        <td><?php echo $a['nama_obat'];?></td>
        <td><?php echo $a['satuan'];?></td>
        <td><?php echo $a['stok'];?></td>
        <td><?php echo $a['keterangan'];?></td>
    </tr>

  <?php } ?>

  </tbody>
</table>
