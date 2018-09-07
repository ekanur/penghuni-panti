<?php 
$id=$_GET['id'];
$sql = "select nomor_identifikasi, nama from biodata where deleted_at is NULL order by nama asc";
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
                <h4 class="title">Tambah Alat Bantu</h4>
              </div>
              <div class="content">
                <form method="POST" action="page/alat_bantu/update.php"  class="" id="tambah_user">
                  <fieldset>
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                  <div class="row">
                    <div class="col-md-12">


                              <!-- <div class="upload_container" style="">
                                <input type="file" name="foto" style="" onchange="readUrl(this)">
                              </div>



                              <img class="avatar border-gray" src="http://localhost/penghuni-panti/uploads/user/default.jpeg" alt="Pilih file foto profil">

                              <h6 class="title text-center" style="margin-top: 10px">Upload foto</h6> -->
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
                            <div class="col-md-6">
                              <div class="form-group">
                                <label> Alat Bantu <span class="text-danger">*</span></label>
                                <input name="alat_bantu" type="text" class="form-control" placeholder="Alat Bantu" value="<?php echo $alat_bantu->alat_bantu ?>" >

                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Alat Bantu Diperbaiki  <span class="text-danger">*</span></label>
                                <input type="text" name="alat_bantu_diperbaiki" class="form-control" placeholder="Alat Bantu Diperbaiki" value="<?php echo $alat_bantu->alat_bantu_diperbaiki ?>" >
                              </div>

                            </div>

                          </div>

                          <div class="row">
                            <div class="col-md-4">

                              <div class="form-group">
                                <label>Tanggal Diresepkan <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tgl_diresepkan" value="<?php echo $alat_bantu->tanggal_diresepkan ?>">
                              </div>

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Jadwal Monitoring<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="jadwal_monitoring" value="<?php echo $alat_bantu->jadwal_monitoring ?>">
                              </div>

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Mendapat Alat Bantu<span class="text-danger">*</span></label>
                                <select name="mendapat_alat_bantu" id="" class="form-control">
                                  <option value="ya" <?php echo ($alat_bantu->mendapat_alat_bantu == 'ya') ? "selected": null; ?>>Ya</option>
                                  <option value="tidak" <?php echo ($alat_bantu->mendapat_alat_bantu == 'tidak') ? "selected": null; ?>>Tidak</option>
                                </select>
                              </div>

                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Tanggal Penyerahan Alat Bantu  <span class="text-danger">*</span></label>
                                <input type="date" name="tanggal_dapat_alat_bantu" class="form-control" value="<?php echo $alat_bantu->tanggal_dapat_alat_bantu ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Pembayaran  <span class="text-danger">*</span></label>
                                <select class="form-control" name="pembayaran_alat_bantu">
                                  <option value="Bayar 100%" <?php echo ($alat_bantu->pembayaran_alat_bantu == 'Bayar 100%') ? "selected": null; ?>>Bayar 100%</option>
                                  <option <?php echo ($alat_bantu->pembayaran_alat_bantu == 'Bayar >50%') ? "selected": null; ?> value="Bayar >50%" >Bayar >50%</option>
                                  <option <?php echo ($alat_bantu->pembayaran_alat_bantu == 'Bayar <50%') ? "selected": null; ?> value="Bayar <50%" >Bayar <50%</option>
                                  <option <?php echo ($alat_bantu->pembayaran_alat_bantu == 'Tidak Bayar') ? "selected": null; ?> value="Tidak Bayar">Tidak Bayar</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Asal Alat Bantu  <span class="text-danger">*</span></label>
                                <input type="text" name="asal_alat_bantu" class="form-control" placeholder="Asal Alat Bantu" value="<?php echo $alat_bantu->asal_alat_bantu ?>" >
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Cara Pemberian Alat Bantu </label>
                                <select class="form-control" name="cara_pemberian_alat_bantu">
                                  <option value="Telepon/text" <?php echo ($alat_bantu->cara_pemberian_alat_bantu == 'Bayar 100%') ? "selected": null; ?>>Telepon/text</option>
                                  <option value="Field visit" <?php echo ($alat_bantu->cara_pemberian_alat_bantu == 'Field visit') ? "selected": null; ?>>Field Visit</option>
                                  <option value="At base" <?php echo ($alat_bantu->cara_pemberian_alat_bantu == 'At base') ? "selected": null; ?>>At base</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Tanggal Pemberian Alat </label>
                                <input type="date" value="<?php echo $alat_bantu->tanggal_pemberian_alat ?>" name="tanggal_pemberian_alat" class="form-control" >
                              </div>
                            </div>
                          </div>

                          <div class="row">

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Keterangan Monitoring <span class="text-danger">*</span></label>
                                <input type="text" name="keterangan_monitoring" class="form-control" placeholder="Keterangan monitoring" value="<?php echo $alat_bantu->keterangan_monitoring ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Durasi Penggunaan Alat <span class="text-danger">*</span></label>
                                <select name="durasi_penggunaan_alat" id="" class="form-control">
                                  <option value="<6 bulan" <?php echo ($alat_bantu->durasi_penggunaan_alat_bantu == '<6 bulan') ? "selected": null; ?>>< 6 Bulan</option>
                                  <option value="6 bulan-1 tahun" <?php echo ($alat_bantu->durasi_penggunaan_alat_bantu == '6 bulan-1 tahun') ? "selected": null; ?>>6 bulan-1 tahun</option>
                                  <option value=">1 tahun" <?php echo ($alat_bantu->durasi_penggunaan_alat_bantu == '>1 tahun') ? "selected": null; ?>>>1 tahun</option>
                                  <option value="Tidak menggunakan" <?php echo ($alat_bantu->durasi_penggunaan_alat_bantu == 'Tidak menggunakan') ? "selected": null; ?>>Tidak menggunakan</option>
                                </select>
                              </div>
                            </div>
                            
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="telp">Alasan Tidak Menggunakan</label>
                                <textarea class="form-control" name="alasan_tidak_menggunakan" cols="10" rows="2"><?php echo $alat_bantu->alasan_tidak_menggunakan ?></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="telp">Alasan Lain</label>
                                <textarea class="form-control" name="alasan_lain" cols="10" rows="2"><?php echo $alat_bantu->alasan_lain ?></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="telp">Cara Monitoring <span class="text-danger">*</span></label>
                                <select class="form-control" name="cara_monitoring">
                                  <option value="Telepon/text"  <?php echo ($alat_bantu->cara_monitoring == 'Telepon/text') ? "selected": null; ?>>Telepon/text</option>
                                  <option value="Field visit"  <?php echo ($alat_bantu->cara_monitoring == 'Field visit') ? "selected": null; ?>>Field visit</option>
                                  <option value="At base"  <?php echo ($alat_bantu->cara_monitoring == 'At base') ? "selected": null; ?>>At base</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="telp">Tanggal Monitoring <span class="text-danger">*</span></label>
                                <input type="date" name="tanggal_monitoring" value="<?php echo $alat_bantu->tanggal_monitoring ?>" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="telp">Petugas <span class="text-danger">*</span></label>
                                <input type="text" name="petugas" class="form-control" placeholder="Petugas" value="<?php echo $alat_bantu->petugas ?>">
                              </div>
                            </div>
                          </div>

                        </fieldset>
                      </form>
                    </div>
                  </div>

                </div>

              </div>


            </div>
          </div>
        </div>
      </div>



