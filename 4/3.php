<?php
$start = microtime(true);

//var_dump( microtime() );
var_dump( microtime(true) );

register_shutdown_function('end_function');

exit;

//
function end_function() {
global $start;

  $end = microtime(true) - $start;
var_dump($end);
var_dump( memory_get_peak_usage() );
var_dump( memory_get_peak_usage(true) );
}


