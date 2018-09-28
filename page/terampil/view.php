<?php
$id = $_GET['id'];
$sql = "select nomor_identifikasi, nama from biodata where biodata.id = ".$id." ".$is_admin_kecamatan." and deleted_at is NULL order by nama asc";
$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
$biodata = mysqli_fetch_object($query);
$sql_edit = "select * from terampil where id = ".$id." and deleted_at is NULL";
$query_terampil = mysqli_query($conx, $sql_edit) or die(mysqli_error($conx));
$terampil = mysqli_fetch_object($query_terampil);
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <ul class="nav nav-pills nav-justified thumbnail" id="myTab">
          <li>
            <a href="#biodata" role="tab" data-toggle="tab">
              <h4 class="list-group-item-heading">Keterampilan dan Finance</h4>
              <small class="list-group-item-text">Berisi data Pelatiahn atau Workshop yang pernah diikuti</small>
            </a>
          </li>

        </ul>


        <div class="tab-content">
          <div class="tab-pane active" id="biodata">
            <div class="card">

              <div class="content">

                    <div class="row">

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Nomor Identifikasi <span class="text-danger">* </span></label>
                          <?php echo $biodata->nomor_identifikasi ?> - <?php echo ucwords($biodata->nama) ?>
                        </div>

                        <table class="table">
                          <tr>
                              <td>Pelatihan keterampilan yang didapatkan</td>
                              <td>:</td>
                              <td><?php echo $terampil->pelatihan_keterampilan ?></td>
                          </tr>
                          <tr>
                            <td>Bantuan finance yang didapatkan</td>
                            <td>:</td>
                            <td><?php echo $terampil->bantuan_finance ?></td>
                          </tr>
                          <tr>
                            <td>Hasil monitoring pendapatan</td>
                            <td>:</td>
                            <td><?php echo $terampil->hasil_monitoring_pendapatan ?></td>
                          </tr>
                          <tr>
                            <td>Petugas</td>
                            <td>:</td>
                            <td><?php echo $terampil->petugas ?></td>
                          </tr>
                        </table>

                      </div>

                    </div>


                  </div>


                  <div class="content">
                    <div class="row">
                      <div class="col-md-12">
                        <a href="?act=terampil"><button type="submit" class="btn btn-info btn-fill pull-right" >Kembali</button></a>
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
