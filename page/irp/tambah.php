<?php
//echo 'masuk'; exit;
//include('../../config/db.php');
//include('../../config/app.php');
$sql = "select nomor_identifikasi, nama from biodata where deleted_at is NULL order by nama asc";
$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <ul class="nav nav-pills nav-justified thumbnail" id="myTab">
          <li>
            <a href="#biodata" role="tab" data-toggle="tab">
              <h4 class="list-group-item-heading">IRP</h4>
              <small class="list-group-item-text">Berisi data Pelatiahn atau Workshop yang pernah diikuti</small>
            </a>
          </li>

        </ul>


        <div class="tab-content">
          <div class="tab-pane active" id="biodata">
            <div class="card">

              <div class="content">
                <form method="POST" action="page/irp/simpan.php" accept-charset="UTF-8" class="" id="tambah_terampil" role="form" enctype="multipart/form-data">
                  <input type="hidden" name="step" value="terampil">
                  <input type="hidden" name="nomor_identifikasi" value="<?=$nomor_identifikasi; ?>">
                    <div class="row">

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Nomor Identifikasi <span class="text-danger">*</span></label>
                          <select class="form-control" name="nomor_identifikasi">
                            <?php
                              while ($biodata = mysqli_fetch_object($query)) {
                                ?>
                                <option value="<?php echo $biodata->nomor_identifikasi ?>"><?php echo $biodata->nomor_identifikasi ?> - <?php echo ucwords($biodata->nama) ?></option>
                                <?php
                              }
                             ?>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Buat IRP?<span class="text-danger">*</span></label>
                          <select name="buat_irp" id="" class="form-control">
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Alasan tidak dibuatkan IRP <span class="text-danger">*</span></label>
                          <textarea name="alasan_tidak_buat" class="form-control" placeholder="Alasan Tidak dibuat IRP " ></textarea>
                        </div>

                        <div class="form-group">
                          <label>Pelatihan Ortu untuk Melaksanakan IRP <span class="text-danger">*</span></label>
                          <textarea name="pelatihan_ortu" class="form-control" placeholder="Pelatihan Orangtua untuk Melaksanakan IRP " ></textarea>
                        </div>

                        <div class="form-group">
                          <label>IRP Dibuat Oleh <span class="text-danger">*</span></label>
                          <input type="text" name="petugas" class="form-control" placeholder="Nama Petugas " value="" >
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
