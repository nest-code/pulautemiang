<?php
include_once 'koneksi.php';
$no_cari = $_POST['id'];
// ini coi pr
$output='';
$result = mysqli_query($conn, "select * from tb_status where applicant_id ='$no_cari'");

if (mysqli_num_rows($result)>0) {

  $output.='

  <div class="panel panel-default">
    <div class="panel-body">
      <div class="table-responsive">
        <table align="center"class="table-responsive">
            <tr>
              <td colspan="3"></td>
            </tr>';

            $no=0;
              while ($row=mysqli_fetch_array($result))

              {
                $no++;
            $output .='
            <tr>
              <td align="right" width="200px"><b>'.$row["status_date"].'</b></td>
              <td align="center" width="70px"><b>&#10022;</b></td>
              <td align="left" width="200px"><b>Status : </b></td>
            </tr>
            <tr >
              <td align="right"> '.$row["applicant_id"].'</td>
              <td rowspan="2" align="center"><div style="width:1px; height:40px; background-color:black;"></div></td>
              <td align="left"> '.$row["status"].'</td>
            </tr>
            <tr>
              <td colspan="3" height="15px"></td>


            </tr>';

            if($row["status"]=='Selesai'){

              $output .='
              <tr>
              <td align="center" colspan="3">

                <a class="btn btn-primary" target="_blank" href="backend/print_applicant_activity.php?no_reg='.$no_reg.'"> <i class="fa fa-download"></i> Lihat </a>
                <br>


              </td>
              </tr>

              <br><br><br>
              <table>
              </table>

              <table align="center">
              <tr>
                <td>
                <br><br>
                   <b>Jam Kerja </b>
                </td>
              </tr>
                <tr>
                <td>
                Senin - Kamis &emsp;&emsp;&emsp;: 07.45 WIB - 16.30 WIB </td>
                </tr>

                <tr>
                <td> Jumat &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: 08.00 WIB - 11.30 WIB </td>
                </tr>

                <tr>
                <td> Sabtu & minggu &emsp;&emsp;: Libur </td>
                </tr>
              </table>
              '
              ;
            } if($row["status"]=='Tolak'){

                $output .='
                <br><br><br>
                <tr>
                  <td align="center" colspan="3" bgcolor="#f39999" width="70px">
                  <h4>Data Ditolak, Silahkan Datang Ke Kantor Kelurahan Warungboto untuk pemberitahuan Lebih Lanjut</h4></td>
                </tr>

                <table align="center">
                <tr>
                  <td>
                  <br><br>
                     <b>Jam Kerja </b>
                  </td>
                </tr>
                  <tr>
                  <td>
                  Senin - Kamis &emsp;&emsp;&emsp;: 07.45 WIB - 16.30 WIB </td>
                  </tr>

                  <tr>
                  <td> Jumat &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: 08.00 WIB - 11.30 WIB </td>
                  </tr>

                  <tr>
                  <td> Sabtu & minggu &emsp;&emsp;: Libur </td>
                  </tr>
                </table>
                '
                ;
              }else{
                  $output .='


                  ';
              }
            }

            $output .="</table></div></div></div>";

            echo $output;

          }else {
            return false;
          }
          ?>
