<pre>
<?php
$awk = array(
  'key1' => 'val1',
  'key2' => 'val2',
  'key3' => 'val3',
  'key4' => 'val4',
);
//
//var_dump( $awk[array_rand($awk)] );
shuffle($awk);
var_dump( $awk );

