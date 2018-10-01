<?php 
include('../../config/db.php');
include('../../config/app.php');
session_start();

if(!isset($_SESSION['idm'])){
	header("Location: ". $app_url); /* Redirect browser */
	exit();
}

$asessmen = (object)$_POST;

// var_dump($asessmen);exit();

$tunanetra = json_encode(array("jenis"=>$asessmen->tunanetra_jenis, "tanggal"=>$asessmen->tunanetra_tanggal, "tempat"=>$asessmen->tunanetra_tempat));
$tunarungu = json_encode(array("jenis"=>$asessmen->tunarungu_jenis, "tanggal"=>$asessmen->tunarungu_tanggal, "tempat"=>$asessmen->tunarungu_tempat));
$tunagrahita = json_encode(array("jenis"=>$asessmen->tunagrahita_jenis, "tanggal"=>$asessmen->tunagrahita_tanggal, "tempat"=>$asessmen->tunagrahita_tempat));
$tunadaksa = json_encode(array("jenis"=>$asessmen->tunadaksa_jenis, "tanggal"=>$asessmen->tunadaksa_tanggal, "tempat"=>$asessmen->tunadaksa_tempat, "lain"=>$asessmen->tunadaksa_lain));
$perilaku = json_encode(array("jenis"=>$asessmen->perilaku_jenis, "tanggal"=>$asessmen->perilaku_tanggal, "tempat"=>$asessmen->perilaku_tempat, "lain"=>$asessmen->perilaku_lain));
$epilepsi = json_encode(array("jenis"=>$asessmen->epilepsi_jenis, "tanggal"=>$asessmen->epilepsi_tanggal, "tempat"=>$asessmen->epilepsi_tempat));

$count_asessmen = countAsessmen($conx, $asessmen->biodata_id);

// var_dump($count_asessmen);exit();

if(0==$count_asessmen){
	insertAsessmen($conx, $asessmen, $tunanetra, $tunarungu, $tunagrahita, $tunadaksa, $perilaku, $epilepsi);
	// echo "insert";exit();
}else{
	updateAsessmen($conx, $asessmen, $tunanetra, $tunarungu, $tunagrahita, $tunadaksa, $perilaku, $epilepsi);
}

mysqli_close($conx);
header("Location:".$app_url."/?act=client");
exit();
?>

<?php 

function countAsessmen($conx, $biodata_id){
	$sql = "select id from asessmen where biodata_id = ".$biodata_id;

	$query = mysqli_query($conx, $sql);

	return mysqli_num_rows($query);
}

function insertAsessmen($conx, $asessmen, $tunanetra, $tunarungu, $tunagrahita, $tunadaksa, $perilaku, $epilepsi){

	$sql = "INSERT INTO asessmen (id, tunanetra, tunarungu, tunagrahita, tunadaksa, perilaku, epilepsi, disability, komunitas_difabel, co, identifikasi_kader, tinggal_asrama, biodata_id, created_at, deleted_at) VALUES (NULL, '".$tunanetra."', '".$tunarungu."', '".$tunagrahita."', '".$tunadaksa."', '".$perilaku."', '".$epilepsi."', '".$asessmen->disability."', '".$asessmen->komunitas_difabel."', '".$asessmen->co."', '".$asessmen->identifikasi_kader."', '".$asessmen->tinggal_asrama."', '".$asessmen->biodata_id."', CURRENT_TIMESTAMP, NULL);
";

// $query = mysqli_query($conx, $sql) or die(mysqli_error());

	if (!mysqli_query($conx, $sql)) {
		echo "Error: " . $sql . "<br>" . mysqli_error($conx);
		exit();
	}

	return mysqli_num_rows($conx);
}

function updateAsessmen($conx, $asessmen, $tunanetra, $tunarungu, $tunagrahita, $tunadaksa, $perilaku, $epilepsi){
	$sql = "update asessmen set tunanetra='".$tunanetra."',
	tunarungu='".$tunarungu."',
	tunagrahita='".$tunagrahita."',
	tunadaksa='".$tunadaksa."',
	perilaku='".$perilaku."',
	epilepsi='".$epilepsi."',
	disability='".$asessmen->disability."',
	komunitas_difabel='".$asessmen->komunitas_difabel."',
	co='".$asessmen->co."',
	identifikasi_kader='".$asessmen->identifikasi_kader."',
	tinggal_asrama='".$asessmen->tinggal_asrama."'
	where biodata_id='".$asessmen->biodata_id."'";

	if (!mysqli_query($conx, $sql)) {
		echo "Error: " . $sql . "<br>" . mysqli_error($conx);
		exit();
	}

	return mysqli_num_rows($conx);
}

?>