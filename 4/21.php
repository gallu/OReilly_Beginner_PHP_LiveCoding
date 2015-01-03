<?php
$date = date('Ymd');

// 全てを非表示
error_reporting(0);
ini_set('display_errors', 0);

echo $data , "\n";

// 全てを表示
error_reporting(E_ALL);
#error_reporting(-1);
#ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1); 

echo $data , "\n";

// よくない＠の使い方
$fp = @fopen('aaaaa', "r");

// 許容可能な＠の使い方
$name = (string)@$_POST['name'];
var_dump($name);
// 数値なら例えばこう
$page_num = abs((int)@$_GET['p']);


// notice以外を全て表示
error_reporting(E_ALL & ~E_NOTICE);


