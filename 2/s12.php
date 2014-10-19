<pre>
<?php

$s = '1	2	3	4	5';
$awk = explode("\t", $s);
//var_dump($awk);
//
$s2 = implode(' & ', $awk);
var_dump($s2);
