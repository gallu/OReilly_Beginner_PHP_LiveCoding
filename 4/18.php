<?php

$fn = $_GET['fn'];
var_dump($fn);

//
$bname = basename($fn);
$pinfo = pathinfo($fn);

var_dump($bname);
var_dump($pinfo);

// else
echo file_get_contents($bname);


