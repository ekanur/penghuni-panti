<?php 
include('../../config/db.php');
include('../../config/app.php');
session_start();

if(!isset($_SESSION['idm'])){
	header("Location: ". $app_url); /* Redirect browser */
	exit();
}

$alat_bantu = (object)$_POST;



$sql = "insert into alat_bantu (
nomor_identifikasi, 
alat_bantu,
alat_bantu_diperbaiki,
tanggal_diresepkan,
jadwal_monitoring,
mendapat_alat_bantu,
tanggal_dapat_alat_bantu,
pembayaran_alat_bantu,
asal_alat_bantu,
cara_pemberian_alat_bantu,
tanggal_pemberian_alat,
keterangan_monitoring,
durasi_penggunaan_alat_bantu,
alasan_tidak_menggunakan,
alasan_lain,
cara_monitoring,
tanggal_monitoring,
petugas
) values(
	'".$alat_bantu->nomor_identifikasi."',
	'".$alat_bantu->alat_bantu."',
	'".$alat_bantu->alat_bantu_diperbaiki."',
	'".$alat_bantu->tgl_diresepkan."',
	'".$alat_bantu->jadwal_monitoring."',
	'".$alat_bantu->mendapat_alat_bantu."',
	'".$alat_bantu->tanggal_dapat_alat_bantu."',
	'".$alat_bantu->pembayaran_alat_bantu."',
	'".$alat_bantu->asal_alat_bantu."',
	'".$alat_bantu->cara_pemberian_alat_bantu."',
	'".$alat_bantu->tanggal_pemberian_alat."',
	'".$alat_bantu->keterangan_monitoring."',
	'".$alat_bantu->durasi_penggunaan_alat_bantu."',
	'".$alat_bantu->alasan_tidak_menggunakan."',
	'".$alat_bantu->alasan_lain."',
	'".$alat_bantu->cara_monitoring."',
	'".$alat_bantu->tanggal_monitoring."',
	'".$alat_bantu->petugas."'
	)";

// $query = mysqli_query($conx, $sql) or die(mysqli_error());

if (!mysqli_query($conx, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conx);
    exit();
}

mysqli_close($conx);
header("Location:".$app_url."/?act=alat-bantu");
exit();

?>