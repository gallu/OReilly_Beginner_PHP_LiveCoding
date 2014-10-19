<pre>
<?php
$awk = array(
  'key1' => 'val1',
  'key2' => 'val2',
  'key3' => 'val3',
  'key4' => 'val4',
);
//
$awk = array_flip($awk);
var_dump($awk);

