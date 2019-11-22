<?php
include('../koneksi.php');


	$id_jenis_poli = $_GET['id_jenis_poli'];
	$queryhapus = mysqli_query($conn,"DELETE FROM tb_jenis_poli WHERE id_jenis_poli = $id_jenis_poli");

	if($queryhapus){

		    ?>
		    <script type="text/javascript">
		    swal({
		      title: "Data Terhapus!",
		      text: "Telah telah terhapus",
		      type: "success",
		      confirmButtonText: "Oke",
		      closeOnConfirm: false,
		    },


		    function(){
		      // window.location="?m=uv_page_register_employess";

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
