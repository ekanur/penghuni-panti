<?php 
$sql = "SELECT
count(biodata.id) as count,
kec,
jenis_kelamin
FROM
biodata
GROUP BY kec, jenis_kelamin";

$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
$data_klien = array();

while($klien = mysqli_fetch_object($query)){
  // if(!array_key_exists($klien->kec, $data_klien)){
  $data_klien[$klien->kec] = array($klien->jenis_kelamin=>$klien->count);
  if(!array_key_exists($klien->jenis_kelamin, $data_klien[$klien->kec])){      
      $data_klien[$klien->kec] = array($klien->jenis_kelamin=>$klien->count);
    }
  
}
echo "<pre>";
var_dump($data_klien);exit();
 ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header" style="padding-bottom: 15px;">
                        <h4 class="title">Dashboard</h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <ul class="nav nav-pills nav-justified thumbnail" id="myTabDashboard">
                    <li>
                      <a href="#klien" role="tab" data-toggle="tab">
                        <h4 class="list-group-item-heading">Data Klien</h4>
                        <small class="list-group-item-text">Laporan Singkat untuk Data Klien</small>
                      </a>
                    </li>
                    <li>
                      <a href="#alat-bantu"  role="tab" data-toggle="tab">
                        <h4 class="list-group-item-heading">Data Alat Bantu</h4>
                        <small class="list-group-item-text">Laporan Singkat Data Alat Bantu</small>
                      </a>
                    </li>
                    <li>
                      <a href="#irp" role="tab" data-toggle="tab">
                        <h4 class="list-group-item-heading">Data IRP</h4>
                        <small class="list-group-item-text">Laporan Singkat IRP</small>
                      </a>
                    </li>
                    <li>
                      <a href="#terampil"  role="tab" data-toggle="tab">
                        <h4 class="list-group-item-heading">Data Keterampilan & Finance</h4>
                        <small class="list-group-item-text">Laporan Singkat Data Keterampilan & Finance</small>
                      </a>
                    </li>
                  </ul>
                </div>
            </div>

            <div class="col-md-12">
              <div class="tab-content">
                <div class="tab-pane active" id="klien">
                  <table id="tabel_klien" style="display: none;">
                    <thead>
                      <tr>
                        <th></th>
                      <th>Pria</th>
                      <th>Wanita</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Lowokwaru</td>
                        <td>20</td>
                        <td>30</td>
                      </tr>
                      <tr>
                        <td>Klojen</td>
                        <td>33</td>
                        <td>13</td>
                      </tr>
                      <tr>
                        <td>Sukun</td>
                        <td>20</td>
                        <td>5</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="card" id="chart_klien">
                    Klien
                  </div>
                </div>

                <div class="tab-pane" id="alat-bantu">
                  <div class="card">
                    Alat Bantu
                  </div>
                </div>

                <div class="tab-pane" id="irp">
                  <div class="card">
                    IRP
                  </div>
                </div>

                <div class="tab-pane" id="terampil">
                  <div class="card">
                    Keterampilan
                  </div>
                </div>
              </div>
            </div>

        </div>

    </div>


</div>
