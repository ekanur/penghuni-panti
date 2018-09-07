<?php
session_start();

include('../../config/db.php');
include('../../config/app.php'); 
include '../../plugin/phpspreadsheet/export.php';

$sql = "select `id`, `nomor_identifikasi`, `id_klien_lv`, `nama`, `jenis_kelamin`, `akta_kelahiran`, `ktp`, `no_kk`, `nik`, `alamat`, `rt`, `rw`, `kota`, `kec`, `kelurahan`, `telp_rumah`, `hp1`, `hp2`, `asuransi_kesehatan`, `sumber_informasi`, `sponsor`, `detail_pendidikan`, `detail_profesi`, `detail_ayah`, `detail_ibu`, `detail_wali` from biodata where deleted_at is null";

$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));

$biodata = array();

while($data = mysqli_fetch_object($query)){
	$biodata[] = $data;
}

foreach ($biodata as $data_client) {
	$data_client->no_hp1 = json_decode($data_client->hp1)->nomor;
	$data_client->pemilik_hp1 = json_decode($data_client->hp1)->pemilik;
	$data_client->no_hp2 = json_decode($data_client->hp2)->nomor;
	$data_client->pemilik_hp2 = json_decode($data_client->hp2)->pemilik;
	$data_client->pendidikan = json_decode($data_client->detail_pendidikan)->pendidikan;
	$data_client->kelas = json_decode($data_client->detail_pendidikan)->kelas;
	$data_client->nama_sekolah = json_decode($data_client->detail_pendidikan)->nama_sekolah;
	$data_client->no_telp_sekolah = json_decode($data_client->detail_pendidikan)->no_telp_sekolah;
	$data_client->pekerjaan = json_decode($data_client->detail_profesi)->pekerjaan;
	$data_client->alamat_kerja = json_decode($data_client->detail_profesi)->alamat_kerja;
	$data_client->telp_kerja = json_decode($data_client->detail_profesi)->telp_kerja;
	$data_client->pendidikan_kerja = json_decode($data_client->detail_profesi)->pendidikan_kerja;
	$data_client->keterampilan = json_decode($data_client->detail_profesi)->keterampilan;
	$data_client->minat = json_decode($data_client->detail_profesi)->minat;
	$data_client->nama_ayah = json_decode($data_client->detail_ayah)->nama_ayah;
	$data_client->pekerjaan_ayah = json_decode($data_client->detail_ayah)->pekerjaan_ayah;
	$data_client->pendidikan_ayah = json_decode($data_client->detail_ayah)->pendidikan_ayah;
	$data_client->nama_ibu = json_decode($data_client->detail_ibu)->nama_ibu;
	$data_client->pekerjaan_ibu = json_decode($data_client->detail_ibu)->pekerjaan_ibu;
	$data_client->pendidikan_ibu = json_decode($data_client->detail_ibu)->pendidikan_ibu;
	$data_client->nama_wali = json_decode($data_client->detail_wali)->nama_wali;
	$data_client->pekerjaan_wali = json_decode($data_client->detail_wali)->pekerjaan_wali;
	$data_client->pendidikan_wali = json_decode($data_client->detail_wali)->pendidikan_wali;
unset($data_client->hp1, $data_client->hp2, $data_client->detail_pendidikan, $data_client->detail_profesi, $data_client->detail_ayah, $data_client->detail_ibu, $data_client->detail_wali);
}


// echo "<pre>";
// var_dump($biodata);exit();

export("client", $biodata);
 ?>