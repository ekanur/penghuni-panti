<?php 
include('../../config/db.php');
include('../../config/app.php');
session_start();

if(!isset($_SESSION['idm'])){
header("Location: ". $app_url); /* Redirect browser */
exit();
}

$intervensi = (object)$_POST;

$sql = "update intervensi set 
nomor_identifikasi = '".$intervensi->nomor_identifikasi."', 
subjek_intervensi = '".$intervensi->subjek_intervensi."',
jenis_intervensi = '".$intervensi->jenis_intervensi."',
jenis_rujukan = '".$intervensi->jenis_rujukan."',
keterangan = '".$intervensi->keterangan."',
cara = '".$intervensi->cara."',
tanggal = '".$intervensi->tanggal."',
tanggal_follow_up = '".$intervensi->tanggal_follow_up."',
rencana_monitoring = '".$intervensi->rencana_monitoring."',
hasil_monitoring_fasilitas1 = '".$intervensi->hasil_monitoring_fasilitas1."',
cara_fasilitas1 = '".$intervensi->cara_fasilitas1."',
tanggal_fasilitas1 = '".$intervensi->tanggal_fasilitas1."',
hasil_monitoring_fasilitas2 = '".$intervensi->hasil_monitoring_fasilitas2."',
cara_fasilitas2 = '".$intervensi->cara_fasilitas2."',
tanggal_fasilitas2 = '".$intervensi->tanggal_fasilitas2."'
where id = $intervensi->id";

// $query = mysqli_query($conx, $sql) or die(mysqli_error());

if (!mysqli_query($conx, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conx);
    exit();
}

// $last_id = mysqli_insert_id($conx);

mysqli_close($conx);
header("Location:".$app_url."/?act=intervensi");
exit();
 ?>