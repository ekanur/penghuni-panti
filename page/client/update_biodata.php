<?php 
include('../../config/db.php');
include('../../config/app.php');
session_start();

if(!isset($_SESSION['idm'])){
header("Location: ". $app_url); /* Redirect browser */
exit();
}

$biodata = (object)$_POST;

$hp1 = json_encode(array("nomor"=>$biodata->hp1, "pemilik"=>$biodata->pemilik_hp1));
$hp2 = json_encode(array("nomor"=>$biodata->hp2, "pemilik"=>$biodata->pemilik_hp2));

$detail_pendidikan = json_encode(array("pendidikan"=>$biodata->pendidikan, "kelas"=>$biodata->kelas, "nama_sekolah"=>$biodata->nama_sekolah, "no_telp_sekolah"=>$biodata->no_telp_sekolah));

$detail_profesi = json_encode(array("pekerjaan"=>$biodata->pekerjaan, "alamat_kerja"=>$biodata->alamat_kerja, "telp_kerja"=>$biodata->telp_kerja, "pendidikan_kerja"=>$biodata->pendidikan_kerja, "keterampilan"=>$biodata->keterampilan, "minat"=>$biodata->minat));

$detail_ayah = json_encode(array("nama_ayah"=>$biodata->nama_ayah, "pekerjaan_ayah"=>$biodata->pekerjaan_ayah, "pendidikan_ayah"=>$biodata->pendidikan_ayah));

$detail_ibu = json_encode(array("nama_ibu"=>$biodata->nama_ibu, "pekerjaan_ibu"=>$biodata->pekerjaan_ibu, "pendidikan_ibu"=>$biodata->pendidikan_ibu));

$detail_wali = json_encode(array("nama_wali"=>$biodata->nama_wali, "pekerjaan_wali"=>$biodata->pekerjaan_wali, "pendidikan_wali"=>$biodata->pendidikan_wali));

$sql = "update biodata set 
nomor_identifikasi = '".$biodata->nomor_identifikasi."', 
id_klien_lv = '".$biodata->klien_lv."',
nama = '".$biodata->nama."',
jenis_kelamin = '".$biodata->jenis_kelamin."',
akta_kelahiran = '".$biodata->akta."',
ktp = '".$biodata->ktp."',
no_kk = '".$biodata->no_kk."',
nik = '".$biodata->nik."',
alamat = '".$biodata->alamat."',
rt = '".$biodata->rt."',
rw = '".$biodata->rw."',
kota = '".$biodata->kota."',
kec = '".$biodata->kecamatan."',
kelurahan = '".$biodata->kelurahan."',
telp_rumah = '".$biodata->telp_rumah."',
hp1 = '".$hp1."',
hp2 = '".$hp2."',
asuransi_kesehatan = '".$biodata->asuransi."',
sumber_informasi = '".$biodata->sumber_informasi."',
sponsor = '".$biodata->sponsor."',
detail_pendidikan = '".$detail_pendidikan."',
detail_profesi = '".$detail_profesi."',
detail_ayah = '".$detail_ayah."',
detail_ibu = '".$detail_ibu."',
detail_wali = '".$detail_wali."' 
where id = $biodata->id";

// $query = mysqli_query($conx, $sql) or die(mysqli_error());

if (!mysqli_query($conx, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conx);
}

// $last_id = mysqli_insert_id($conx);

mysqli_close($conx);
header("Location:".$app_url."/?act=asessmen&id=".$biodata->id);
exit();
 ?>