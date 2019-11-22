<?php
session_start();
$id_akun=$_SESSION['id_akun'];
$namaakun=$_SESSION['namaakun'];
$level=$_SESSION['level'];
if(!isset($_SESSION['namaakun'])){
  header('location: ../login.php');

}else{
  // $idpetugas=$_SESSION['id_petugas'];
  ?>


  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h1>Hello, <span>Selamat Datang</span></h1>
              </div>
            </div>
          </div>

          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active">Profil</li>
                </ol>
              </div>
            </div>
          </div>
        </div>


        <section id="main-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="user-profile">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="user-photo m-b-30">
                          <img class="img-fluid" src="img/profil.jpg" alt="" />
                        </div>

                        <?php
                        $host = "localhost";
                        $username = "root";
                        $pass = "";
                        $db = "db_temiang";
                        $conn = mysqli_connect($host, $username, $pass, $db);

                        $query = mysqli_query($conn,"SELECT * FROM tb_akun inner join tb_petugas on tb_akun.id_akun=tb_petugas.id_akun where tb_akun.id_akun='$id_akun'");
                        while($p=mysqli_fetch_array($query)) {
                          // var_dump($p);
                          ?>
                          <div class="user-work">
                            <h4>INFORMASI AKUN</h4>
                            <div class="work-content">
                              <h3>Nama Akun </h3>
                              <p>
                                <?php
                                echo  $p['namaakun']
                                ?>
                              </p>
                            </div>

                            <div class="work-content">
                              <h3>Katasandi</h3>
                              <?php
                              echo $p['katasandi']
                              ?>
                            </div>

                            <div class="work-content">
                              <h3>Jenis Akun</h3>
                              <p>
                                <?php
                                echo $p['level']
                                ?>
                              </p>
                            </div>

                            <div class="work-content">
                              <h3>Pertanyaan Keamanan</h3>
                              <?php if($p['pertanyaan'] == '1'){ echo 'Laki-laki'; } ?>
                              <?php if($p['pertanyaan'] == '2'){ echo 'Perempuan'; } ?>
                              <?php if($p['pertanyaan'] == '3'){ echo 'Perempuan'; } ?>
                              <?php if($p['pertanyaan'] == '4'){ echo 'Perempuan'; } ?>

                            </div>
                          </div>


                        </div>
                        <div class="col-lg-8">
                          <div class="user-profile-name">  <?php echo $p['nama'] ?></div>
                          <br>
                          <br>

                          <div class="">
                            &nbsp;  &nbsp;<button type="button" class="btn btn-default btn-sm" > <i class="fa fa-edit"></i> &nbsp;Edit</button>
                          </div>

                          <div class="custom-tab user-profile-tab">
                            <ul class="nav nav-tabs" role="tablist">

                            </ul>



                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="1">
                                <div class="contact-information">
                                  <h4>Informasi Pengguna</h4>

                                  <div class="address-content">
                                    <span class="contact-title">Nama Lengkap : </span>
                                    <span class="mail-address">
                                      <?php echo $p['nama'] ?>

                                    </span>
                                  </div>

                                  <div class="address-content">
                                    <span class="contact-title">Jenis Kelamin :</span>
                                    <span class="mail-address">
                                      <?php if($p['jk'] == 'L'){ echo 'Laki-laki'; } ?>
                                      <?php if($p['jk'] == 'P'){ echo 'Perempuan'; } ?>
                                    </span>
                                  </div>

                                  <div class="birthday-content">
                                    <span class="contact-title">Tanggal Lahir : </span>
                                    <span class="birth-date">
                                      <?php
                                      echo $p['tgl_lahir']
                                      ?> </span>
                                    </div>

                                    <div class="birthday-content">
                                      <span class="contact-title">Agama : </span>
                                      <span class="birth-date">
                                        <?php
                                        echo $p['agama']
                                        ?>
                                      </span>
                                    </div>



                                    <div class="address-content">
                                      <span class="contact-title">Alamat :</span>
                                      <span class="mail-address">
                                        <?php
                                        echo $p['alamat']
                                        ?>
                                      </span>
                                    </div>

                                    <div class="phone-content">
                                      <span class="contact-title">Hp : </span>
                                      <span class="phone-number">
                                        <?php
                                        echo $p['no_hp']
                                        ?>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
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


  <?php } ?>
