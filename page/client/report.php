<?php
session_start();

include('../../config/db.php');
include('../../config/app.php'); 
include '../../plugin/phpspreadsheet/export.php';

$sql = "select * from biodata where deleted_at is null";

$query = mysqli_query($conx, $sql) or die(mysqli_error($conx));

$biodata = array();

while($data = mysqli_fetch_object($query)){
	$biodata[] = $data;
}

foreach ($biodata as $data_client) {
	$data_client->hp1 = json_decode($data_client->hp1);
	$data_client->hp2 = json_decode($data_client->hp2);
	$data_client->detail_pendidikan = json_decode($data_client->detail_pendidikan);
	$data_client->detail_profesi = json_decode($data_client->detail_profesi);
	$data_client->detail_ayah = json_decode($data_client->detail_ayah);
	$data_client->detail_ibu = json_decode($data_client->detail_ibu);
	$data_client->detail_wali = json_decode($data_client->detail_wali);
}

// echo "<pre>";
// var_dump($biodata);exit();

export("client", $biodata);
 ?>