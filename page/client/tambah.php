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
                    <div class="content">
                      <form method="POST" action="page/client/simpan_biodata.php" accept-charset="UTF-8" class="" id="tambah_user" role="form" enctype="multipart/form-data">
                        <input type="hidden" name="step" value="biodata">


                        <div class="row">
                          <div class="col-md-6">


                              <!-- <div class="upload_container" style="">
                                <input type="file" name="foto" style="" onchange="readUrl(this)">
                              </div>



                              <img class="avatar border-gray" src="http://localhost/penghuni-panti/uploads/user/default.jpeg" alt="Pilih file foto profil">

                              <h6 class="title text-center" style="margin-top: 10px">Upload foto</h6> -->
                              <div class="form-group">
                                <label>Nomor Identifikasi <span class="text-danger">*</span></label>
                                <input type="text" name="nomor_identifikasi" class="form-control" placeholder="Nomor Identifikasi" value="" >
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>ID Klien LV <span class="text-danger">*</span></label>
                                <input name="klien_lv" type="text" class="form-control" placeholder="ID Klien" value="" >

                              </div>
                            </div>
                          </div>
                          <div class="row">

                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Nama  <span class="text-danger">*</span></label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama " value="" >
                              </div>

                            </div>

                          </div>

                          <div class="row">
                            <div class="col-md-4">

                              <div class="form-group">
                                <label>Jenis Kelamin <span class="text-danger">*</span></label>
                                <select name="jenis_kelamin" id="" class="form-control">
                                  <option value="pria">Pria</option>
                                  <option value="wanita">Wanita</option>
                                </select>
                              </div>

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Akta Kelahiran<span class="text-danger">*</span></label>
                                <select name="akta" id="" class="form-control">
                                  <option value="ada">Ada</option>
                                  <option value="tidak ada">Tidak ada</option>
                                </select>
                              </div>

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>KTP<span class="text-danger">*</span></label>
                                <select name="ktp" id="" class="form-control">
                                  <option value="">Ada</option>
                                  <option value="">Tidak ada</option>
                                </select>
                              </div>

                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>No. KK  <span class="text-danger">*</span></label>
                                <input type="text" name="no_kk" class="form-control" placeholder="No. KK" value="" >
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>NIK  <span class="text-danger">*</span></label>
                                <input type="text" name="nik" class="form-control" placeholder="NIK" value="" >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-10">
                              <div class="form-group">
                                <label>Alamat  <span class="text-danger">*</span></label>
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="" >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Kelurahan/Desa <span class="text-danger">*</span></label>
                                <input type="text" name="kelurahan" id="" class="form-control" placeholder="Kelurahan/Desa" value="" >
                              </div>
                            </div>
                          
                            <div class="col-md-2">
                              <div class="form-group">
                                <label>RT </label>
                                <input type="text" name="rt" class="form-control" placeholder="RT" value="" >
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label>RW </label>
                                <input type="text" name="rw" class="form-control" placeholder="RW" value="" >
                              </div>
                            </div>
                          </div>

                          <div class="row">

                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Kota/Kabupatem <span class="text-danger">*</span></label>
                                <select name="kota" id="kota" class="form-control">
                                  <option value="Kota Malang">Kota Malang</option>
                                  <option value="Kab. Malang">Kab. Malang</option>
                                  <option value="Kota Batu">Kota Batu</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Kecamatan <span class="text-danger">*</span></label>
                                <select name="kecamatan" id="" class="form-control">
                                  <option value="Kec. Batu">Kec. Batu</option>
                                  <option value="Kec. Bumiaji">Kec. Bumiaji</option>
                                  <option value="Kec. Junrejo">Kec. Junrejo</option>
                                  <option value="Kec. Lowokwaru">Kec. Lowokwaru</option>
                                  <option value="Kec. Sukun">Kec. Sukun</option>
                                  <option value="Kec. Blimbing">Kec. Blimbing</option>
                                  <option value="Kec. Klojen">Kec. Klojen</option>
                                  <option value="Kec. Kedungkandang">Kec. Kedungkandang</option>
                                  <option value="Kec. Lawang">Kec. Lawang</option>
                                  <option value="Kec. Singosari">Kec. Singosari</option>
                                  <option value="Kec. Pakis">Kec. Pakis</option>
                                  <option value="Kec. Tumpang">Kec. Tumpang</option>
                                  <option value="Kec. Tajinan">Kec. Tajinan</option>
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
                                <input type="text" name="telp_rumah" class="form-control" placeholder="Telp. Rumah " value="">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="telp">HP (1) <span class="text-danger">*</span></label>
                                <input type="text" name="hp1" class="form-control" placeholder="+62 " value="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="telp">Pemilik HP (1) <span class="text-danger">*</span></label>
                                <input type="text" name="pemilik_hp1" class="form-control" placeholder="Pemilik HP(1)" value="">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="telp">HP (2) <span class="text-danger">*</span></label>
                                <input type="text" name="hp2" class="form-control" placeholder="+62 " value="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="telp">Pemilik HP (2) <span class="text-danger">*</span></label>
                                <input type="text" name="pemilik_hp2" class="form-control" placeholder="Pemilik HP(2)" value="">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Asuransi Kesehatan <span class="text-danger">*</span></label>
                                <select name="asuransi" id="" class="form-control">
                                  <option value="0">Tidak</option>
                                  <option value="BPJS">BPJS</option>
                                  <option value="Swasta">Swasta</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Sumber Informasi <span class="text-danger">*</span></label>
                                <input type="text" placeholder="Sumber Informasi" name="sumber_informasi" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Sponsor <span class="text-danger">*</span></label>
                                <input type="text" name="sponsor" class="form-control" placeholder="Sponsor">
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
                                  <option value="paud_tk">PAUD/TK</option>
                                  <option value="umum">Sekolah Umum / inklusif</option>
                                  <option value="slb">SLB</option>
                                  <option value="pt">Perguruan Tinggi</option>
                                  <option value="non_formal">Non Formal</option>
                                  <option value="belum_sekolah">Belum Sekolah</option>
                                  <option value="putus_sekolah">Putus Sekolah</option>
                                  <option value="tidak_sekolah">Tidak Sekolah</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Kelas</label>
                                <input type="text" class="form-control" name="kelas">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Nama Sekolah</label>
                                <input type="text" class="form-control" name="nama_sekolah">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">No. Telp Sekolah/Guru</label>
                                <input type="text" class="form-control" name="no_telp_sekolah">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="content">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Pekerjaan/Profesi</label>
                                <input type="text" name="pekerjaan" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat_kerja" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label for="">No. Telp Tempat Kerja</label>
                              <input type="text" class="form-control" name="telp_kerja">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Pendidikan</label>
                                <select name="pendidikan_kerja" id="" class="form-control">
                                  <option value="sd">SD/Sederajat</option>
                                  <option value="smp">SMP/Sederajat</option>
                                  <option value="sma">SMA/Sederajat</option>
                                  <option value="diploma">Diploma</option>
                                  <option value="S1">S1</option>
                                  <option value="S2">S2</option>
                                  <option value="S3">S3</option>
                                  <option value="non_formal">Non Formal</option>
                                  <option value="tidak_sekolah">Tidak Sekolah</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Keterampilan</label>
                                <input type="text" name="keterampilan" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <label for="">Minat</label>
                              <input type="text" name="minat" class="form-control">
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
                                <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pekerjaan Ayah <span class="text-danger">*</span></label>
                                <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah">
                              </div>

                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pendidikan Terakhir Ayah <span class="text-danger">*</span></label>
                                <select name="pendidikan_ayah" id="" class="form-control">
                                  <option value="sd">SD/Sederajat</option>
                                  <option value="smp">SMP/Sederajat</option>
                                  <option value="sma">SMA/Sederajat</option>
                                  <option value="diploma">Diploma</option>
                                  <option value="s1">S1</option>
                                  <option value="s2_s3">>S1</option>
                                  <option value="non_formal">Non Formal</option>
                                  <option value="tidak_sekolah">Tidak Sekolah</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Nama Ibu <span class="text-danger">*</span></label>
                                <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pekerjaan Ibu <span class="text-danger">*</span></label>
                                <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pendidikan Terakhir Ibu <span class="text-danger">*</span></label>
                                <select name="pendidikan_ibu" id="" class="form-control">
                                  <option value="sd">SD/Sederajat</option>
                                  <option value="smp">SMP/Sederajat</option>
                                  <option value="sma">SMA/Sederajat</option>
                                  <option value="diploma">Diploma</option>
                                  <option value="s1">S1</option>
                                  <option value="s2_s3">>S1</option>
                                  <option value="non_formal">Non Formal</option>
                                  <option value="tidak_sekolah">Tidak Sekolah</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Nama Wali <span class="text-danger">*</span></label>
                                <input type="text" name="nama_wali" class="form-control" placeholder="Nama Wali">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pekerjaan Wali <span class="text-danger">*</span></label>
                                <input type="text" name="pekerjaan_wali" class="form-control" placeholder="Pekerjaan Wali">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Pendidikan Terakhir Wali <span class="text-danger">*</span></label>
                                <select name="pendidikan_wali" id="" class="form-control">
                                  <option value="sd">SD/Sederajat</option>
                                  <option value="smp">SMP/Sederajat</option>
                                  <option value="sma">SMA/Sederajat</option>
                                  <option value="diploma">Diploma</option>
                                  <option value="s1">S1</option>
                                  <option value="s2_s3">>S1</option>
                                  <option value="non_formal">Non Formal</option>
                                  <option value="tidak_sekolah">Tidak Sekolah</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>



                        <div class="content">
                          <div class="row">
                            <div class="col-md-12">
                              <p class="help-block">Simpan biodata terlebih dahulu.</p>
                              <span class="text-danger">*</span> Wajib diisi
                              <button type="submit" class="btn btn-info btn-fill pull-right" >Simpan</button>
                              <div class="clearfix"></div>
                            </div>

                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
                  <div class="tab-pane" id="berkas">
                    <!-- <form action="simpan_asessmen.php" method="post"> -->
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
                                  <option value="normal">Normal</option>
                                  <option value="low_vision">Low Vision</option>
                                  <option value="blind">Blind</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tunanetra_tanggal" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tempat</label>
                                <select name="tunanetra_tempat" id="" class="form-control">
                                  <option value="outreach">Outreach</option>
                                  <option value="at_base">At Base</option>
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
                                  <option value="normal">Normal</option>
                                  <option value="tuna_rungu_wicara">Tuna Rungu Wicara</option>
                                  <option value="tuna_rungu">Tuna Rungu</option>
                                  <option value="gangguan_bicara">Gangguan Bicara</option>
                                  <option value="lambat_bicara">Lambat Bicara</option>
                                  <option value="hambatan_bicara">Hambatan Bicara</option>
                                  <option value="gangguan_bicara">Gangguan Bicara</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tunarungu_tanggal" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tempat</label>
                                <select name="tunarungu_tempat" id="" class="form-control">
                                  <option value="outreach">Outreach</option>
                                  <option value="at_base">At Base</option>
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
                                  <option value="normal">Normal</option>
                                  <option value="lambat_belajar">Lambat Belajar</option>
                                  <option value="ringan">Ringan</option>
                                  <option value="sedang">Sedang</option>
                                  <option value="berat">Berat</option>
                                  <option value="tunagrahita">Tuna Grahita</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tunagrahita_tanggal" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tempat</label>
                                <select name="tunagrahita_tempat" id="" class="form-control">
                                  <option value="outreach">Outreach</option>
                                  <option value="at_base">At Base</option>
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
                                  <option value="normal">Normal</option>
                                  <option value="amputasi">Amputasi</option>
                                  <option value="CP ataxia">CP ataxia</option>
                                  <option value="CP athetoid">CP athetoid</option>
                                  <option value="CP campuran">CP campuran</option>
                                  <option value="CP flopi">CP flopi</option>
                                  <option value="CP spastik diplegia">CP spastik diplegia</option>
                                  <option value="CP spastik hemiplegia">CP spastik hemiplegia</option>
                                  <option value="CP spastik quadriplegia">CP spastik quadriplegia</option>
                                  <option value="CTEV">CTEV</option>
                                  <option value="Distrofi otot">Distrofi otot</option>
                                  <option value="Kaki O">Kaki O</option>
                                  <option value="Kaki X">Kaki X</option>
                                  <option value="Osteogenetik imperfekta">Osteogenetik imperfekta</option>
                                  <option value="Polio">Polio</option>
                                  <option value="Stroke">Stroke</option>
                                  <option value="TBC sumsum tulang belakang">TBC sumsum tulang belakang</option>
                                  <option value="Lainnya">Lainnya</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Lain-lain</label>
                                <input type="text" name="tunadaksa_lain" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tunadaksa_tanggal" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Tempat</label>
                                <select name="tunadaksa_tempat" id="" class="form-control">
                                  <option value="outreach">Outreach</option>
                                  <option value="at_base">At Base</option>
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
                                  <option value="ADHD">ADHD</option>
                                  <option value="ADD">ADD</option>
                                  <option value="Automutilasi">Automutilasi</option>
                                  <option value="Agresif">Agresif</option>
                                  <option value="Autis kanner">Autis kanner</option>
                                  <option value="Autis asperger">Autis asperger</option>
                                  <option value="PDDNOS">PDDNOS</option>
                                  <option value="Lain-lain">Lain-lain</option>

                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Lain-lain (ODGJ, depresi, dll)</label>
                                <input type="text" name="perilaku_lain" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="perilaku_tanggal" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Tempat</label>
                                <select name="perilaku_tempat" id="" class="form-control">
                                  <option value="outreach">Outreach</option>
                                  <option value="at_base">At Base</option>
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
                                  <option value="Belum ditangani">Belum ditangani</option>
                                  <option value="Pengobatan">Pengobatan</option>
                                  <option value="Putus obat">Putus obat</option>

                                </select>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="epilepsi_tanggal" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Tempat</label>
                                <select name="epilepsi_tempat" id="" class="form-control">
                                  <option value="outreach">Outreach</option>
                                  <option value="at_base">At Base</option>
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
                                  <option value="Belum ditangani">Belum ditangani</option>
                                  <option value="Pengobatan">Pengobatan</option>
                                  <option value="Putus obat">Putus obat</option>

                                </select>
                              </div>
                            </div>

                          </div>
                          <div class="row">

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Komunitas Difabel</label>
                                <input type="text" name="komunitas_difabel" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">CO</label>
                                <input type="text" name="co" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Identifikasi Kader</label>
                                <input type="text" name="identifikasi_kader" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Tinggal di Asrama</label>
                                <select name="tinggal_asrama" id="" class="form-control">
                                  <option value="Ya">Ya</option>
                                  <option value="Tidak">Tidak</option>
                                </select>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="content">
                          <div class="row">
                            <div class="col-md-12">
                              <p class="help-block">Simpan biodata terlebih dahulu.</p>
                              <span class="text-danger">*</span> Wajib diisi
                              <button type="submit" class="btn btn-info btn-fill pull-right" disabled="">Simpan</button>
                              <div class="clearfix"></div>
                            </div>

                          </div>
                        </div>
                      </div>
                    <!-- </form>  -->
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>
