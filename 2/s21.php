<?php

function hoge($s, $s2) {
  $ret = "string is " . $s . ' and ' . $s2;
  return $ret;
}

echo hoge('foo', 'bar');

