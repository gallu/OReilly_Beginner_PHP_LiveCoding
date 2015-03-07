<?php

$s = '/';

$len = strlen($s);
for($i = 0; $i < $len; $i ++) {
  echo sprintf("(%02x)", ord($s[$i]));
}
echo "<br>\n";

