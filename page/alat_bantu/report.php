<?php
session_start();

include('../../config/db.php');
include('../../config/app.php'); 
include '../../plugin/phpspreadsheet/export.php';

$sql = "select alat_bantu.id, biodata.nama,  alat_bantu.`nomor_identifikasi`, alat_bantu.`alat_bantu`, alat_bantu.`alat_bantu_diperbaiki`, alat_bantu.`tanggal_diresepkan`, alat_bantu.`jadwal_monitoring`, alat_bantu.`mendapat_alat_bantu`, alat_bantu.`tanggal_dapat_alat_bantu`, alat_bantu.`pembayaran_alat_bantu`, alat_bantu.`asal_alat_bantu`, alat_bantu.`cara_pemberian_alat_bantu`, alat_bantu.`tanggal_pemberian_alat`, alat_bantu.`keterangan_monitoring`, alat_bantu.`durasi_penggunaan_alat_bantu`, alat_bantu.`alasan_tidak_menggunakan`, alat_bantu.`alasan_lain`, alat_bantu.`cara_monitoring`, alat_bantu.`tanggal_monitoring`, alat_bantu.`petugas` from alat_bantu inner join biodata on alat_bantu.nomor_identifikasi = biodata.nomor_identifikasi where alat_bantu.deleted_at is NULL order by alat_bantu.id desc";

$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));

$alat_bantu = array();

while($data = mysqli_fetch_object($query)){
	$alat_bantu[] = $data;
}

// echo "<pre>";
// var_dump($alat_bantu);exit();

export("alat_bantu", $alat_bantu);
 ?>