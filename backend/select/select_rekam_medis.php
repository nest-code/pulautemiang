<?php
include_once 'koneksi.php';
$query = "select *  from tb_rekam_medis";
$hasil = mysqli_query($conn, $query);

$rm_banyakData = 0;

$no_rm = array();
$id_pasien = array();
$id_dokter = array();
$tgl_rekam = array();
$rpt= array();
$rpo= array();
$riw_alergi_mkn= array();
$riw_alergi_obat= array();
$riw_operasi= array();
$riw_ayah= array();
$riw_ibu= array();
$riw_penyakit= array();
$jaminan_kesehatan= array();



if (mysqli_num_rows($hasil) > 0) {

    $rm_banyakData = mysqli_num_rows($hasil);
    while($data = mysqli_fetch_assoc($hasil)){

        array_push($no_rm, $data['no_rm']);
        array_push($id_pasien_obat, $data['id_pasien']);
        array_push($tgl_rekam, $data['tgl_rekam']);
        array_push($rpt, $data['rpt']);
        array_push($rpo, $data['rpo']);
        array_push($riw_alergi_mkn, $data['riw_alergi_mkn']);
        array_push($riw_alergi_obat, $data['riw_alergi_obat']);
        array_push($riw_operasi, $data['riw_operasi']);
        array_push($riw_ayah, $data['riw_ayah']);
        array_push($riw_ibu, $data['riw_ibu']);
        array_push($riw_penyakit, $data['riw_penyakit']);
        array_push($jaminan_kesehatan, $data['jaminankesehatan']);


    }
}
?>
