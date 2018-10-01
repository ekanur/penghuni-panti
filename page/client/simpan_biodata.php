<?php 
include('../../config/db.php');
include('../../config/app.php');
session_start();

if(!isset($_SESSION['idm'])){
header("Location: ". $app_url); /* Redirect browser */
exit();
}

// var_dump(uploadFile("kk", $_FILES["kk"])." |  ".uploadFile("ktp", $_FILES["ktp"]));exit();

$biodata = (object)$_POST;

$hp1 = json_encode(array("nomor"=>$biodata->hp1, "pemilik"=>$biodata->pemilik_hp1));
$hp2 = json_encode(array("nomor"=>$biodata->hp2, "pemilik"=>$biodata->pemilik_hp2));

$detail_pendidikan = json_encode(array("pendidikan"=>$biodata->pendidikan, "kelas"=>$biodata->kelas, "nama_sekolah"=>$biodata->nama_sekolah, "no_telp_sekolah"=>$biodata->no_telp_sekolah));

$detail_profesi = json_encode(array("pekerjaan"=>$biodata->pekerjaan, "alamat_kerja"=>$biodata->alamat_kerja, "telp_kerja"=>$biodata->telp_kerja, "pendidikan_kerja"=>$biodata->pendidikan_kerja, "keterampilan"=>$biodata->keterampilan, "minat"=>$biodata->minat));

$detail_ayah = json_encode(array("nama_ayah"=>$biodata->nama_ayah, "pekerjaan_ayah"=>$biodata->pekerjaan_ayah, "pendidikan_ayah"=>$biodata->pendidikan_ayah));

$detail_ibu = json_encode(array("nama_ibu"=>$biodata->nama_ibu, "pekerjaan_ibu"=>$biodata->pekerjaan_ibu, "pendidikan_ibu"=>$biodata->pendidikan_ibu));

$detail_wali = json_encode(array("nama_wali"=>$biodata->nama_wali, "pekerjaan_wali"=>$biodata->pekerjaan_wali, "pendidikan_wali"=>$biodata->pendidikan_wali));

$sql = "insert into biodata (
nomor_identifikasi, 
id_klien_lv,
nama,
jenis_kelamin,
akta_kelahiran,
ktp,
no_kk,
nik,
alamat,
rt,
rw,
kota,
kec,
kelurahan,
telp_rumah,
hp1,
hp2,
asuransi_kesehatan,
sumber_informasi,
sponsor,
detail_pendidikan,
detail_profesi,
detail_ayah,
detail_ibu,
detail_wali,
file_kk,
file_ktp) values(
	'".$biodata->nomor_identifikasi."',
	'".$biodata->klien_lv."',
	'".$biodata->nama."',
	'".$biodata->jenis_kelamin."',
	'".$biodata->akta."',
	'".$biodata->ktp."',
	'".$biodata->no_kk."',
	'".$biodata->nik."',
	'".$biodata->alamat."',
	'".$biodata->rt."',
	'".$biodata->rw."',
	'".$biodata->kota."',
	'".$biodata->kecamatan."',
	'".$biodata->kelurahan."',
	'".$biodata->telp_rumah."',
	'".$hp1."',
	'".$hp2."',
	'".$biodata->asuransi."',
	'".$biodata->sumber_informasi."',
	'".$biodata->sponsor."',
	'".$detail_pendidikan."',
	'".$detail_profesi."',
	'".$detail_ayah."',
	'".$detail_ibu."',
	'".$detail_wali."',
	'".uploadFile("kk", $_FILES["kk"])."',
	'".uploadFile("ktp", $_FILES["ktp"])."'
	)";

// $query = mysqli_query($conx, $sql) or die(mysqli_error());

if (!mysqli_query($conx, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conx);
}

$last_id = mysqli_insert_id($conx);

mysqli_close($conx);
header("Location:".$app_url."/?act=asessmen&id=".$last_id."#tab_berkas");
exit();
 ?>

 <?php 
function uploadFile($jenis_file, $file){
	$target_dir = __DIR__."/../../uploads/".$jenis_file."/";
	$file_type = getFileType($file["type"]);
	if (is_null($file_type)) {
		return null;
	}
	$nama_file = md5($file["name"].uniqid(rand())).$file_type;
	$tmp_file = $file["tmp_name"];
	$proses_upload = move_uploaded_file($tmp_file, $target_dir.$nama_file);

	if ($proses_upload) {
		return $nama_file;
	}else{
		return null;
	}

}

function getFileType($file_type){
	$type = null;
	switch ($file_type) {
		case 'image/jpeg':
			$type = ".jpeg";
			break;
		case 'image/jpg':
			$type = ".jpg";
			break;
		case 'image/png':
			$type = ".png";
			break;
		
		default:
			$type = null;
			break;
	}

	return $type;
}



  ?>
