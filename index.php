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
		$is_admin_kecamatan = (!is_null($_SESSION['kecamatan']) || $_SESSION['kecamatan'] == 'admin') ? null : " and biodata.kecamatan=".$_SESSION['kecamatan']." " ;

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
				include("page/client/data_klien.php");
				break;
			case 'lihat-klien':
				include("page/client/view.php");
				break;
			case 'alat-bantu':
				include("page/alat_bantu/index.php");
				break;
			case 'edit-alat-bantu':
				include("page/alat_bantu/edit.php");
				break;
			case 'tambah-alat-bantu':
				include("page/alat_bantu/tambah.php");
				break;
			case 'lihat-alat-bantu':
				include("page/alat_bantu/view.php");
				break;
			case 'intervensi':
				include("page/intervensi/index.php");
				break;
			case "tambah-intervensi":
				include("page/intervensi/tambah.php");
				break;
			case "edit-intervensi":
				include("page/intervensi/edit.php");
				break;
			case "report-client":
				include("page/client/report.php");
				break;
			
			default:
				include('page/beranda.php');
				break;
		}
		include("page/default/footer.php");
		
	}

	mysqli_close($conx);

?>
