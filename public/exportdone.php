<?php

require ('../loader.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Services\Models\TodoList;


$spreadsheet = new Spreadsheet();
$todoList = new TodoList;
$sheet = $spreadsheet->getActiveSheet();
$todoList = $todoList->getAll();
$i=1;
if (mysqli_num_rows($todoList) > 0) {
    while ($row = mysqli_fetch_assoc($todoList)) {
        if ($row['done']){
            $sheet->setCellValue('A'.$i, $row['id']);
            $sheet->setCellValue('B'.$i, $row['title']);
            $i++;
        }
    }}


$writer = new Xlsx($spreadsheet);
$writer->save('todolist_done.xlsx');
redirect("/index.php");