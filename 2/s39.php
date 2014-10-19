<?php

//var_dump($_POST['sel']);

// ホワイトリストを用意する
// 本当はconfigファイルとかに外だしにする
$w_list = array (
  'a' => 1,
  'b' => 1,
  'c' => 1,
);

// ホワイトリストでチェックする
//if (false === in_array($_POST['sel'], $w_list)) {
if (false === isset($w_list[$_POST['sel']])) {
  echo 'まてこら!';
}



