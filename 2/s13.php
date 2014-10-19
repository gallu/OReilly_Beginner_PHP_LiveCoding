<pre>
<?php
$awk = array(
  'key1' => 'val1',
  'key2' => 'val2',
  'key3' => 'val3',
  'key4' => 'val4',
);
//
//print_r($awk);
var_dump( isset($awk['key1']) );
var_dump( array_key_exists('hoge', $awk) );

