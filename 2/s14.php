<pre>
<?php
$awk = array(
  'key1' => 'val1',
  'key2' => 'val2',
  'key3' => 'val3',
  'key4' => 'val1',
);
//
//print_r($awk);
var_dump( in_array('val1', $awk) );
var_dump( in_array('hoge', $awk) );
var_dump( array_search('val1', $awk) );
var_dump( array_search('hoge', $awk) );

