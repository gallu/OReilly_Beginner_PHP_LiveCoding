<?php

$t = strtotime('20-Dec 2014') ;
$date_string = date('Y-m-d', $t);
var_dump($date_string);

$date_string = date('Y-m-d', strtotime('20-Dec 2014'));
var_dump($date_string);

// --
//$date_string = date('Y-m-d', strtotime('+30 days'));
$i = 10;
$date_string = date('Y-m-d', strtotime("+{$i} days"));
var_dump($date_string);

