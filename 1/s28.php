<?php

/*
$ret = strpos('abcdefg', 'a');
//$ret = strpos('abcdefg', 'bc');
//$ret = strpos('abcdefg', 'zz');
var_dump($ret);

if (false == $ret) {
  echo "文字が見つからないよ？\n";
} else {
  echo "見つかったよ！\n";
}
*/
//
//if (false == strpos('abcdefg', 'a')) { // こっちだと困る
if (false === strpos('abcdefg', 'a')) { // こっちなら困らない
  echo "文字が見つからないよ？\n";
} else {
  echo "見つかったよ！\n";
}



