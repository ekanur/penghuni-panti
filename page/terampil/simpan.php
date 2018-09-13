<?php
include('../../config/db.php');
include('../../config/app.php');
session_start();

if(!isset($_SESSION['idm'])){
	header("Location: ". $app_url); /* Redirect browser */
	exit();
}

$terampil = (object)$_POST;



$sql = "insert into terampil (
nomor_identifikasi,
pelatihan_keterampilan,
bantuan_finance,
hasil_monitoring_pendapatan,
petugas
) values(
	'".$terampil->nomor_identifikasi."',
	'".$terampil->pelatihan_keterampilan."',
	'".$terampil->bantuan_finance."',
	'".$terampil->hasil_monitoring_pendapatan."',
	'".$terampil->petugas."'
	)";

// $query = mysqli_query($conx, $sql) or die(mysqli_error());

if (!mysqli_query($conx, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conx);
    exit();
}

mysqli_close($conx);
header("Location:".$app_url."/?act=terampil");
exit();

?>
