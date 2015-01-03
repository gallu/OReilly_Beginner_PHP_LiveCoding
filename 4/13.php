<?php

setlocale(LC_ALL, 'ja_JP.UTF-8');
//$s = "1,2,3\n4,5,6\n7,8,9\n";
$s = file_get_contents('./csv_data');
/*
//
$awk = str_getcsv($s);
var_dump($awk);
*/
$fp = fopen('php://temp', 'r+');
fwrite($fp, $s);
fseek($fp, 0, SEEK_SET);
while($row = fgetcsv($fp)) {
  var_dump($row);
}

