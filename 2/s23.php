<pre>
<?php

function hoge($i) {
  $i = $i + 999;
}
//
$i = 10;
hoge($i);
var_dump($i);
