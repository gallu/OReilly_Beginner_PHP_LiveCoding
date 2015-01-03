<?php

//
setlocale(LC_ALL, 'ja_JP.UTF-8');

//
$fp = fopen('./csv_data', "r");
while( false !== ($row = fgetcsv($fp)) ) {
  var_dump($row);
}

