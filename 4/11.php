<?php

$fp = fopen( __FILE__, "r");
while( ($line = fgets($fp)) !== false ) {
  $line = rtrim($line);
  var_dump($line);
}
fclose($fp);
