<pre>
<?php
$awk = array(
  'key3' => 'val3',
  'key1' => 'val1',
  'key2' => 'val2',
  'key5' => 'val5',
  'key4' => 'val4',
  '00key6' => 'val6',
);
//
//sort($awk);
//asort($awk);
ksort($awk);
var_dump($awk);

