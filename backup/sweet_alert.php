<!DOCTYPE html>
<html>
<head>
<title>Sweet Alert</title>
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
<script type="text/javascript" src="js/sweetalert.min.js"></script>
</head>
<body>
<button onclick="classic()">Normal Alert</button>
<button onclick="sweet()">Sweet Alert</button>
<button onclick="archiveFunction()">Deletes</button>

<input type="button" class="tampil" value="Tampil"/>
<input type="button" class="sembunyi" value="Sembunyi"/>



<button class="btn btn-danger ajax_delete" type="button" >Delete</button>

 <script>
 //Inisiasi awal penggunaan jQuery
 $(document).ready(function(){
  //Pertama sembunyikan elemen class gambar
        $('.gambar').hide();

  //Ketika elemen class tampil di klik maka elemen class gambar tampil
        $('.tampil').click(function(){
   $('.gambar').show();
        });

  //Ketika elemen class sembunyi di klik maka elemen class gambar sembunyi
        $('.sembunyi').click(function(){
   //Sembunyikan elemen class gambar
   $('.gambar').hide();
        });
 });
 </script>





<script>

$(".ajax_delete").on("click", function (){ /*your sweet alert code and after ajax call function */});

function normal () {
alert("Normal Alert!");
}

function archiveFunction() {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: "Are you sure?",
  text: "But you will still be able to retrieve this file.",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, archive it!",
  cancelButtonText: "No, cancel please!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    form.submit();          // submitting the form when user press yes
  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
}



function sweet (){
swal("Good job!", "You clicked the button!", "success");
}


</script>
</body>
</html>
