<pre>
<?php
$awk = array(
  'key1' => 'val1',
  'key2' => 'val2',
  'key3' => 'val3',
  'key4' => 'val4',
  'key5' => 'val5',
  'key6' => 'val6',
);
//
foreach($awk as $key => $val) {
//foreach($awk as $val) {
  echo "{$key} is {$val}\n";
}

