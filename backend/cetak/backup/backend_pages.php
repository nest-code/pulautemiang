<?php
include 'koneksi.php';


if(isset($_GET['page'])){ // untuk  User
  $page = $_GET['page'];

  switch ($page) {
    case 'home':
      include "pages/home.php";
    break;

    case 'profil':
      include "pages/profil.php";
    break;

    case 'complaint':
      include "pages/complaint.php";
    break;

    default:
      echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
    break;
  }
}else{
    include "pages/home.php";
}

?>
