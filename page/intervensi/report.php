<?php
session_start();

include('../../config/db.php');
include('../../config/app.php'); 
include '../../plugin/phpspreadsheet/export.php';

$sql = "select intervensi.id, biodata.nama, intervensi.`nomor_identifikasi`, intervensi.`subjek_intervensi`, intervensi.`jenis_intervensi`, intervensi.`jenis_rujukan`, intervensi.`keterangan`, intervensi.`cara`, intervensi.`tanggal`, intervensi.`tanggal_follow_up`, intervensi.`rencana_monitoring`, intervensi.`hasil_monitoring_fasilitas1`, intervensi.`cara_fasilitas1`, intervensi.`tanggal_fasilitas1`, intervensi.`hasil_monitoring_fasilitas2`, intervensi.`cara_fasilitas2`, intervensi.`tanggal_fasilitas2` from intervensi inner join biodata on intervensi.nomor_identifikasi = biodata.nomor_identifikasi where intervensi.deleted_at is NULL order by intervensi.id desc";

$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));

$intervensi = array();

while($data = mysqli_fetch_object($query)){
	$intervensi[] = $data;
}

// echo "<pre>";
// var_dump($intervensi);exit();

export("intervensi", $intervensi);
 ?>