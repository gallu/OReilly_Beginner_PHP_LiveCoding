<?php

//
$s = 'あいうえお';
$len = strlen($s);
for($i = 0; $i < $len; $i ++) {
  echo sprintf("(%02x)", ord($s[$i]));
}
echo "<br>\n";

//
//var_dump( mb_detect_order() );
mb_detect_order('UTF-8,sjis-win,eucjp-win,SJIS,EUC-JP,JIS,ASCII');
//var_dump( mb_detect_order() );

//
$s = mb_convert_encoding($s, 'sjis', 'utf-8');
//$s = mb_convert_encoding($s, 'sjis');
$len = strlen($s);
for($i = 0; $i < $len; $i ++) {
  echo sprintf("(%02x)", ord($s[$i]));
}
echo "<br>\n";

$s = 'ＡＢＣ１２３あああ';
echo $s , "<br>\n";
echo mb_convert_kana($s, 'aKC', 'utf-8');


