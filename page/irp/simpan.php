<?php
include('../../config/db.php');
include('../../config/app.php');
session_start();

if(!isset($_SESSION['idm'])){
	header("Location: ". $app_url); /* Redirect browser */
	exit();
}

$irp = (object)$_POST;



$sql = "insert into irp (
nomor_identifikasi,
buat_irp,
alasan_tidak_buat,
pelatihan_ortu,
dibuat_oleh
) values(
	'".$irp->nomor_identifikasi."',
	'".$irp->buat_irp."',
	'".$irp->alasan_tidak_buat."',
	'".$irp->pelatihan_ortu."',
	'".$irp->petugas."'
	)";

// $query = mysqli_query($conx, $sql) or die(mysqli_error());

if (!mysqli_query($conx, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conx);
    exit();
}

mysqli_close($conx);
header("Location:".$app_url."/?act=irp");
exit();

?>
