<?php 
include('../../config/db.php');
include('../../config/app.php');
session_start();

if(!isset($_SESSION['idm'])){
header("Location: ". $app_url); /* Redirect browser */
exit();
}

$biodata = (object)$_POST;



$sql = "update biodata set 
deleted_at = '".date("Y-m-d")."'
where id = $biodata->id";

// $query = mysqli_query($conx, $sql) or die(mysqli_error());

if (!mysqli_query($conx, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conx);
}

$sql = "update asessmen set 
deleted_at = '".date("Y-m-d")."'
where biodata_id = $biodata->id";

if (!mysqli_query($conx, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conx);
}

mysqli_close($conx);
header("Location:".$app_url);
exit();
 ?>