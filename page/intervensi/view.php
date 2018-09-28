<?php
$id=$_GET['id'];
$sql = "select nomor_identifikasi, nama from biodata where deleted_at is NULL order by nama asc";
$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
$sql_edit = "select * from intervensi where id = ".$id." and deleted_at is NULL";
$query_intervensi = mysqli_query($conx, $sql_edit) or die(mysqli_error($conx));
$intervensi = mysqli_fetch_object($query_intervensi);
 ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">



        <div class="tab-content">
          <div class="tab-pane active" id="biodata">
            <div class="card">
              <div class="header">
                <h4 class="title">Detil Intervensi</h4>
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
                                <option <?php if($biodata->nomor_identifikasi == $intervensi->nomor_identifikasi){echo "selected";} ?> value="<?php echo $biodata->nomor_identifikasi ?>"><?php echo $biodata->nomor_identifikasi ?> - <?php echo ucwords($biodata->nama) ?></option>
                                <?php
                              }
                             ?>
                          </select>
                        </div>

                        <table class="table">
                          <tr>
                              <td>Subjek Intervensi</td>
                              <td>:</td>
                              <td><?php echo $intervensi->subjek_intervensi ?></td>
                          </tr>
                          <tr>
                            <td>Jenis Intervensi</td>
                            <td>:</td>
                            <td><?php echo $intervensi->jenis_intervensi ?></td>
                          </tr>
                          <tr>
                            <td>Jenis Rujukan</td>
                            <td>:</td>
                            <td><?php echo $intervensi->jenis_rujukan ?></td>
                          </tr>
                          <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td><?php echo $intervensi->keterangan ?></td>
                          </tr>
                        </table>

                        <table class="table">
                          <tr>
                              <td>Cara</td>
                              <td>Tanggal</td>
                              <td>Tanggal  Follow Up</td>
                              <td>Rencana Monitoring</td>
                          </tr>
                          <tr>
                            <td><?php echo $intervensi->cara ?></td>
                            <td><?php echo $intervensi->tanggal ?></td>
                            <td><?php echo $intervensi->tanggal_follow_up ?></td>
                            <td><?php echo $intervensi->rencana_monitoring ?></td>
                          </tr>
                        </table>

                        <h4>Fasilitas Pertama</h4>
                        <table class="table">
                          <tr>
                              <td>Hasil Monitoring Fasilitas Pertama</td>
                              <td>Cara Fasilitas Pertama</td>
                              <td>Tanggal Monitoring Fasilitas Pertama</td>
                          </tr>
                          <tr>
                            <td><?php echo $intervensi->hasil_monitoring_fasilitas1 ?></td>
                            <td><?php echo $intervensi->cara_fasilitas1 ?></td>
                            <td><?php echo $intervensi->tanggal_fasilitas1 ?></td>
                          </tr>
                        </table>

                        <h4>Fasilitas Kedua</h4>
                        <table class="table">
                          <tr>
                              <td>Hasil Monitoring Fasilitas Kedua</td>
                              <td>Cara Fasilitas Kedua</td>
                              <td>Tanggal Monitoring Fasilitas Kedua</td>
                          </tr>
                          <tr>
                            <td><?php echo $intervensi->hasil_monitoring_fasilitas2 ?></td>
                            <td><?php echo $intervensi->cara_fasilitas2 ?></td>
                            <td><?php echo $intervensi->tanggal_fasilitas2 ?></td>
                          </tr>
                        </table>

                      </div>
                    </div>

                          <div class="row">
                            <div class="col-md-12">
                              <a href="?act=intervensi"><button type="submit" class="btn btn-info btn-fill pull-right" >Kembali</button></a>
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
