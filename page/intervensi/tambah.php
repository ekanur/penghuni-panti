<?php
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
              <h4 class="list-group-item-heading">Intervensi</h4>
              <small class="list-group-item-text">Form untuk menambah data intervensi</small>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="biodata">
            <div class="card">

              <div class="content">
                <form method="POST" action="page/intervensi/simpan.php"  class="" id="tambah_user">
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
                            </div>
                          </div>
                           <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Subjek Intervensi<span class="text-danger">*</span></label>
                                <select name="subjek_intervensi" id="" class="form-control">
                                  <option value="Penyandang disabilitas">Penyandang disabilitas</option>
                                  <option value="Orang tua/wali">Orang tua/wali</option>
                                  <option value="Guru">Guru</option>
                                </select>

                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Jenis Intervensi<span class="text-danger">*</span></label>
                                <select name="jenis_intervensi" id="" class="form-control">
                                  <option value="Observasi">Observasi</option>
                                  <option value="Assessemen lanjutan">Assessemen lanjutan</option>
                                  <option value="Screening">Screening</option>
                                  <option value="Monitoring">Monitoring</option>
                                  <option value="Konseling">Konseling</option>
                                  <option value="Konsultasi">Konsultasi</option>
                                  <option value="Rujukan">Rujukan</option>
                                  <option value="Fasilitasi">Fasilitasi</option>
                                  <option value="Pelatihan vokasional/profesional_1">Pelatihan vokasional/profesional_1</option>
                                  <option value="Pelatihan vokasional/profesional_2">Pelatihan vokasional/profesional_2</option>
                                  <option value="Pelatihan keterampilan atau bisnis_1">Pelatihan keterampilan atau bisnis_1</option>
                                  <option value="Pelatihan keterampilan atau bisnis_2">Pelatihan keterampilan atau bisnis_2</option>
                                  <option value="Pelatihan lainnya">Pelatihan lainnya</option>
                                  <option value="Pelatihan lainnya">Pelatihan lainnya</option>
                                  <option value="Pekerjaan formal">Pekerjaan formal</option>
                                  <option value="Berwirausaha, usaha mikro">Berwirausaha, usaha mikro</option>
                                  <option value="Pekerjaan terlindung">Pekerjaan terlindung</option>
                                  <option value="Layanan finansial dari organisasi disabilitas">Layanan finansial dari organisasi disabilitas</option>
                                  <option value="Layanan finansial dari organisasi mainstream">Layanan finansial dari organisasi mainstream</option>
                                </select>
                              </div>

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Jenis Rujukan<span class="text-danger">*</span></label>
                                <select name="jenis_rujukan" id="" class="form-control">
                                  <option value="Kesehatan">Kesehatan</option>
                                  <option value="Pendidikan">Pendidikan</option>
                                  <option value="Training/bimbingan">Training/bimbingan</option>
                                  <option value="Support grup">Support grup</option>
                                  <option value="Rehab/terapi">Rehab/terapi</option>
                                  <option value="Alat bantu">Alat bantu</option>
                                  <option value="Financial services">Financial services</option>
                                  <option value="Employment">Employment</option>
                                </select>
                              </div>

                            </div>

                          </div>

                          <div class="row">
                            <div class="col-md-12">

                              <div class="form-group">
                                <label>Keterangan <span class="text-danger">*</span></label>
                                <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                              </div>

                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Cara<span class="text-danger">*</span></label>
                                <select name="cara" id="" class="form-control">
                                  <option value="Telepon/text">Telepon/text</option>
                                  <option value="Field visit">Field visit</option>
                                  <option value="At base">At base</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Tanggal  <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tanggal">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Tanggal  Follow Up<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tanggal_follow_up">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Rencana Monitoring<span class="text-danger">*</span></label>
                                <input type="text" placeholder="Rencana Monitoring.." class="form-control" name="rencana_monitoring">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Hasil Monitoring Fasilitas Pertama</label>
                                <input type="text" name="hasil_monitoring_fasilitas1" class="form-control" >
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Cara Fasilitas Pertama  <span class="text-danger">*</span></label>
                                <select name="cara_fasilitas1" id="" class="form-control">
                                  <option value="Telepon/text">Telepon/text</option>
                                  <option value="Field visit">Field visit</option>
                                  <option value="At base">At base</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Tanggal Monitoring Fasilitas Pertama</label>
                                <input type="date" class="form-control" name="tanggal_fasilitas1">
                              </div>
                            </div>

                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Hasil Monitoring Fasilitas Kedua</label>
                                <input type="text" name="hasil_monitoring_fasilitas2" class="form-control" >
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Cara Fasilitas Kedua  <span class="text-danger">*</span></label>
                                <select name="cara_fasilitas2" id="" class="form-control">
                                  <option value="Telepon/text">Telepon/text</option>
                                  <option value="Field visit">Field visit</option>
                                  <option value="At base">At base</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Tanggal Monitoring Fasilitas Kedua</label>
                                <input type="date" class="form-control" name="tanggal_fasilitas2">
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
                                  <option value="<6 bulan">< 6 Bulan</option>
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
