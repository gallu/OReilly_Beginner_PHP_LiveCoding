<?php

$fn = $_GET['fn'];
var_dump($fn);

$w_list = array(
  '16' => '16.php',
  '15' => '15.php',
);
if (false === isset($w_list[$fn])) {
  echo 'なにしとんじゃいごるぁ';
  exit;
}

// else
echo file_get_contents($w_list[$fn]);


