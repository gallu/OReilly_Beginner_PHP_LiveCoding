<?php
//ini_set('display_errors', false);
ini_set('display_errors', true);
error_reporting(E_ALL);

//
ob_start();

//
echo 'test';
setcookie('test', 10);

//
ob_end_flush();


//
ob_start();
var_dump($a);
$s = ob_get_contents();
ob_end_clean();

