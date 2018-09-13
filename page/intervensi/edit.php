<?php 

include('../../config/db.php');
include('../../config/app.php');
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
                <h4 class="title">Edit Intervensi</h4>
              </div>
              <div class="content">
                <form method="POST" action="page/intervensi/update.php"  class="" id="tambah_user">
                  <input type="hidden" name="id" value="<?php echo $id ?>">
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
                            </div>
                          </div>
                           <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Subjek Intervensi<span class="text-danger">*</span></label>
                                <select name="subjek_intervensi" id="" class="form-control">
                                  <option value="Penyandang disabilitas" <?php echo ($intervensi->subjek_intervensi == 'Penyandang disabilitas') ? "selected": null; ?>>Penyandang disabilitas</option>
                                  <option <?php echo ($intervensi->subjek_intervensi == 'Orang tua/wali') ? "selected": null; ?> value="Orang tua/wali">Orang tua/wali</option>
                                  <option <?php echo ($intervensi->subjek_intervensi == 'Guru') ? "selected": null; ?> value="Guru">Guru</option>
                                </select>

                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Jenis Intervensi<span class="text-danger">*</span></label>
                                <select name="jenis_intervensi" id="" class="form-control">
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Observasi') ? "selected": null; ?> value="Observasi">Observasi</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Assessemen lanjutan') ? "selected": null; ?> value="Assessemen lanjutan">Assessemen lanjutan</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Screening') ? "selected": null; ?> value="Screening">Screening</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Monitoring') ? "selected": null; ?> value="Monitoring">Monitoring</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Konseling') ? "selected": null; ?> value="Konseling">Konseling</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Konsultasi') ? "selected": null; ?> value="Konsultasi">Konsultasi</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Rujukan') ? "selected": null; ?> value="Rujukan">Rujukan</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Fasilitasi') ? "selected": null; ?> value="Fasilitasi">Fasilitasi</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Pelatihan vokasional/profesional_1') ? "selected": null; ?> value="Pelatihan vokasional/profesional_1">Pelatihan vokasional/profesional_1</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Pelatihan vokasional/profesional_2') ? "selected": null; ?> value="Pelatihan vokasional/profesional_2">Pelatihan vokasional/profesional_2</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Pelatihan keterampilan atau bisnis_1') ? "selected": null; ?> value="Pelatihan keterampilan atau bisnis_1">Pelatihan keterampilan atau bisnis_1</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Pelatihan keterampilan atau bisnis_2') ? "selected": null; ?> value="Pelatihan keterampilan atau bisnis_2">Pelatihan keterampilan atau bisnis_2</option>
                                  <!-- <option <?php echo ($intervensi->jenis_intervensi == 'Guru') ? "selected": null; ?> value="Pelatihan lainnya">Pelatihan lainnya</option> -->
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Pelatihan lainnya') ? "selected": null; ?> value="Pelatihan lainnya">Pelatihan lainnya</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Pekerjaan formal') ? "selected": null; ?> value="Pekerjaan formal">Pekerjaan formal</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Berwirausaha, usaha mikro') ? "selected": null; ?> value="Berwirausaha, usaha mikro">Berwirausaha, usaha mikro</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Pekerjaan terlindung') ? "selected": null; ?> value="Pekerjaan terlindung">Pekerjaan terlindung</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Layanan finansial dari organisasi disabilitas') ? "selected": null; ?> value="Layanan finansial dari organisasi disabilitas">Layanan finansial dari organisasi disabilitas</option>
                                  <option <?php echo ($intervensi->jenis_intervensi == 'Layanan finansial dari organisasi mainstream') ? "selected": null; ?> value="Layanan finansial dari organisasi mainstream">Layanan finansial dari organisasi mainstream</option>
                                </select>
                              </div>

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Jenis Rujukan<span class="text-danger">*</span></label>
                                <select name="jenis_rujukan" id="" class="form-control">
                                  <option <?php echo ($intervensi->jenis_rujukan == 'Kesehatan') ? "selected": null; ?> value="Kesehatan">Kesehatan</option>
                                  <option <?php echo ($intervensi->jenis_rujukan == 'Pendidikan') ? "selected": null; ?> value="Pendidikan">Pendidikan</option>
                                  <option <?php echo ($intervensi->jenis_rujukan == 'Training/bimbingan') ? "selected": null; ?> value="Training/bimbingan">Training/bimbingan</option>
                                  <option <?php echo ($intervensi->jenis_rujukan == 'Support grup') ? "selected": null; ?> value="Support grup">Support grup</option>
                                  <option <?php echo ($intervensi->jenis_rujukan == 'Rehab/terapi') ? "selected": null; ?> value="Rehab/terapi">Rehab/terapi</option>
                                  <option <?php echo ($intervensi->jenis_rujukan == 'Alat bantu') ? "selected": null; ?> value="Alat bantu">Alat bantu</option>
                                  <option <?php echo ($intervensi->jenis_rujukan == 'Financial services') ? "selected": null; ?> value="Financial services">Financial services</option>
                                  <option <?php echo ($intervensi->jenis_rujukan == 'Employment') ? "selected": null; ?> value="Employment">Employment</option>
                                </select>
                              </div>

                            </div>

                          </div>

                          <div class="row">
                            <div class="col-md-12">

                              <div class="form-group">
                                <label>Keterangan <span class="text-danger">*</span></label>
                                <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"><?php echo $intervensi->keterangan ?></textarea>
                              </div>

                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Cara<span class="text-danger">*</span></label>
                                <select name="cara" id="" class="form-control">
                                  <option <?php echo ($intervensi->cara == 'Telepon/text') ? "selected": null; ?> value="Telepon/text">Telepon/text</option>
                                  <option <?php echo ($intervensi->cara == 'Field visit') ? "selected": null; ?> value="Field visit">Field visit</option>
                                  <option <?php echo ($intervensi->cara == 'At base') ? "selected": null; ?> value="At base">At base</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Tanggal  <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tanggal" value="<?php echo $intervensi->tanggal ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Tanggal  Follow Up<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tanggal_follow_up" value="<?php echo $intervensi->tanggal_follow_up ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Rencana Monitoring<span class="text-danger">*</span></label>
                                <input type="text" placeholder="Rencana Monitoring.." class="form-control" name="rencana_monitoring" value="<?php echo $intervensi->rencana_monitoring ?>">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Hasil Monitoring Fasilitas Pertama</label>
                                <input type="text" name="hasil_monitoring_fasilitas1" class="form-control" value="<?php echo $intervensi->hasil_monitoring_fasilitas1 ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Cara Fasilitas Pertama  <span class="text-danger">*</span></label>
                                <select name="cara_fasilitas1" id="" class="form-control">
                                  <option <?php echo ($intervensi->cara_fasilitas1 == 'Telepon/text') ? "selected": null; ?> value="Telepon/text">Telepon/text</option>
                                  <option <?php echo ($intervensi->cara_fasilitas1 == 'Field visit') ? "selected": null; ?> value="Field visit">Field visit</option>
                                  <option <?php echo ($intervensi->cara_fasilitas1 == 'At base') ? "selected": null; ?> value="At base">At base</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Tanggal Monitoring Fasilitas Pertama</label>
                                <input type="date" class="form-control" name="tanggal_fasilitas1" value="<?php echo $intervensi->tanggal_fasilitas1; ?>">
                              </div>
                            </div>
                            
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Hasil Monitoring Fasilitas Kedua</label>
                                <input type="text" name="hasil_monitoring_fasilitas2" class="form-control" value="<?php echo $intervensi->hasil_monitoring_fasilitas2; ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Cara Fasilitas Kedua  <span class="text-danger">*</span></label>
                                <select name="cara_fasilitas2" id="" class="form-control">
                                  <option <?php echo ($intervensi->cara_fasilitas2 == 'Telepon/text') ? "selected": null; ?> value="Telepon/text">Telepon/text</option>
                                  <option <?php echo ($intervensi->cara_fasilitas2 == 'Field visit') ? "selected": null; ?> value="Field visit">Field visit</option>
                                  <option <?php echo ($intervensi->cara_fasilitas2 == 'At base') ? "selected": null; ?> value="At base">At base</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Tanggal Monitoring Fasilitas Kedua</label>
                                <input type="date" class="form-control" name="tanggal_fasilitas2" value="<?php echo $intervensi->tanggal_fasilitas2; ?>">
                              </div>
                            </div>
                            
                          </div>

                          
                          <div class="row">
                            <div class="col-md-12">

                              <span class="text-danger">*</span> Wajib diisi
                              <button type="submit" class="btn btn-info btn-fill pull-right" >Simpan</button>
                              <div class="clearfix"></div>
                            </div>

                          </div>

                          <!--<div class="row">

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Keterangan Monitoring <span class="text-danger">*</span></label>
                                <input type="text" name="keterangan_monitoring" class="form-control" placeholder="Keterangan monitoring">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Durasi Penggunaan Alat <span class="text-danger">*</span></label>
                                <select name="durasi_penggunaan_intervensi" id="" class="form-control">
                                  <option <?php echo ($intervensi->subjek_intervensi == 'Guru') ? "selected": null; ?> value="<6 bulan">< 6 Bulan</option>
                                  <option value="6 bulan-1 tahun">6 bulan-1 tahun</option>
                                  <option value=">1 tahun">>1 tahun</option>
                                  <option value="Tidak menggunakan">Tidak menggunakan</option>
                                </select>
                              </div>
                            </div>
                            
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="telp">Alasan Tidak Menggunakan</label>
                                <textarea class="form-control" name="alasan_tidak_menggunakan" cols="10" rows="2">
                                  
                                </textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="telp">Alasan Lain</label>
                                <textarea class="form-control" name="alasan_lain" cols="10" rows="2">
                                  
                                </textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="telp">Cara Monitoring <span class="text-danger">*</span></label>
                                <select class="form-control" name="cara_monitoring">
                                  <option value="Telepon/text">Telepon/text</option>
                                  <option value="Field visit">Field visit</option>
                                  <option value="At base">At base</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="telp">Tanggal Monitoring <span class="text-danger">*</span></label>
                                <input type="date" name="tanggal_monitoring" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="telp">Petugas <span class="text-danger">*</span></label>
                                <input type="text" name="petugas" class="form-control" placeholder="Petugas" value="">
                              </div>
                            </div>
                          </div> -->

                      </form>
                    </div>
                  </div>

                </div>

              </div>


            </div>
          </div>
        </div>
      </div>

