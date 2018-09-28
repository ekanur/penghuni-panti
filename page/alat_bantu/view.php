<?php

$id=$_GET['id'];
$sql = "select nomor_identifikasi, nama from biodata where biodata.id = ".$id." ".$is_admin_kecamatan." and deleted_at is NULL order by nama asc";
$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
$sql_edit = "select * from alat_bantu where id = ".$id." and deleted_at is NULL";
$query_alat_bantu = mysqli_query($conx, $sql_edit) or die(mysqli_error($conx));
$alat_bantu = mysqli_fetch_object($query_alat_bantu);
 ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">



        <div class="tab-content">
          <div class="tab-pane active" id="biodata">
            <div class="card">


              <div class="header">
                <h4 class="title">Detil Alat Bantu</h4>
              </div>
              <div class="content">

                  <div class="row">
                    <div class="col-md-12">

                              <div class="form-group">
                                <label>Nomor Identifikasi <span class="text-danger">*</span></label>
                                <select class="form-control" name="nomor_identifikasi">
                                  <?php
                                    while ($biodata = mysqli_fetch_object($query)) {
                                      ?>
                                      <option <?php if($biodata->nomor_identifikasi == $alat_bantu->nomor_identifikasi){echo "selected";} ?> value="<?php echo $biodata->nomor_identifikasi ?>"><?php echo $biodata->nomor_identifikasi ?> - <?php echo ucwords($biodata->nama) ?></option>
                                      <?php
                                    }
                                   ?>
                                </select>
                              </div>
                            </div>
                          </div>
                    <div class="row">
                      <div class="col-md-12">

                        <h4>Mendapat Alat Bantu <span class="text-danger">: <?php echo $alat_bantu->mendapat_alat_bantu ?></span></h4>

                        <table class="table">
                          <tr>
                            <td>Alat Bantu</td>
                            <td>: <?php echo $alat_bantu->alat_bantu ?></td>
                          </tr>
                          <tr>
                            <td>Alat Bantu Diperbaiki</td>
                            <td>: <?php echo $alat_bantu->alat_bantu_diperbaiki ?></td>
                          </tr>
                          <tr>
                            <td>Asal Alat Bantu</td>
                            <td>: <?php echo $alat_bantu->asal_alat_bantu ?></td>
                          </tr>
                          <tr>
                            <td>Cara Pemberian Alat Bantu</td>
                            <td>: <?php echo $alat_bantu->cara_pemberian_alat_bantu ?></td>
                          </tr>
                          <tr>
                            <td>Tanggal Pemberian Alat</td>
                            <td>: <?php echo $alat_bantu->tanggal_pemberian_alat ?></td>
                          </tr>
                          <tr>
                            <td>Pembayaran</td>
                            <td>: <?php echo $alat_bantu->pembayaran_alat_bantu ?></td>
                          </tr>
                        </table>

                      </div>
                    </div>

                    <h4>Monitoring </h4>

                    <table class="table">
                      <tr>
                        <td>Tanggal Diresepkan </td>
                        <td><?php echo $alat_bantu->tanggal_diresepkan ?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Penyerahan Alat Bantu </td>
                        <td><?php echo $alat_bantu->tanggal_dapat_alat_bantu ?></td>
                      </tr>
                      <tr>
                        <td>Jadwal Monitoring </td>
                        <td><?php echo $alat_bantu->jadwal_monitoring ?></td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          Keterangan Monitoring : <br /> <?php echo $alat_bantu->keterangan_monitoring ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Cara Monitoring</td>
                        <td>: <?php echo $alat_bantu->cara_monitoring ?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Monitoring</td>
                        <td>: <?php echo $alat_bantu->tanggal_monitoring ?></td>
                      </tr>
                      <tr>
                        <td>Petugas</td>
                        <td>: <?php echo $alat_bantu->petugas ?></td>
                      </tr>
                    </table>

                    <h4>Penggunaan </h4>

                    <table class="table">
                      <tr>
                        <td>Durasi Penggunaan Alat </td>
                        <td>: <?php echo $alat_bantu->durasi_penggunaan_alat_bantu ?></td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          Alasan Tidak Menggunakan : <br /> <?php echo $alat_bantu->alasan_tidak_menggunakan ?>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          Alasan Lain : <br /> <?php echo $alat_bantu->alasan_lain ?>
                        </td>
                      </tr>
                    </table>

                      </div>
                      </div>


                          <div class="row">
                            <div class="col-md-12">
                              <a href="?act=alat-bantu"><button type="submit" class="btn btn-info btn-fill pull-right" >Kembali</button></a>
                              <div class="clearfix"></div>
                            </div>
                          </div>

                    </div>
                  </div>

                </div>

              </div>


            </div>
          </div>
        </div>
      </div>
