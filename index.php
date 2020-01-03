<?php
require 'Classes/PHPExcel.php';
// load the file
$excel = PHPExcel_IOFactory::load('data.xlsx');

$excel->setActiveSheetIndex(0);
echo "<table border=1>";
// Fetching the data
$i = 4;
while( $excel->getActiveSheet()->getCell('A'.$i))->getValue() != " ") {
    // Cells
    $post = $excel->getActiveSheet()->getCell('A'.$i)->getValue();
    $su = $excel->getActiveSheet()->getCell('G'.$i)->getValue();
    $mo = $excel->getActiveSheet()->getCell('H'.$i)->getValue();
    $tue = $excel->getActiveSheet()->getCell('I'.$i)->getValue();
    $wed = $excel->getActiveSheet()->getCell('J'.$i)->getValue();
    $thu = $excel->getActiveSheet()->getCell('K'.$i)->getValue();
    $fri = $excel->getActiveSheet()->getCell('L'.$i)->getValue();
    $sat = $excel->getActiveSheet()->getCell('M'.$i)->getValue();
    // echo
    echo " <tr>
        <td>".$post."</td>
        <td>".$su."</td>
        <td>".$mo."</td>
        <td>".$tue."</td>
        <td>".$wed."</td>
        <td>".$thu."</td>
        <td>".$fri."</td>
        <td>".$sat."</td>
        </tr>




    ";
    $i++;





}








echo "</table>";
<?
