<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


function export($table_name, $data, $filename=null){
$alphabet = ['A', 'B', 'C','D', 'E', 'F','G', 'H', 'I','J', 'K', 'L','M', 'N', 'O','P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH','AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ'];
	$filename = (null == $filename) ?  "export_".$table_name."_".date("Y-m-d") : $filename ;
	$header = dataHeader($data[0]);

	// var_dump($header);exit();

	$spreadsheet = new Spreadsheet();
	$sheet = $spreadsheet->getActiveSheet();
	// $sheet->setCellValue('A1', 'header');	

	$i=0;
	foreach ($header as $data_header) {
			$sheet->setCellValue($alphabet[$i].'1', $data_header);	
			// echo $data_header. " | ";
			$i++;
	}
	// exit();
	for ($i=0; $i < sizeof($data); $i++) { 
		$x=0;
		foreach ($header as $data_header) {
			$sheet->setCellValue($alphabet[$x].($i+2), $data[$i]->$data_header);	
			// echo $data[$i]->$data_header." | ";
			$x++;
		}
		// echo "<br/><br/>";
	}

	// exit();

	$writer = new Xlsx($spreadsheet);
    $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="'.$filename.'.xlsx"');
    $writer->save("php://output");
}

function dataHeader($data){

	if(is_array($data)){
		return array_keys($data);
	}elseif(is_object($data)){
		return array_keys(get_object_vars($data));
	}else{
		return false;
	}
}
?>