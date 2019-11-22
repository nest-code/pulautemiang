<?php include_once '/..../backend/kontroller.php'; ?>

<div class="content-wrapper">

  <?php
  $username = $_SESSION['user_username'];
  $query = mysqli_query($conn,"SELECT * FROM tb_user inner join tb_employees on  tb_user.employees_nip = tb_employees.employees_nip  where tb_user.user_username = '$username'");

  while($p=mysqli_fetch_array($query)) {
    // var_dump($p);
    ?>
    <section class="content">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4> <b>PROFIL</b></h4>
        </div>
        <br>

        <div class="col-sm-2">
          NIP
        </div>

        <div class="col-sm-10" disab>
          <p>:<?php echo $p['employees_nip']?></p>
        </div>

        <div class="col-sm-2">
          Nama Lengkap
        </div>

        <div class="col-sm-10">
          <p>:<?php echo $p['employees_name']?></p>
        </div>

        <div class="col-sm-2">
          Jenis Kelamin
        </div>

        <div class="col-sm-10">
          <p>:<?php echo $p['employees_gender']?></p>
        </div>

        <div class="col-sm-2">
          Tanggal Lahir
        </div>

        <div class="col-sm-10">
          <p>:<?php echo $p['employees_birthday']?></p>
        </div>

        <div class="col-sm-2">
          Alamat
        </div>

        <div class="col-sm-10">
          <p>:<?php echo $p['employees_address']?></p>
        </div>

        <div class="col-sm-2">
          No. HP
        </div>

        <div class="col-sm-10">
          <p>:<?php echo $p['employees_hp']?></p>
        </div>

        <div class="col-sm-2">
          Jabatan
        </div>

        <div class="col-sm-10">
          <p>:<?php echo $p['employees_position']?></p>
        </div>


        <br><br>
        <!-- User -->


        <div class="col-sm-2">
          Nama Akun
        </div>
        <div class="col-sm-10">
          <p>:<?php echo $p['user_username']?></p>
        </div>

        <div class="col-sm-2">
          Kata Sandi
        </div>

        <div class="col-sm-10">
          <p>:<?php echo $p['user_password']?></p>
        </div>

        <div class="col-sm-2">
          Pertanyaan Keamanan
        </div>
        <div class="col-sm-10">
          <p>:<?php echo $p['user_question']?></p>
        </div>


        <div class="col-sm-2">
          Jawaban Pertanyaan Keamanan
        </div>
        <div class="col-sm-10">
          <p>:<?php echo $p['user_answer']?></p>
        </div>



        <div class="form-group row">
          <div class="col-sm-12">
            <button type="button" class="btn btn-warning" onclick="modalUbah('<?php echo $p['employees_nip']; ?>');"><i class="fa fa-pencil"></i> Ubah Data Profil</button>
          <?php } ?>
        </div>
      </div>


      <!-- modal ubah -->
      <div id="modalUbah" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Ubah Data</h4>
            </div>

            <div class="modal-body">
              <form class="" action="#" method="post">


                <div class="form-group row">
                  <div class="col-sm-2">
                    Nama Lengkap
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="employees_name" maxlength="30" value="" id="employees_name" class="form-control"  required="true" >
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">
                    Jenis Kelamin
                  </div>
                  <div class="col-sm-10">
                    <select class="form-control" name="employees_gender" required >
                      <option value="">-Pilih-</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-2">
                    Tanggal Lahir
                  </div>
                  <div class="col-sm-10">
                    <input type="date" name="employees_birthday"  id="employees_birthday" class="form-control"  required="true">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">
                    Alamat
                  </div>
                  <div class="col-sm-10">
                    <input type="text" maxlength="30" name="employees_address" value="" id="employees_address" class="form-control"  required="true">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">
                    Hp
                  </div>
                  <div class="col-sm-10">
                    <input type="text"  maxlength="13" name="employees_hp" value="" id="employees_hp" class="form-control"  required="true" onkeypress="return isAlphabetkey(event)">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">
                    Posisi
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="employees_position" value="" id="employees_position" class="form-control"  required="true">
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-2">
                    Nama Akun
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="user_username" maxlength="20" value="" id="user_username" class="form-control"  required="true" >
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">
                    Kata Sandi
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="user_password" maxlength="32" value="" id="user_password" class="form-control"  required="true">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">
                    Pertanyaan Keamanan
                  </div>
                  <div class="col-sm-10">
                    <select class="form-control" name="user_question" id="user_question">
                      <option value="Dimanakah Letak Rumah makan favorit?">Dimanakah Letak Rumah makan favorit ?</option>
                      <option value="Dimanakah anda dilahirkan?">Dimanakah anda dilahirkan ?</option>
                      <option value="Siapakah nama sahabat anda sewaktu kecil?">Siapakah nama sahabat anda sewaktu kecil ?</option>
                      <option value="Apa nama pangilan akrab anda sewaktu kecil?">Apa nama pangilan akrab anda sewaktu kecil ??</option>
                    </select>
                  </div>
                </div>



<!--
                <div class="form-group row">
                  <div class="col-sm-2">
                    Pertanyaan Keamanan
                  </div>

                  <div class="col-sm-10">
                    <select class="form-control" name="user_question" id="user_question">
                      <option value="<?php echo $p['user_password']?>"> <?php echo $p['user_question']?></option>
                      <option value="Dimanakah Letak Rumah makan favorit?">Dimanakah Letak Rumah makan favorit ?</option>
                      <option value="Dimanakah anda dilahirkan?">Dimanakah anda dilahirkan ?</option>
                      <option value="Siapakah nama sahabat anda sewaktu kecil?">Siapakah nama sahabat anda sewaktu kecil ?</option>
                      <option value="Apa nama pangilan akrab anda sewaktu kecil?">Apa nama pangilan akrab anda sewaktu kecil ??</option>
                    </select>
                  </div>
                </div> -->


                <div class="form-group row">
                  <div class="col-sm-2">
                    Jawabaan Pertanyaan
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="user_answer" value="" id="user_answer" class="form-control"  required="true" maxlength="25">
                  </div>
                </div>



                <div class="row">
                  <div class="form-group">
                    <div class="col-md-8 col-md-push-4">
                      <button type="submit" class="btn btn-primary" name="ubah_profil">
                        <i class="fa fa-save"></i> Simpan
                      </button>

                      <button type="reset" class="btn btn-danger">
                        <i class="fa fa-times"></i> Batal
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir -->

    </section>
  </div>


  <script type="text/javascript">
  function modalUbah(id) {
    $.ajax({
      type:'get',
      url:'../backend/edit_profil.php',
      data:"id="+id,
      success: function(data){
        var $response = $(data);
        // console.log($response);
        // alert($response.filter('#employess_nip').text());
        $('#employees_nip').val($response.filter('#employess_nip').text());
        $('#employees_name').val($response.filter('#employees_name').text());
        $('#employees_gender').val($response.filter('#employees_gender').text());
        $('#employees_birthday').val($response.filter('#employees_birthday').text());
        $('#employees_address').val($response.filter('#employees_address').text());
        $('#employees_hp').val($response.filter('#employees_hp').text());
        $('#employees_position').val($response.filter('#employees_position').text());

        $('#user_username').val($response.filter('#user_username').text());
        $('#user_password').val($response.filter('#user_password').text());
        $('#user_type').val($response.filter('#user_type').text());
        $('#user_question').val($response.filter('#user_question').text());
        $('#user_answer').val($response.filter('#user_answer').text());

        $('#modalUbah').modal('show');
      }
    });
  }
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
