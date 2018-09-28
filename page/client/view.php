<?php
// include('../../config/db.php');
// include('../../config/app.php');

$id = $_GET['id'];

$sql = "select * from biodata where biodata.id = ".$id." ".$is_admin_kecamatan." and deleted_at is null";

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

        <div class="tab-content">

            <div class="card">
              <div class="content">
                <div class="row">
                  <div class="col-md-12">
                      <div class="header"><h5 class="text-danger">Biodata Klien</h5></div>
                      <table class="table">
                          <tr><td>Nama Indentifikasi / ID Klien LV</td><td>: <b><?php echo $biodata->nomor_identifikasi ?> | <?php echo $biodata->id_klien_lv ?></b></td></tr>
                          <tr><td>Nama Lengkap</td><td>: <?php echo $biodata->nama ?></td></tr>
                          <tr><td>Jenis Kelamin</td><td>: <?php echo $biodata->jenis_kelamin ?></td></tr>
                          <tr><td>Alamat</td><td>: <?php echo $biodata->alamat ?> <?php echo $biodata->rt ?> <?php echo $biodata->rw ?> <?php echo $biodata->kelurahan ?> <?php echo $biodata->kec ?> <?php echo $biodata->kota ?></td></tr>
                          <tr><td>Telp Rumah</td><td>: <?php echo $biodata->telp_rumah ?></td></tr>
                          <tr><td>No. HP</td><td>: <?php echo $hp1->nomor ?> a/n <?php echo $hp1->pemilik ?> <br /> &nbsp;&nbsp;<?php echo $hp2->nomor ?> a/n <?php echo $hp2->pemilik ?></td></tr>
                      </table>

                      <table class="table">
                        <tr>
                          <td><b>No.KK</b></td>
                          <td><b>No.KTP</b></td>
                          <td><b>Arsip KTP</b></td>
                          <td><b>Arsip Akta Kelahiran</b></td>
                          <td><b>Asuransi Kesehatan</b></td>
                          <td><b>Sumber Informasi</b></td>
                          <td><b>Sponsor</b></td>
                        </tr>
                        <tr>
                          <td><?php echo $biodata->no_kk ?></td>
                          <td><?php echo $biodata->nik ?></td>
                          <td><?php echo $biodata->ktp ?></td>
                          <td><?php echo $biodata->akta_kelahiran ?></td>
                          <td><?php echo $biodata->asuransi_kesehatan ?></td>
                          <td><?php echo $biodata->sumber_informasi ?></td>
                          <td><?php echo $biodata->sponsor ?></td>
                        </tr>
                      </table>

                      <div class="header"><h5 class="text-danger">Pendidikan</h5></div>
                      <table class="table">
                        <tr>
                          <td>Nama Sekolah</td>
                          <td>No. Telp Sekolah</td>
                          <td>Pendidikan</td>
                          <td>Kelas</td>
                        </tr>
                        <tr>
                          <td><?php echo $detail_pendidikan->nama_sekolah ?></td>
                          <td><?php echo $detail_pendidikan->no_telp_sekolah ?></td>
                          <td>
                            <?php if($detail_pendidikan->pendidikan=='paud_tk'){echo "PAUD/TK";} ?>
                            <?php if($detail_pendidikan->pendidikan=='umum'){echo "Sekolah Umum / inklusif";} ?>
                            <?php if($detail_pendidikan->pendidikan=='slb'){echo "SLB";} ?>
                            <?php if($detail_pendidikan->pendidikan=='pt'){echo "Perguruan Tinggi";} ?>
                            <?php if($detail_pendidikan->pendidikan=='non_formal'){echo "Non Formal";} ?>
                            <?php if($detail_pendidikan->pendidikan=='belum_sekolah'){echo "Belum Sekolah";} ?>
                            <?php if($detail_pendidikan->pendidikan=='putus_sekolah'){echo "Putus Sekolah";} ?>
                            <?php if($detail_pendidikan->pendidikan=='tidak_sekolah'){echo "Tidak Sekolah";} ?>
                          </td>
                          <td><?php echo $detail_pendidikan->kelas ?></td>
                        </tr>
                      </table>

                      <div class="header"><h5 class="text-danger">Pekerjaan</h5></div>
                      <table class="table">
                        <tr>
                          <td>Pekerjaan/Profesi</td>
                          <td>Alamat Kerja</td>
                          <td>No. Telp Kantor</td>
                          <td>Pendidikan</td>
                          <td>Keterampilan</td>
                          <td>Minat</td>
                        </tr>
                        <tr>
                          <td><?php echo $detail_profesi->pekerjaan ?></td>
                          <td><?php echo $detail_profesi->alamat_kerja ?></td>
                          <td><?php echo $detail_profesi->telp_kerja ?></td>
                          <td>
                            <?php if($detail_profesi->pendidikan_kerja == 'sd'){echo "SD/Sederajat";} ?>
                            <?php if($detail_profesi->pendidikan_kerja == 'smp'){echo "SMP/Sederajat";} ?>
                            <?php if($detail_profesi->pendidikan_kerja == 'sma'){echo "SMA/Sederajat";} ?>
                            <?php if($detail_profesi->pendidikan_kerja == 'diploma'){echo "Diploma";} ?>
                            <?php if($detail_profesi->pendidikan_kerja == 'S1'){echo "S1";} ?>
                            <?php if($detail_profesi->pendidikan_kerja == 'S2'){echo "S2";} ?>
                            <?php if($detail_profesi->pendidikan_kerja == 'S3'){echo "S3";} ?>
                            <?php if($detail_profesi->pendidikan_kerja == 'non_formal'){echo "Non Formal";} ?>
                            <?php if($detail_profesi->pendidikan_kerja == 'tidak_sekolah'){echo "Tidak Sekolah";} ?>
                          </td>
                          <td><?php echo $detail_profesi->Keterampilan ?></td>
                          <td><?php echo $detail_profesi->minat ?></td>
                        </tr>
                      </table>

                      <div class="header"><h5 class="text-danger">Orang Tua & Wali</h5></div>
                      <table class="table">
                        <tr>
                          <td>Nama Ayah</td>
                          <td>Pendidikan / Pekerjaan Ayah</td>
                          <td>Nama Ibu</td>
                          <td>Pekerjaan Ibu</td>
                          <td>Nama Wali</td>
                          <td>Pendidikan / Pekerjaan Wali</td>
                        </tr>
                        <tr>
                          <td><?php echo $detail_ayah->nama_ayah ?></td>
                          <td>
                            <?php if($detail_ayah->pendidikan_ayah == 'sd'){echo "SD/Sederajat";} ?>
                            <?php if($detail_ayah->pendidikan_ayah == 'smp'){echo "SMP/Sederajat";} ?>
                            <?php if($detail_ayah->pendidikan_ayah == 'sma'){echo "SMA/Sederajat";} ?>
                            <?php if($detail_ayah->pendidikan_ayah == 'diploma'){echo "Diploma";} ?>
                            <?php if($detail_ayah->pendidikan_ayah == 's1'){echo "S1";} ?>
                            <?php if($detail_ayah->pendidikan_ayah == 's2_s3'){echo "S2/S3";} ?>
                            <?php if($detail_ayah->pendidikan_ayah == 'non_formal'){echo "Non Formal";} ?>
                            <?php if($detail_ayah->pendidikan_ayah == 'tidak_sekolah'){echo "Tidak Sekolah";} ?>
                            <?php echo ' | '.$detail_ayah->pekerjaan_ayah ?>
                          </td>
                          <td><?php echo $detail_ibu->nama_ibu ?></td>
                          <td>
                            <?php if($detail_ibu->pendidikan_ibu == 'sd'){echo "SD/Sederajat";} ?>
                            <?php if($detail_ibu->pendidikan_ibu == 'smp'){echo "SMP/Sederajat";} ?>
                            <?php if($detail_ibu->pendidikan_ibu == 'sma'){echo "SMA/Sederajat";} ?>
                            <?php if($detail_ibu->pendidikan_ibu == 'diploma'){echo "Diploma";} ?>
                            <?php if($detail_ibu->pendidikan_ibu == 's1'){echo "S1";} ?>
                            <?php if($detail_ibu->pendidikan_ibu == 's2_s3'){echo "S2/S3";} ?>
                            <?php if($detail_ibu->pendidikan_ibu == 'non_formal'){echo "Non Formal";} ?>
                            <?php if($detail_ibu->pendidikan_ibu == 'tidak_sekolah'){echo "Tidak Sekolah";} ?>
                            <?php echo $detail_ibu->pekerjaan_ibu ?>
                          </td>
                          <td><?php echo $detail_wali->nama_wali ?></td>
                          <td>
                            <?php if($detail_wali->pendidikan_wali == 'sd'){echo "SD/Sederajat";} ?>
                            <?php if($detail_wali->pendidikan_wali == 'smp'){echo "SMP/Sederajat";} ?>
                            <?php if($detail_wali->pendidikan_wali == 'sma'){echo "SMA/Sederajat";} ?>
                            <?php if($detail_wali->pendidikan_wali == 'diploma'){echo "Diploma";} ?>
                            <?php if($detail_wali->pendidikan_wali == 's1'){echo "S1";} ?>
                            <?php if($detail_wali->pendidikan_wali == 's2_s3'){echo "S2/S3";} ?>
                            <?php if($detail_wali->pendidikan_wali == 'non_formal'){echo "Non Formal";} ?>
                            <?php if($detail_wali->pendidikan_wali == 'tidak_sekolah'){echo "Tidak Sekolah";} ?>
                            <?php echo ' | '.$detail_wali->pekerjaan_wali ?>
                          </td>
                        </tr>
                      </table>
                  </div>
                </div>

            </div>
          </div>

            <div class="content">
                <div class="card">
                    <?php
                    $sql = "select * from asessmen where biodata_id=".$biodata->id." and deleted_at is null";

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

                  <div class="row">
                    <div class="col-md-6">
                      <div class="header"><h5 class="text-danger">Tunanetra-low vision</h5></div>
                      <table class="table">
                        <tr>
                            <td>Jenis</td>
                            <td>Tanggal</td>
                            <td>Tempat</td>
                        </tr>
                        <tr>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($tunanetra->jenis == 'normal'){ echo "Normal"; }} ?>
                              <?php if(sizeof($asessmen)>0){if($tunanetra->jenis == 'low_vision'){ echo "Low Vision"; }} ?>
                              <?php if(sizeof($asessmen)>0){if($tunanetra->jenis == 'blind'){ echo "Blind"; }} ?>
                            </td>
                            <td>
                              <?php if(sizeof($asessmen)>0){echo $tunanetra->tanggal;} ?></td>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($tunanetra->tempat=="outreach"){echo "Outreach";}} ?>
                              <?php if(sizeof($asessmen)>0){if($tunanetra->tempat=="at_base"){echo "At Base";}} ?>
                            </td>
                        </tr>
                      </table>
                    </div>

                    <div class="col-md-6">
                      <div class="header"><h5 class="text-danger">Tunarungu Wicara</h5></div>
                      <table class="table">
                        <tr>
                            <td>Jenis</td>
                            <td>Tanggal</td>
                            <td>Tempat</td>
                        </tr>
                        <tr>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($tunarungu->jenis == 'normal'){ echo "Normal";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunarungu->jenis == 'tuna_rungu_wicara'){ echo "Tuna Rungu Wicara";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunarungu->jenis == 'tuna_rungu'){ echo "Tuna Rungu";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunarungu->jenis == 'gangguan_bicara'){ echo "Gangguan Bicara";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunarungu->jenis == 'lambat_bicara'){ echo "Lambat Bicara";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunarungu->jenis == 'hambatan_bicara'){ echo "Hambatan Bicara";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunanetra->jenis == 'gangguan_bicara'){ echo "Gangguan Bicara";} } ?>
                            </td>
                            <td>
                              <?php if(sizeof($asessmen)>0){ echo $tunarungu->tanggal ;}?></td>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($tunarungu->tempat=="outreach"){echo "Outreach";}} ?>
                              <?php if(sizeof($asessmen)>0){if($tunarungu->tempat=="at_base"){echo "At Base";}} ?>
                            </td>
                        </tr>
                      </table>
                    </div>

                    <div class="col-md-6">
                      <div class="header"><h5 class="text-danger">Tuna Grahita</h5></div>
                      <table class="table">
                        <tr>
                            <td>Jenis</td>
                            <td>Tanggal</td>
                            <td>Tempat</td>
                        </tr>
                        <tr>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($tunagrahita->jenis == 'normal'){ echo "Normal";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunagrahita->jenis == 'lambat_belajar'){ echo "Lambat Belajar";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunagrahita->jenis == 'ringan'){ echo "Ringan";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunagrahita->jenis == 'sedang'){ echo "Sedang";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunagrahita->jenis == 'berat'){ echo "Berat";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunagrahita->jenis == 'tunagrahita'){ echo "Tuna Grahita";} } ?>
                            </td>
                            <td>
                              <?php if(sizeof($asessmen)>0){ echo $tunagrahita->tanggal ;}?></td>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($tunagrahita->tempat=="outreach"){echo "Outreach";}} ?>
                              <?php if(sizeof($asessmen)>0){if($tunagrahita->tempat=="at_base"){echo "At Base";}} ?>
                            </td>
                        </tr>
                      </table>
                    </div>

                    <div class="col-md-6">
                      <div class="header"><h5 class="text-danger">Tuna Daksa</h5></div>
                      <table class="table">
                        <tr>
                            <td>Jenis</td>
                            <td>Tanggal</td>
                            <td>Tempat</td>
                        </tr>
                        <tr>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'normal'){ echo "Normal";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'amputasi'){ echo "Amputasi";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'norma'){ echo "CP ataxia";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CP ataxia'){ echo "CP athetoid";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CP campuran'){ echo "CP campuran";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CP flopi'){ echo "CP flopi";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CP spastik diplegia'){ echo "CP spastik diplegia";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CP spastik hemiplegia'){ echo "CP spastik hemiplegia";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CP spastik quadriplegia'){ echo "CP spastik quadriplegia";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'CTEV'){ echo "CTEV";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Distrofi otot'){ echo "Distrofi otot";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Kaki O'){ echo "Kaki O";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Kaki X'){ echo "Kaki X";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Osteogenetik imperfekta'){ echo "Osteogenetik imperfekta";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Polio'){ echo "Polio";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Stroke'){ echo "Stroke";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'TBC sumsum tulang belakang'){ echo "TBC sumsum tulang belakang";} } ?>
                              <?php if(sizeof($asessmen)>0){if($tunadaksa->jenis == 'Lainnya'){ echo "Lainnya";} } ?>
                            </td>
                            <td>
                              <?php if(sizeof($asessmen)>0){ echo $tunagrahita->tanggal ;}?></td>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($tunagrahita->tempat=="outreach"){echo "Outreach";}} ?>
                              <?php if(sizeof($asessmen)>0){if($tunagrahita->tempat=="at_base"){echo "At Base";}} ?>
                            </td>
                        </tr>
                      </table>
                    </div>

                    <div class="col-md-12">
                      <div class="header"><h5 class="text-danger">Perilaku</h5></div>
                      <table class="table">
                        <tr>
                            <td>Jenis</td>
                            <td>Lain-lain (ODGJ, depresi, dll)</td>
                            <td>Tanggal</td>
                            <td>Tempat</td>
                        </tr>
                        <tr>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "ADHD"){echo "ADHD";}} ?>
                              <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "ADD"){echo "ADD";}} ?>
                              <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "Automutilasi"){echo "Automutilasi";}} ?>
                              <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "Agresif"){echo "Agresif";}} ?>
                              <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "Autis kanner"){echo "Autis kanner";}} ?>
                              <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "Autis asperger"){echo "Autis asperger";}} ?>
                              <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "PDDNOS"){echo "PDDNOS";}} ?>
                              <?php if(sizeof($asessmen)>0){if($perilaku->jenis == "Lain-lain"){echo "Lain-lain";}} ?>
                            </td>
                            <td><?php if(sizeof($asessmen)>0){ echo $perilaku->lain ;}?></td>
                            <td><?php if(sizeof($asessmen)>0){ echo $perilaku->tanggal ;}?></td>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($perilaku->tempat=="outreach"){echo "Outreach";}} ?>
                              <?php if(sizeof($asessmen)>0){if($perilaku->tempat=="at_base"){echo "At Base";}} ?>
                            </td>
                        </tr>
                      </table>
                    </div>

                    <div class="col-md-12">
                      <div class="header"><h5 class="text-danger">Epilepsi</h5></div>
                      <table class="table">
                        <tr>
                            <td>Jenis</td>
                            <td>Tanggal</td>
                            <td>Tempat</td>
                            <td>Type of impairment or disability</td>
                            <td>Komunitas Difabel</td>
                            <td>CO</td>
                            <td>Identifikasi Kader</td>
                            <td>Tinggal di Asrama</td>
                        </tr>
                        <tr>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($epilepsi->jenis == 'Belum ditangani'){ echo "Belum ditangani";} } ?>
                              <?php if(sizeof($asessmen)>0){if($epilepsi->jenis == 'Pengobatan'){ echo "Pengobatan";} } ?>
                              <?php if(sizeof($asessmen)>0){if($epilepsi->jenis == 'Putus obat'){ echo "Putus obat";} } ?>
                            </td>
                            <td><?php if(sizeof($asessmen)>0){ echo $epilepsi->tanggal ;}?></td>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($epilepsi->tempat=="outreach"){echo "Outreach";}} ?>
                              <?php if(sizeof($asessmen)>0){if($epilepsi->tempat=="at_base"){echo "At Base";}} ?>
                            </td>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Bukan PwD'){ echo "Bukan PwD";} } ?>
                              <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Visual impairment'){ echo "Visual impairment";} } ?>
                              <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Hearing impairment'){ echo "Hearing impairment";} } ?>
                              <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Speech/communication impairment'){ echo "Speech/communication impairment";} } ?>
                              <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Physical impairment'){ echo "Physical impairment";} } ?>
                              <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Deafblindness'){ echo "Deafblindness";} } ?>
                              <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Cerebral palsy'){ echo "Cerebral palsy";} } ?>
                              <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Epilepsy'){ echo "Epilepsy";} } ?>
                              <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Intellectual / learning disabilities & developmental disorders / autism"'){ echo "Intellectual / learning disabilities & developmental disorders / autism";} } ?>
                              <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Psycho-social disabilities'){ echo "Psycho-social disabilities";} } ?>
                              <?php if(sizeof($asessmen)>0){if($asessmen->disability == 'Multiple disabilities'){ echo "Multiple disabilities";} } ?>
                            </td>
                            <td><?php if(sizeof($asessmen)>0){ echo $asessmen->komunitas_difabel ;}?></td>
                            <td><?php if(sizeof($asessmen)>0){ echo $asessmen->co ;}?></td>
                            <td><?php if(sizeof($asessmen)>0){ echo $asessmen->identifikasi_kader ;}?></td>
                            <td>
                              <?php if(sizeof($asessmen)>0){if($asessmen->tinggal_asrama=="tidak"){echo "Tidak";}} ?>
                              <?php if(sizeof($asessmen)>0){if($asessmen->tinggal_asrama=="ya"){echo "Ya";}} ?>
                            </td>
                        </tr>
                      </table>
                    </div>

                  </div>
                  </div>



                        <div class="content">
                          <div class="row">
                            <div class="col-md-12">
                              <a href="?act=client"><button type="submit" class="btn btn-info btn-fill pull-right" >Kembali</button></a>
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
