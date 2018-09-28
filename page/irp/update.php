<?php
include('../../config/db.php');
include('../../config/app.php');
session_start();

if(!isset($_SESSION['idm'])){
	header("Location: ". $app_url); /* Redirect browser */
	exit();
}

$irp = (object)$_POST;



$sql = "update irp set
nomor_identifikasi = '".$irp->nomor_identifikasi."',
buat_irp = '".$irp->buat_irp."',
alasan_tidak_buat = '".$irp->alasan_tidak_buat."',
pelatihan_ortu = '".$irp->pelatihan_ortu."',
dibuat_oleh = '".$irp->dibuat_oleh."'
where id = $irp->id_irp
	";

// $query = mysqli_query($conx, $sql) or die(mysqli_error());

if (!mysqli_query($conx, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conx);
    exit();
}

mysqli_close($conx);
header("Location:".$app_url."/?act=irp");
exit();

?>
