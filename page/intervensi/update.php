<?php 
include('../../config/db.php');
include('../../config/app.php');
session_start();

if(!isset($_SESSION['idm'])){
header("Location: ". $app_url); /* Redirect browser */
exit();
}

$alat_bantu = (object)$_POST;

$sql = "update alat_bantu set 
nomor_identifikasi = '".$alat_bantu->nomor_identifikasi."', 
alat_bantu = '".$alat_bantu->alat_bantu."',
alat_bantu_diperbaiki = '".$alat_bantu->alat_bantu_diperbaiki."',
tanggal_diresepkan = '".$alat_bantu->tgl_diresepkan."',
jadwal_monitoring = '".$alat_bantu->jadwal_monitoring."',
mendapat_alat_bantu = '".$alat_bantu->mendapat_alat_bantu."',
tanggal_dapat_alat_bantu = '".$alat_bantu->tanggal_dapat_alat_bantu."',
pembayaran_alat_bantu = '".$alat_bantu->pembayaran_alat_bantu."',
asal_alat_bantu = '".$alat_bantu->asal_alat_bantu."',
cara_pemberian_alat_bantu = '".$alat_bantu->cara_pemberian_alat_bantu."',
tanggal_pemberian_alat = '".$alat_bantu->tanggal_pemberian_alat."',
keterangan_monitoring = '".$alat_bantu->keterangan_monitoring."',
durasi_penggunaan_alat_bantu = '".$alat_bantu->durasi_penggunaan_alat."',
alasan_tidak_menggunakan = '".$alat_bantu->alasan_tidak_menggunakan."',
alasan_lain = '".$alat_bantu->alasan_lain."',
cara_monitoring = '".$alat_bantu->cara_monitoring."',
tanggal_monitoring = '".$alat_bantu->tanggal_monitoring."',
petugas = '".$alat_bantu->petugas."'
where id = $alat_bantu->id";

// $query = mysqli_query($conx, $sql) or die(mysqli_error());

if (!mysqli_query($conx, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conx);
    exit();
}

// $last_id = mysqli_insert_id($conx);

mysqli_close($conx);
header("Location:".$app_url."/?act=alat-bantu");
exit();
 ?>