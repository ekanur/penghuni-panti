<?php
session_start();
include('config/db.php');
include('config/app.php');


// var_dump($_SESSION['idm']);exit();

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
		$is_admin_kecamatan = ($_SESSION['kecamatan'] == 'admin') ? null : " and biodata.kec='".$_SESSION['kecamatan']."' " ;
		switch ($act) {
			case 'logout':
				include('page/default/logout.php');
				break;

			case 'client':
					include('page/client/index.php');
					break;
			case 'view-client':
					include('page/client/view.php');
					break;
			case 'tambah-client':
				if(null != $is_admin_kecamatan){ break; }
				include('page/client/tambah.php');
				break;
			case 'asessmen':
				include('page/client/asessmen.php');
				break;

			case 'alat-bantu':
				include("page/alat_bantu/index.php");
				break;
			case 'edit-alat-bantu':
				if(null != $is_admin_kecamatan){ break; }
				include("page/alat_bantu/edit.php");
				break;
			case 'tambah-alat-bantu':
				if(null != $is_admin_kecamatan){ break; }
				include("page/alat_bantu/tambah.php");
				break;

			case 'terampil':
					include('page/terampil/view.php');
					break;
			case 'edit-terampil':
					include('page/terampil/edit.php');
					break;
			case 'tambah-terampil':
				if(null != $is_admin_kecamatan){ break; }
					include('page/terampil/tambah.php');
					break;

			case 'irp':
					include('page/irp/view.php');
					break;
			case 'edit-irp':
				if(null != $is_admin_kecamatan){ break; }
					include('page/irp/edit.php');
					break;
			case 'tambah-irp':
					if(null != $is_admin_kecamatan){ break; }
					include('page/irp/tambah.php');
					break;

			case 'intervensi':
					include('page/intervensi/view.php');
					break;
			case "tambah-intervensi":
				if(null != $is_admin_kecamatan){ break; }
				include("page/intervensi/tambah.php");
				break;
			case "edit-intervensi":
				if(null != $is_admin_kecamatan){ break; }
				include("page/intervensi/edit.php");
				break;

			case "pengaturan":
				include('page/pengaturan/index.php');
				break;

			default:
				include('page/beranda.php');
				break;
		}
		include("page/default/footer.php");

	}

	mysqli_close($conx);

?>
