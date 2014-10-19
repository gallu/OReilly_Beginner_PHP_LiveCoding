<pre>
<?php

/*
// これはよい
function hoge($s = 'default', $s2 = 'default') {
// これは駄目
function hoge($s = 'default', $s2) {
*/
function hoge($s, $s2 = 'default') {
  $ret = "string is " . $s . ' and ' . $s2;
  return $ret;
}

echo hoge('foo') , "\n";
echo hoge('foo', 'bar') , "\n";

