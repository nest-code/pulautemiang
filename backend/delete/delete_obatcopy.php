<?php
include_once '../koneksi.php';

  $id_obat =$_GET['id_obat'];
	$queryhapus = mysqli_query($conn, "DELETE FROM tb_obat WHERE id_obat = $id_obat");

		if($queryhapus){



          ?>
          <script type="text/javascript">
          swal({
            title: "Data tersimpan!",
            text: "Telah terdaftar",
            type: "success",
            confirmButtonText: "Oke",
            closeOnConfirm: false
          },

          function(){
            window.location="../../admin?m=admin/admin_obat";

          });
          </script>
          <?php
        }else {
          // jika gagal
          ?>
          <script type="text/javascript">
          swal("Terjadi kesalahan", "Mohon periksa inputan anda dan inputkan kembali data yang benar.", "error");
          </script>
          <?php
        }

         ?>
