<?php

$f = 0.1 + 0.2;
$f2 = 0.3;

//if ($f == $f2) {
if ( (abs($f - $f2)) < 0.0001 ) {
  echo 'OK';
} else {
  echo 'NG';
}


