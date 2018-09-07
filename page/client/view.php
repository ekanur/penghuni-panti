<?php 
// include('../../config/db.php');
// include('../../config/app.php');

$id = $_GET['id'];

$sql = "select * from biodata where biodata.id = ".$id." and deleted_at is null ".$is_admin_kecamatan;

$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));

$biodata = mysqli_fetch_object($query);

$hp1 = json_decode($biodata->hp1);
$hp2 = json_decode($biodata->hp2);
$detail_pendidikan = json_decode($biodata->detail_pendidikan);
$detail_profesi = json_decode($biodata->detail_profesi);
$detail_ayah = json_decode($biodata->detail_ayah);
$detail_ibu = json_decode($biodata->detail_ibu);
$detail_wali = json_decode($biodata->detail_wali);
// var_dump($hp1);exit();
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <ul class="nav nav-pills nav-justified thumbnail" id="myTab">
          <li>
            <a href="#biodata" role="tab" data-toggle="tab">
              <h4 class="list-group-item-heading">Biodata</h4>
              <small class="list-group-item-text">Berisi data profil, alamat, dan telepon</small>
            </a>
          </li>
          <li>
            <a href="#berkas"  role="tab" data-toggle="tab">
              <h4 class="list-group-item-heading">Hasil Assesmen</h4>
              <small class="list-group-item-text">Hasil Pemeriksaan Penghuni Panti</small>
            </a>
          </li>
        </ul>


        <div class="tab-content">
          <div class="tab-pane active" id="biodata">
            <div class="card">


              <div class="header">
                <h4 class="title">Biodata Penghuni</h4>
              </div>
                <fieldset>
              <div class="content">
                <form method="POST" action="page/client/update_biodata.php" accept-charset="UTF-8" class="" id="tambah_user" role="form">
                  <input type="hidden" name="step" value="biodata">
                  <input type="hidden" name="id" value="<?php echo $biodata->id; ?>">

                  <div class="row">
                    <div class="col-md-6">


                              <!-- <div class="upload_container" style="">
                                <input type="file" name="foto" style="" onchange="readUrl(this)">
                              </div>



                              <img class="avatar border-gray" src="http://localhost/penghuni-panti/uploads/user/default.jpeg" alt="Pilih file foto profil">

                              <h6 class="title text-center" style="margin-top: 10px">Upload foto</h6> -->
                              <div class="form-group">
                                <label>Nomor Identifikasi <span class="text-danger">*</span></label>
                                <input type="text" name="nomor_identifikasi" class="form-control" placeholder="Nomor Identifikasi" value="<?php echo $biodata->nomor_identifikasi ?>" >
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>ID Klien LV <span class="text-danger">*</span></label>
                                <input name="klien_lv" type="text" class="form-control" placeholder="ID Klien" value="<?php echo $biodata->id_klien_lv ?>" >

                              </div>
                            </div>
                          </div>
                          <div class="row">

                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Nama  <span class="text-danger">*</span></label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama " value="<?php echo $biodata->nama ?>" >
                              </div>

                            </div>

                          </div>

                          <div class="row">
                            <div class="col-md-4">

                              <div class="form-group">
                                <label>Jenis Kelamin <span class="text-danger">*</span></label>
                                <select name="jenis_kelamin" id="" class="form-control">
                                  <option value="pria" <?php if($biodata->jenis_kelamin=='pria'){echo "selected";} ?>>Pria</option>
                                  <option value="wanita" <?php if($biodata->jenis_kelamin=='wanita'){echo "selected";} ?>>Wanita</option>
                                </select>
                              </div>

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Akta Kelahiran<span class="text-danger">*</span></label>
                                <select name="akta" id="" class="form-control">
                                  <option value="ada" <?php if($biodata->akta_kelahiran =='ada'){echo "selected";} ?>>Ada</option>
                                  <option value="tidak ada" <?php if($biodata->akta_kelahiran=='tidak ada'){echo "selected";} ?>>Tidak ada</option>
                                </select>
                              </div>

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>KTP<span class="text-danger">*</span></label>
                                <select name="ktp" id="" class="form-control">
                                  <option value="ada" <?php if($biodata->ktp=='ada'){echo "selected";} ?>>Ada</option>
                                  <option value="tidak ada" <?php if($biodata->ktp=='tidak ada'){echo "selected";} ?>>Tidak ada</option>
                                </select>
                              </div>

                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>No. KK  <span class="text-danger">*</span></label>
                                <input type="text" name="no_kk" class="form-control" placeholder="No. KK" value="<?php echo $biodata->no_kk ?>" >
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>NIK  <span class="text-danger">*</span></label>
                                <input type="text" name="nik" class="form-control" placeholder="NIK" value="<?php echo $biodata->nik ?>" >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                <label>Alamat  <span class="text-danger">*</span></label>
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $biodata->alamat ?>" >
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label>RT </label>
                                <input type="text" name="rt" class="form-control" placeholder="RT" value="<?php echo $biodata->rt ?>" >
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label>RW </label>
                                <input type="text" name="rw" class="form-control" placeholder="RW" value="<?php echo $biodata->rw ?>" >
                              </div>
                            </div>
                          </div>

                          <div class="row">

                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Kota/Kabupatem <span class="text-danger">*</span></label>
                                <select name="kota" id="kota" class="form-control">
                                  <option value="Kota Malang" <?php if($biodata->kota=='Kota Malang'){echo "selected";} ?>>Kota Malang</option>
                                  <option value="Kab. Malang" <?php if($biodata->kota=='Kab. Malang'){echo "selected";} ?>>Kab. Malang</option>
                                  <option value="Kota Batu" <?php if($biodata->kota=='Kota Batu'){echo "selected";} ?>>Kota Batu</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Kecamatan <span class="text-danger">*</span></label>
                                <select name="kecamatan" id="" class="form-control">
                                  <option value="Lowokwaru" <?php if($biodata->kec=='Lowokwaru'){echo "selected";} ?>>Lowokwaru</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Kelurahan/Desa <span class="text-danger">*</span></label>
                                <select name="kelurahan" id="" class="form-control">
                                  <option value="Tunjungsekar" <?php if($biodata->kelurahan=='Tunjungsekar'){echo "selected";} ?>>Tunjungsekar</option>

                                </select>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="header">
                          <h4>Kontak</h4>
                        </div>
                        <div class="content">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="telp">Telp. Rumah</label>
                                <input type="text" name="telp_rumah" class="form-control" placeholder="Telp. Rumah " value="<?php echo $biodata->telp_rumah ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="telp">HP (1) <span class="text-danger">*</span></label>
                                <input type="text" name="hp1" class="form-control" placeholder="+62 " value="<?php echo $hp1->nomor ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="telp">Pemilik HP (1) <span class="text-danger">*</span></label>
                                <input type="text" name="pemilik_hp1" class="form-control" placeholder="Pemilik HP(1)" value="<?php echo $hp1->pemilik ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="telp">HP (2) <span class="text-danger">*</span></label>
                                <input type="text" name="hp2" class="form-control" placeholder="+62 " value="<?php echo $hp2->nomor ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="telp">Pemilik HP (2) <span class="text-danger">*</span></label>
                                <input type="text" name="pemilik_hp2" class="form-control" placeholder="Pemilik HP(2)" value="<?php echo $hp2->pemilik ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Asuransi Kesehatan <span class="text-danger">*</span></label>
                                <select name="asuransi" id="" class="form-control">
                                  <option value="0" <?php if($biodata->asuransi_kesehatan=='0'){echo "selected";} ?>>Tidak</option>
                                  <option value="BPJS" <?php if($biodata->asuransi_kesehatan=='BPJS'){echo "selected";} ?>>BPJS</option>
                                  <option value="Swasta" <?php if($biodata->asuransi_kesehatan=='Swasta'){echo "selected";} ?>>Swasta</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Sumber Informasi <span class="text-danger">*</span></label>
                                <input type="text" placeholder="Sumber Informasi" name="sumber_informasi" class="form-control" value="<?php echo $biodata->sumber_informasi ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Sponsor <span class="text-danger">*</span></label>
                                <input type="text" name="sponsor" class="form-control" placeholder="Sponsor" value="<?php echo $biodata->sponsor ?>">
                              </div>
                            </div>
                          </div>

                        </div>



                        <div class="header">
                          <h4>Pendidikan & Pekerjaan</h4>
                        </div>
                        <div class="content">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pendidikan</label>
                                <select name="pendidikan" id="" class="form-control">
                                  <option value="paud_tk" <?php if($detail_pendidikan->pendidikan=='paud_tk'){echo "selected";} ?>>PAUD/TK</option>
                                  <option value="umum" <?php if($detail_pendidikan->pendidikan=='umum'){echo "selected";} ?>>Sekolah Umum / inklusif</option>
                                  <option value="slb" <?php if($detail_pendidikan->pendidikan=='slb'){echo "selected";} ?>>SLB</option>
                                  <option value="pt" <?php if($detail_pendidikan->pendidikan=='pt'){echo "selected";} ?>>Perguruan Tinggi</option>
                                  <option value="non_formal" <?php if($detail_pendidikan->pendidikan=='non_formal'){echo "selected";} ?>>Non Formal</option>
                                  <option value="belum_sekolah" <?php if($detail_pendidikan->pendidikan=='belum_sekolah'){echo "selected";} ?>>Belum Sekolah</option>
                                  <option value="putus_sekolah" <?php if($detail_pendidikan->pendidikan=='putus_sekolah'){echo "selected";} ?>>Putus Sekolah</option>
                                  <option value="tidak_sekolah" <?php if($detail_pendidikan->pendidikan=='tidak_sekolah'){echo "selected";} ?>>Tidak Sekolah</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Kelas</label>
                                <input type="text" class="form-control" name="kelas" value="<?php echo $detail_pendidikan->kelas ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Nama Sekolah</label>
                                <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $detail_pendidikan->nama_sekolah ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">No. Telp Sekolah/Guru</label>
                                <input type="text" class="form-control" name="no_telp_sekolah" value="<?php echo $detail_pendidikan->no_telp_sekolah ?>">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="content">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Pekerjaan/Profesi</label>
                                <input type="text" name="pekerjaan" class="form-control" value="<?php echo $detail_profesi->pekerjaan ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat_kerja" class="form-control" value="<?php echo $detail_profesi->alamat_kerja ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label for="">No. Telp Tempat Kerja</label>
                              <input type="text" class="form-control" name="telp_kerja" value="<?php echo $detail_profesi->telp_kerja ?>">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Pendidikan</label>
                                <select name="pendidikan_kerja" id="" class="form-control">
                                  <option  <?php if($detail_profesi->pendidikan_kerja == 'sd'){echo "selected";} ?> value="sd">SD/Sederajat</option>
                                  <option <?php if($detail_profesi->pendidikan_kerja == 'smp'){echo "selected";} ?>  value="smp">SMP/Sederajat</option>
                                  <option  <?php if($detail_profesi->pendidikan_kerja == 'sma'){echo "selected";} ?> value="sma">SMA/Sederajat</option>
                                  <option <?php if($detail_profesi->pendidikan_kerja == 'diploma'){echo "selected";} ?>  value="diploma">Diploma</option>
                                  <option  <?php if($detail_profesi->pendidikan_kerja == 'S1'){echo "selected";} ?> value="S1">S1</option>
                                  <option  <?php if($detail_profesi->pendidikan_kerja == 'S2'){echo "selected";} ?>  value="S2">S2</option>
                                  <option  <?php if($detail_profesi->pendidikan_kerja == 'S3'){echo "selected";} ?> value="S3">S3</option>
                                  <option  <?php if($detail_profesi->pendidikan_kerja == 'non_formal'){echo "selected";} ?> value="non_formal">Non Formal</option>
                                  <option <?php if($detail_profesi->pendidikan_kerja == 'tidak_sekolah'){echo "selected";} ?> value="tidak_sekolah">Tidak Sekolah</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Keterampilan</label>
                                <input type="text" value="<?php echo $detail_profesi->keterampilan ?>" name="keterampilan" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <label for="">Minat</label>
                              <input type="text" value="<?php echo $detail_profesi->minat ?>" name="minat" class="form-control">
                            </div>
                          </div>
                        </div>

                        <div class="header">
                          <h4>Orang Tua & Wali</h4>
                        </div>
                        <div class="content">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Nama Ayah <span class="text-danger">*</span></label>
                                <input type="text" value="<?php echo $detail_ayah->nama_ayah ?>" name="nama_ayah" class="form-control" placeholder="Nama Ayah">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pekerjaan Ayah <span class="text-danger">*</span></label>
                                <input type="text" value="<?php echo $detail_ayah->pekerjaan_ayah ?>" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah">
                              </div>

                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pendidikan Terakhir Ayah <span class="text-danger">*</span></label>
                                <select name="pendidikan_ayah" id="" class="form-control">
                                  <option <?php if($detail_ayah->pendidikan_ayah == 'sd'){echo "selected";} ?> value="sd">SD/Sederajat</option>
                                  <option <?php if($detail_ayah->pendidikan_ayah == 'smp'){echo "selected";} ?> value="smp">SMP/Sederajat</option>
                                  <option <?php if($detail_ayah->pendidikan_ayah == 'sma'){echo "selected";} ?> value="sma">SMA/Sederajat</option>
                                  <option <?php if($detail_ayah->pendidikan_ayah == 'diploma'){echo "selected";} ?> value="diploma">Diploma</option>
                                  <option <?php if($detail_ayah->pendidikan_ayah == 's1'){echo "selected";} ?> value="s1">S1</option>
                                  <option <?php if($detail_ayah->pendidikan_ayah == 's2_s3'){echo "selected";} ?> value="s2_s3">>S1</option>
                                  <option <?php if($detail_ayah->pendidikan_ayah == 'non_formal'){echo "selected";} ?> value="non_formal">Non Formal</option>
                                  <option <?php if($detail_ayah->pendidikan_ayah == 'tidak_sekolah'){echo "selected";} ?> value="tidak_sekolah">Tidak Sekolah</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Nama Ibu <span class="text-danger">*</span></label>
                                <input type="text" value="<?php echo $detail_ibu->nama_ibu ?>" name="nama_ibu" class="form-control" placeholder="Nama Ibu">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pekerjaan Ibu <span class="text-danger">*</span></label>
                                <input type="text" value="<?php echo $detail_ibu->pekerjaan_ibu ?>" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pendidikan Terakhir Ibu <span class="text-danger">*</span></label>
                                <select name="pendidikan_ibu" id="" class="form-control">
                                  <option <?php if($detail_ibu->pendidikan_ibu == 'sd'){echo "selected";} ?> value="sd">SD/Sederajat</option>
                                  <option <?php if($detail_ibu->pendidikan_ibu == 'smp'){echo "selected";} ?>  value="smp">SMP/Sederajat</option>
                                  <option  <?php if($detail_ibu->pendidikan_ibu == 'sma'){echo "selected";} ?>  value="sma">SMA/Sederajat</option>
                                  <option  <?php if($detail_ibu->pendidikan_ibu == 'diploma'){echo "selected";} ?>  value="diploma">Diploma</option>
                                  <option  <?php if($detail_ibu->pendidikan_ibu == 's1'){echo "selected";} ?>  value="s1">S1</option>
                                  <option  <?php if($detail_ibu->pendidikan_ibu == 's2_s3'){echo "selected";} ?>  value="s2_s3">>S1</option>
                                  <option  <?php if($detail_ibu->pendidikan_ibu == 'non_formal'){echo "selected";} ?>  value="non_formal">Non Formal</option>
                                  <option  <?php if($detail_ibu->pendidikan_ibu == 'tidak_sekolah'){echo "selected";} ?>  value="tidak_sekolah">Tidak Sekolah</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Nama Wali <span class="text-danger">*</span></label>
                                <input type="text" value="<?php echo $detail_wali->nama_wali ?>" name="nama_wali" class="form-control" placeholder="Nama Wali">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pekerjaan Wali <span class="text-danger">*</span></label>
                                <input type="text" value="<?php echo $detail_wali->pekerjaan_wali ?>" name="pekerjaan_wali" class="form-control" placeholder="Pekerjaan Wali">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pendidikan Terakhir Wali <span class="text-danger">*</span></label>
                                <select name="pendidikan_wali" id="" class="form-control">
                                  <option <?php if($detail_wali->pendidikan_wali == 'sd'){echo "selected";} ?> value="sd">SD/Sederajat</option>
                                  <option <?php if($detail_wali->pendidikan_wali == 'smp'){echo "selected";} ?>  value="smp">SMP/Sederajat</option>
                                  <option <?php if($detail_wali->pendidikan_wali == 'sma'){echo "selected";} ?>  value="sma">SMA/Sederajat</option>
                                  <option <?php if($detail_wali->pendidikan_wali == 'diploma'){echo "selected";} ?>  value="diploma">Diploma</option>
                                  <option <?php if($detail_wali->pendidikan_wali == 's1'){echo "selected";} ?>  value="s1">S1</option>
                                  <option <?php if($detail_wali->pendidikan_wali == 's2_s3'){echo "selected";} ?>  value="s2_s3">>S1</option>
                                  <option <?php if($detail_wali->pendidikan_wali == 'non_formal'){echo "selected";} ?>  value="non_formal">Non Formal</option>
                                  <option <?php if($detail_wali->pendidikan_wali == 'tidak_sekolah'){echo "selected";} ?>  value="tidak_sekolah">Tidak Sekolah</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>

                        </fieldset>
                      </form>
                    </div>
                  </div>
                  <div class="tab-pane" id="berkas">

                    <?php 
                    $sql = "select * from asessmen where biodata_id=".$biodata->id." and deleted_at is null ".$is_admin_kecamatan;

                    $query= mysqli_query($conx, $sql);
                    $asessmen = mysqli_fetch_object($query);
                    // var_dump(sizeof($asessmen));exit();
                    if(sizeof($asessmen)>0){
                      $tunanetra = json_decode($asessmen->tunanetra);
                      $tunarungu = json_decode($asessmen->tunarungu);
                      $tunagrahita = json_decode($asessmen->tunagrahita);
                      $tunadaksa = json_decode($asessmen->tunadaksa);
                      $perilaku = json_decode($asessmen->perilaku);
                      $epilepsi = json_decode($asessmen->epilepsi);
                    }
                    
                    ?>
                    <form action="page/client/simpan_asessmen.php" method="post">
                      <input type="hidden" name="biodata_id" value="<?php echo $biodata->id ?>">
                      <fieldset>
                      <div class="card">

                        <div class="header">
                          <h4>Tunanetra-low vision</h4>
                        </div>
                        <div class="content">
                          <div class="row">

                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Jenis</label>
                                <select name="tunanetra_jenis" id="" class="form-control">
                                  <option value="normal" <?php if(sizeof($asessmen)>0){if($tunanetra->jenis == 'normal'){ echo "selected"; }} ?>>Normal</option>
                                  <option value="low_vision" <?php if(sizeof($asessmen)>0){if($tunanetra->jenis == 'low_vision'){ echo "selected"; }} ?>>Low Vision</option>
                                  <option value="blind" <?php if(sizeof($asessmen)>0){if($tunanetra->jenis == 'blind'){ echo "selected"; }} ?>>Blind</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" value="<?php if(sizeof($asessmen)>0){echo $tunanetra->tanggal;} ?>" name="tunanetra_tanggal" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tempat</label>
                                <select name="tunanetra_tempat" id="" class="form-control">
                                  <option value="outreach" <?php if(sizeof($asessmen)>0){if($tunanetra->tempat=="outreach"){echo "selected";}} ?>>Outreach</option>
                                  <option value="at_base" <?php if(sizeof($asessmen)>0){if($tunanetra->tempat=="at_base"){echo "selected";}} ?>>At Base</option>
                                </select>
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="header">
                          <h4>Tunarungu Wicara</h4>
                        </div>
                        <div class="content">
                          <div class="row">

                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Jenis</label>
                                <select name="tunarungu_jenis" id="" class="form-control">
                                  <option value="normal" <?php if(sizeof($asessmen)>0){if($tunarungu->jenis == 'normal'){ echo "selected";} } ?>>Normal</option>
                                  <option value="tuna_rungu_wicara" <?php if(sizeof($asessmen)>0){if($tunarungu->jenis == 'tuna_rungu_wicara'){ echo "selected";} } ?>>Tuna Rungu Wicara</option>
                                  <option value="tuna_rungu" <?php if(sizeof($asessmen)>0){if($tunarungu->jenis == 'tuna_rungu'){ echo "selected";} } ?>>Tuna Rungu</option>
                                  <option value="gangguan_bicara" <?php if(sizeof($asessmen)>0){if($tunarungu->jenis == 'gangguan_bicara'){ echo "selected";} } ?>>Gangguan Bicara</option>
                                  <option value="lambat_bicara" <?php if(sizeof($asessmen)>0){if($tunarungu->jenis == 'lambat_bicara'){ echo "selected";} } ?>>Lambat Bicara</option>
                                  <option value="hambatan_bicara" <?php if(sizeof($asessmen)>0){if($tunarungu->jenis == 'hambatan_bicara'){ echo "selected";} } ?>>Hambatan Bicara</option>
                                  <option value="gangguan_bicara" <?php if(sizeof($asessmen)>0){if($tunanetra->jenis == 'gangguan_bicara'){ echo "selected";} } ?>>Gangguan Bicara</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" value="<?php if(sizeof($asessmen)>0){ echo $tunarungu->tanggal ;}?>" name="tunarungu_tanggal" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tempat</label>
                                <select name="tunarungu_tempat" id="" class="form-control">
                                  <option value="outreach" <?php if(sizeof($asessmen)>0){if($tunarungu->tempat=="outreach"){echo "selected";}} ?>>Outreach</option>
                                  <option value="at_base" <?php if(sizeof($asessmen)>0){if($tunarungu->tempat=="at_base"){echo "selected";}} ?>>At Base</option>
                                </select>
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="header">
                          <h4>Tuna Grahita</h4>
                        </div>
                        <div class="content">
                          <div class="row">

                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Jenis</label>
                                <select name="tunagrahita_jenis" id="" class="form-control">
                                  <option value="normal" <?php if(sizeof($asessmen)>0){if($tunagrahita->jenis == 'normal'){ echo "selected";} } ?>>Normal</option>
                                  <option value="lambat_belajar" <?php if(sizeof($asessmen)>0){if($tunagrahita->jenis == 'lambat_belajar'){ echo "selected";} } ?>>Lambat Belajar</option>
                                  <option value="ringan" <?php if(sizeof($asessmen)>0){if($tunagrahita->jenis == 'ringan'){ echo "selected";} } ?>>Ringan</option>
                                  <option value="sedang" <?php if(sizeof($asessmen)>0){if($tunagrahita->jenis == 'sedang'){ echo "selected";} } ?>>Sedang</option>
                                  <option value="berat" <?php if(sizeof($asessmen)>0){if($tunagrahita->jenis == 'berat'){ echo "selected";} } ?>>Berat</option>
                                  <option value="tunagrahita"  <?php if(sizeof($asessmen)>0){if($tunagrahita->jenis == 'tunagrahita'){ echo "selected";} } ?>>Tuna Grahita</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" value="<?php if(sizeof($asessmen)>0){ echo $tunagrahita->tanggal ;}?>" name="tunagrahita_tanggal" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tempat</label>
                                <select name="tunagrahita_tempat" id="" class="form-control">
                                  <option value="outreach" <?php if(sizeof($asessmen)>0){if($tunagrahita->tempat=="outreach"){echo "selected";}} ?>>Outreach</option>
                                  <option value="at_base" <?php if(sizeof($asessmen)>0){if($tunagrahita->tempat=="at_base"){echo "selected";}} ?>>At Base</option>
                                </select>
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="header">
                          <h4>Tuna Daksa</h4>
                        </div>
                        <div class="content">
                          <div class="row">

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Jenis</label>
                                <select name="tunadaksa_jenis" id="" class="form-control">
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'normal'){ echo "selected";} } ?> value="normal">Normal</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'amputasi'){ echo "selected";} } ?> value="amputasi">Amputasi</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'norma'){ echo "selected";} } ?> value="CP ataxia">CP ataxia</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CP ataxia'){ echo "selected";} } ?> value="CP athetoid">CP athetoid</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CP campuran'){ echo "selected";} } ?> value="CP campuran">CP campuran</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CP flopi'){ echo "selected";} } ?> value="CP flopi">CP flopi</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CP spastik diplegia'){ echo "selected";} } ?> value="CP spastik diplegia">CP spastik diplegia</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CP spastik hemiplegia'){ echo "selected";} } ?> value="CP spastik hemiplegia">CP spastik hemiplegia</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CP spastik quadriplegia'){ echo "selected";} } ?> value="CP spastik quadriplegia">CP spastik quadriplegia</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CTEV'){ echo "selected";} } ?> value="CTEV">CTEV</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Distrofi otot'){ echo "selected";} } ?> value="Distrofi otot">Distrofi otot</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Kaki O'){ echo "selected";} } ?> value="Kaki O">Kaki O</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Kaki X'){ echo "selected";} } ?> value="Kaki X">Kaki X</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Osteogenetik imperfekta'){ echo "selected";} } ?> value="Osteogenetik imperfekta">Osteogenetik imperfekta</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Polio'){ echo "selected";} } ?> value="Polio">Polio</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Stroke'){ echo "selected";} } ?> value="Stroke">Stroke</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'TBC sumsum tulang belakang'){ echo "selected";} } ?> value="TBC sumsum tulang belakang">TBC sumsum tulang belakang</option>
                                  <option  <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Lainnya'){ echo "selected";} } ?> value="Lainnya">Lainnya</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Lain-lain</label>
                                <input type="text" name="tunadaksa_lain" class="form-control" value="<?php if(sizeof($asessmen)>0){ echo $tunadaksa->lain ;}?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" value="<?php if(sizeof($asessmen)>0){ echo $tunadaksa->tanggal ;}?>" name="tunadaksa_tanggal" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Tempat</label>
                                <select name="tunadaksa_tempat" id="" class="form-control">
                                  <option value="outreach" <?php if(sizeof($asessmen)>0){if($tunadaksa->tempat=="outreach"){echo "selected";}} ?>>Outreach</option>
                                  <option value="at_base" <?php if(sizeof($asessmen)>0){if($tunadaksa->tempat=="at_base"){echo "selected";}} ?>>At Base</option>
                                </select>
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="header">
                          <h4>Perilaku</h4>
                        </div>
                        <div class="content">
                          <div class="row">

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Jenis</label>
                                <select name="perilaku_jenis" id="" class="form-control">
                                  <option value="ADHD" <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "ADHD"){echo "selected";}} ?>>ADHD</option>
                                  <option value="ADD" <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "ADD"){echo "selected";}} ?>>ADD</option>
                                  <option value="Automutilasi" <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "Automutilasi"){echo "selected";}} ?>>Automutilasi</option>
                                  <option value="Agresif" <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "Agresif"){echo "selected";}} ?>>Agresif</option>
                                  <option value="Autis kanner" <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "Autis kanner"){echo "selected";}} ?>>Autis kanner</option>
                                  <option value="Autis asperger" <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "Autis asperger"){echo "selected";}} ?>>Autis asperger</option>
                                  <option value="PDDNOS" <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "PDDNOS"){echo "selected";}} ?>>PDDNOS</option>
                                  <option value="Lain-lain" <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "Lain-lain"){echo "selected";}} ?>>Lain-lain</option>

                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Lain-lain (ODGJ, depresi, dll)</label>
                                <input type="text" name="perilaku_lain" class="form-control" value="<?php if(sizeof($asessmen)>0){ echo $perilaku->lain ;}?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" value="<?php if(sizeof($asessmen)>0){ echo $perilaku->tanggal ;}?>" name="perilaku_tanggal" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Tempat</label>
                                <select name="perilaku_tempat" id="" class="form-control">
                                  <option value="outreach" <?php if(sizeof($asessmen)>0){if($perilaku->tempat=="outreach"){echo "selected";}} ?>>Outreach</option>
                                  <option value="at_base" <?php if(sizeof($asessmen)>0){if($perilaku->tempat=="at_base"){echo "selected";}} ?>>At Base</option>
                                </select>
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="header">
                          <h4>Epilepsi</h4>
                        </div>
                        <div class="content">
                          <div class="row">

                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Jenis</label>
                                <select name="epilepsi_jenis" id="" class="form-control">
                                  <option value="Belum ditangani" <?php if(sizeof($asessmen)>0){if($epilepsi->jenis == 'Belum ditangani'){ echo "selected";} } ?>>Belum ditangani</option>
                                  <option value="Pengobatan" <?php if(sizeof($asessmen)>0){if($epilepsi->jenis == 'Pengobatan'){ echo "selected";} } ?>>Pengobatan</option>
                                  <option value="Putus obat" <?php if(sizeof($asessmen)>0){if($epilepsi->jenis == 'Putus obat'){ echo "selected";} } ?>>Putus obat</option>

                                </select>
                              </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" value="<?php if(sizeof($asessmen)>0){ echo $epilepsi->tanggal ;}?>" name="epilepsi_tanggal" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tempat</label>
                                <select name="epilepsi_tempat" id="" class="form-control">
                                  <option value="outreach" <?php if(sizeof($asessmen)>0){if($epilepsi->tempat=="outreach"){echo "selected";}} ?>>Outreach</option>
                                  <option value="at_base" <?php if(sizeof($asessmen)>0){if($epilepsi->tempat=="at_base"){echo "selected";}} ?>>At Base</option>
                                </select>
                              </div>
                            </div>
                          </div>

                        </div>


                        <div class="content">
                          <div class="row">

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Type of impairment or disability </label>
                                <select name="disability" id="" class="form-control">
                                 <option  <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Bukan PwD'){ echo "selected";} } ?> value="Bukan PwD">Bukan PwD</option>
                                 <option  <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Visual impairment'){ echo "selected";} } ?> value="Visual impairment">Visual impairment</option>
                                 <option  <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Hearing impairment'){ echo "selected";} } ?> value="Hearing impairment">Hearing impairment</option>
                                 <option  <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Speech/communication impairment'){ echo "selected";} } ?> value="Speech/communication impairment">Speech/communication impairment</option>
                                 <option  <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Physical impairment'){ echo "selected";} } ?> value="Physical impairment">Physical impairment</option>
                                 <option  <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Deafblindness'){ echo "selected";} } ?> value="Deafblindness">Deafblindness</option>
                                 <option  <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Cerebral palsy'){ echo "selected";} } ?> value="Cerebral palsy">Cerebral palsy</option>
                                 <option  <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Epilepsy'){ echo "selected";} } ?> value="Epilepsy">Epilepsy</option>
                                 <option  <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Intellectual / learning disabilities & developmental disorders / autism"'){ echo "selected";} } ?> value="Intellectual / learning disabilities & developmental disorders / autism">Intellectual / learning disabilities & developmental disorders / autism</option>
                                 <option  <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Psycho-social disabilities'){ echo "selected";} } ?> value="Psycho-social disabilities">Psycho-social disabilities</option>
                                 <option  <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Multiple disabilities'){ echo "selected";} } ?> value="Multiple disabilities">Multiple disabilities</option>

                                </select>
                              </div>
                            </div>

                          </div>
                          <div class="row">

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Komunitas Difabel</label>
                                <input type="text" value="<?php if(sizeof($asessmen)>0){ echo $asessmen->komunitas_difabel ;}?>" name="komunitas_difabel" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">CO</label>
                                <input type="text" value="<?php if(sizeof($asessmen)>0){ echo $asessmen->co ;}?>" name="co" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Identifikasi Kader</label>
                                <input type="text" value="<?php if(sizeof($asessmen)>0){ echo $asessmen->identifikasi_kader ;}?>" name="identifikasi_kader" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Tinggal di Asrama</label>
                                <select name="tinggal_asrama" id="" class="form-control">
                                  <option value="ya" <?php if(sizeof($asessmen)>0){if($asessmen->tinggal_asrama=="ya"){echo "selected";}} ?>>Ya</option>
                                  <option value="tidak"  <?php if(sizeof($asessmen)>0){if($asessmen->tinggal_asrama=="tidak"){echo "selected";}} ?>>Tidak</option>
                                </select>
                              </div>
                            </div>
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

