<?php 
include('../../config/db.php');
include('../../config/app.php');
session_start();

if(!isset($_SESSION['idm'])){
	header("Location: ". $app_url); /* Redirect browser */
	exit();
}

$intervensi = (object)$_POST;



$sql = "insert into intervensi (
nomor_identifikasi, 
subjek_intervensi,
jenis_intervensi,
jenis_rujukan,
keterangan,
cara,
tanggal,
tanggal_follow_up,
rencana_monitoring,
hasil_monitoring_fasilitas1,
cara_fasilitas1,
tanggal_fasilitas1,
hasil_monitoring_fasilitas2,
cara_fasilitas2,
tanggal_fasilitas2) 
values(
	'".$intervensi->nomor_identifikasi."',
	'".$intervensi->subjek_intervensi."',
	'".$intervensi->jenis_intervensi."',
	'".$intervensi->jenis_rujukan."',
	'".$intervensi->keterangan."',
	'".$intervensi->cara."',
	'".$intervensi->tanggal."',
	'".$intervensi->tanggal_follow_up."',
	'".$intervensi->rencana_monitoring."',
	'".$intervensi->hasil_monitoring_fasilitas1."',
	'".$intervensi->cara_fasilitas1."',
	'".$intervensi->tanggal_fasilitas1."',
	'".$intervensi->hasil_monitoring_fasilitas2."',
	'".$intervensi->cara_fasilitas2."',
	'".$intervensi->tanggal_fasilitas2."'
	)";

// $query = mysqli_query($conx, $sql) or die(mysqli_error());

if (!mysqli_query($conx, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conx);
    exit();
}

mysqli_close($conx);
header("Location:".$app_url."/?act=intervensi");
exit();

?>