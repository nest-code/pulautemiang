<?php include_once '../backend/kontroller.php'; ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header" >
    <h1 text-align="center">Daftar pengajuan surat keterangan izin kegiatan</h1>
  </section>

  <section class="content">

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
                <th><span class="fa fa-place"> Alamat</th>
                <th><span class="fa fa-info-circle"> Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $n=0;
              include '../backend/koneksi.php';


              $query = mysqli_query($conn, "select tb_population.population_nik,tb_population.population_name,tb_applicant.applicant_id, tb_applicant.status from tb_applicant join tb_population on tb_population.population_nik=tb_applicant.population_nik join tb_activity_permit_certificate on tb_applicant.applicant_id=tb_activity_permit_certificate.applicant_id where tb_activity_permit_certificate.apc_id=tb_activity_permit_certificate.apc_id and tb_applicant.status='Proses' or tb_applicant.status='Selesai'");
              while ($a = mysqli_fetch_array($query)) {
                $n=$n+1;
                ?>
                <tr>
                  <td><?php echo "$n"?>.</td>
                  <td><?php echo $a['applicant_id'];?></td>
                  <td><?php echo $a['population_nik'];?></td>
                  <td><?php echo $a['population_name'];?></td>
                  <td><?php echo $a['status'];?></td>
                  <td>

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
