<?php 
$sql = "select nomor_identifikasi, nama from biodata where deleted_at is NULL order by nama asc";
$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));
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
                <form method="POST" action="page/alat-bantu/simpan.php" accept-charset="UTF-8" class="" id="tambah_user" role="form">
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
                                      <option value="<?php echo $biodata->nomor_identifikasi ?>"><?php echo $biodata->nomor_identifikasi ?> - <?php echo ucwords($biodata->nama) ?></option>
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
                                <input name="alat_bantu" type="text" class="form-control" placeholder="Alat Bantu" value="" >

                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Alat Bantu Diperbaiki  <span class="text-danger">*</span></label>
                                <input type="text" name="alat_bantu_diperbaiki" class="form-control" placeholder="Alat Bantu Diperbaiki" value="" >
                              </div>

                            </div>

                          </div>

                          <div class="row">
                            <div class="col-md-4">

                              <div class="form-group">
                                <label>Tanggal Diresepkan <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tgl_diresepkan">
                              </div>

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Jadwal Monitoring<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="jadwal_monitoring">
                              </div>

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Mendapat Alat Bantu<span class="text-danger">*</span></label>
                                <select name="mendapat_alat_bantu" id="" class="form-control">
                                  <option value="ya">Ya</option>
                                  <option value="tidak">Tidak</option>
                                </select>
                              </div>

                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Tanggal Penyerahan Alat Bantu  <span class="text-danger">*</span></label>
                                <input type="date" name="tanggal_dapat_alat_bantu" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Pembayaran  <span class="text-danger">*</span></label>
                                <select class="form-control" name="pembayaran_alat_bantu">
                                  <option value="Bayar 100%">Bayar 100%</option>
                                  <option value="Bayar >50%">Bayar >50%</option>
                                  <option value="Bayar <50%">Bayar <50%</option>
                                  <option value="Tidak Bayar">Tidak Bayar</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Asal Alat Bantu  <span class="text-danger">*</span></label>
                                <input type="text" name="asal_alat_bantu" class="form-control" placeholder="Asal Alat Bantu" value="" >
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Cara Pemberian Alat Bantu </label>
                                <select class="form-control" name="cara_pemberian_alat_bantu">
                                  <option value="Telepon/text">Telepon/text</option>
                                  <option value="Field visit">Field Visit</option>
                                  <option value="At base">At base</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Tanggal Pemberian Alat </label>
                                <input type="date" name="tanggal_pemberian_alat" class="form-control" >
                              </div>
                            </div>
                          </div>

                          <div class="row">

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Keterangan Monitoring <span class="text-danger">*</span></label>
                                <input type="text" name="keterangan_monitoring" class="form-control" placeholder="Keterangan monitoring">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Durasi Penggunaan Alat <span class="text-danger">*</span></label>
                                <select name="Durasi Penggunaan Alat" id="" class="form-control">
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
                          </div>
                        
                          

                          <div class="row">
                            <div class="col-md-12">

                              <span class="text-danger">*</span> Wajib diisi
                              <button type="submit" class="btn btn-info btn-fill pull-right" >Simpan</button>
                              <div class="clearfix"></div>
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
      </div>

