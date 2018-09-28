<?php
$id=$_GET['id'];
$sql = "select nomor_identifikasi, nama from biodata where biodata.id = ".$id." ".$is_admin_kecamatan." and deleted_at is NULL order by nama asc";
$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
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
                <form method="POST" action="page/terampil/update.php" accept-charset="UTF-8" class="" id="update_terampil" role="form" enctype="multipart/form-data">
                  <input type="hidden" name="step" value="terampil">
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="row">

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Nomor Identifikasi <span class="text-danger">*</span></label>
                          <select class="form-control" name="nomor_identifikasi">
                            <?php
                              while ($biodata = mysqli_fetch_object($query)) {
                                ?>
                                <option <?php if($biodata->nomor_identifikasi == $terampil->nomor_identifikasi){echo "selected";} ?> value="<?php echo $biodata->nomor_identifikasi ?>"><?php echo $biodata->nomor_identifikasi ?> - <?php echo ucwords($biodata->nama) ?></option>
                                <?php
                              }
                             ?>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Pelatihan keterampilan yang didapatkan  <span class="text-danger">*</span></label>
                          <textarea name="pelatihan_keterampilan" class="form-control" placeholder="Pelatihan keterampilan yang didapatkan " ><?php echo $terampil->pelatihan_keterampilan ?></textarea>
                        </div>

                        <div class="form-group">
                          <label>Bantuan finance yang didapatkan <span class="text-danger">*</span></label>
                          <textarea name="bantuan_finance" class="form-control" placeholder="Bantuan finance yang didapatkan " ><?php echo $terampil->bantuan_finance ?></textarea>
                        </div>

                        <div class="form-group">
                          <label>Hasil monitoring pendapatan* <span class="text-danger">*</span></label>
                          <textarea name="hasil_monitoring_pendapatan" class="form-control" placeholder="Hasil monitoring pendapatan* " ><?php echo $terampil->hasil_monitoring_pendapatan ?></textarea>
                        </div>

                        <div class="form-group">
                          <label>Petugas <span class="text-danger">*</span></label>
                          <input type="text" name="petugas" class="form-control" placeholder="Nama Petugas " value="<?php echo $terampil->petugas ?>" >
                        </div>

                      </div>

                    </div>


                  </div>


                  <div class="content">
                    <div class="row">
                      <div class="col-md-12">
                        <p class="help-block">Pastikan Data yang Anda Isikan Benar.</p>
                        <span class="text-danger">*</span> Wajib diisi
                        <button type="submit" class="btn btn-info btn-fill pull-right" >Simpan</button>
                        <div class="clearfix"></div>
                      </div>

                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>

        </div>


      </div>
    </div>
  </div>
