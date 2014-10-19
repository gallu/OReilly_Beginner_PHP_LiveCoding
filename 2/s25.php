<pre>
<?php

$a = 777;

function hoge() {
  var_dump($GLOBALS['a']);

  var_dump($a); // ここはNULL
global $a;
  var_dump($a);
  //
  $a = $a + 999;
}
//
hoge();
var_dump($a);