<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



function export($table_name, $data, $filename=null){
	$filename = (null == $filename) ?  "export_".$table_name."_".date("Y-m-d"): $filename ;

	$spreadsheet = new Spreadsheet();
	$sheet = $spreadsheet->getActiveSheet();
	$sheet->setCellValue('A1', 'Hello World !');

	$writer = new Xlsx($spreadsheet);
    $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="hello_world.xlsx"');
    $writer->save("php://output");
}
?>