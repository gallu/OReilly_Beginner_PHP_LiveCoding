<pre>
<?php
//
$s = trim("\t hoge hoge\n");
var_dump($s);

//
var_dump(strlen("hoge"));
var_dump(strlen("あ")); // 日本語は気をつけて！

//
if ('hoge' == 'hoge') {
  echo "比較が一致\n";
} else {
  echo "比較が不一致\n";
}
//
if (0 == strcmp('hoge','hoge')) {
  echo "比較が一致\n";
} else {
  echo "比較が不一致\n";
}
//
if (0 == strncmp('hogehoge','hoge', 4)) {
  echo "比較が一致\n";
} else {
  echo "比較が不一致\n";
}
//
if (0 == strcasecmp('HOGE','hoge')) {
  echo "比較が一致\n";
} else {
  echo "比較が不一致\n";
}
//
var_dump(strtolower('HoGe'));
var_dump(strtoupper('HoGe'));
//
var_dump( substr('abcdefg', 2, 2) );
//
var_dump(str_replace('a','A','abcdefg'));
var_dump(str_replace(array('a', 'b'),array('A', 'Z'),'abcdefg'));
