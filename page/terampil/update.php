<?php
include('../../config/db.php');
include('../../config/app.php');
session_start();

if(!isset($_SESSION['idm'])){
	header("Location: ". $app_url); /* Redirect browser */
	exit();
}

$terampil = (object)$_POST;



$sql = "update terampil set
nomor_identifikasi = '".$terampil->nomor_identifikasi."',
pelatihan_keterampilan = '".$terampil->pelatihan_keterampilan."',
bantuan_finance = '".$terampil->bantuan_finance."',
hasil_monitoring_pendapatan = '".$terampil->hasil_monitoring_pendapatan."',
petugas = '".$terampil->petugas."'
where id = $terampil->id
	";

// $query = mysqli_query($conx, $sql) or die(mysqli_error());

if (!mysqli_query($conx, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conx);
    exit();
}

mysqli_close($conx);
header("Location:".$app_url."/?act=terampil");
exit();

?>
