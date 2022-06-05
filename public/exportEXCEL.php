<?php

require ('../loader.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');
$sheet->setCellValue('A2', 'Hello you !');
$sheet->setCellValue('B2', 'you are lover !');

$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');