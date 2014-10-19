<pre>
<?php

function hoge() {
  $i = 0;
  static $j = 0;

  //
  $i ++;
  $j ++;

  //
  //echo "i is {$i}\n";
  echo "j is {$j}\n";
}
//
hoge();
hoge();
hoge();

