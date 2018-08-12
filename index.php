<?php
session_start();
include('config/db.php');
include('config/app.php');

	$act = '';

	if (isset($_GET['act'])) {
		$act = $_GET['act'];
	}
	if (!isset($_SESSION['idm'])) {
		include("page/default/header_login.php");
		// switch ($act) {
		// 	case 'register':
		// 		include('page/default/register.php');
		// 		break;
		// 	case 'status':
		// 		include('page/status.php');
		// 		break;
		// 	default:
				include('page/default/login.php');
		// 		break;
		// }

		include("page/default/footer_login.php");
	} else {
		include('page/default/header.php');
		$idm	= $_SESSION['idm'];
		// $nama 	= $_SESSION['nama'];
		// $nidn 	= $_SESSION['nidn'];

		switch ($act) {
			case 'logout':
				include('page/default/logout.php');
				break;
			case 'tambah':
				include('page/client/tambah.php');
				break;
			case 'asessmen':
				include('page/client/asessmen.php');
				break;
			case 'data-klien':
				include("/page/client/data_klien.php");
				break;
			case 'alat-bantu':
				include("/page/alat_bantu/index.php");
				break;

			case 'tambah-alat-bantu':
				include("/page/alat_bantu/tambah.php");
				break;
			default:
				include('page/beranda.php');
				break;
		}
		include("page/default/footer.php");
		
	}

	mysqli_close($conx);

?>
