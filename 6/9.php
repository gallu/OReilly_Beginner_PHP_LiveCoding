<?php

// マッチする場合
$string = '0123456789abcdefghijk';
$ret = preg_match('/abc/', $string, $matches);
var_dump($ret);
var_dump($matches);

// マッチしない場合
$string = '0123456789ABCDEFGHIJK';
$ret = preg_match('/abc/', $string, $matches);
var_dump($ret);
var_dump($matches);

//
$string = '0123456789abcdefghijk';
$ret = preg_match('/a.c./', $string, $matches);
var_dump($ret);
var_dump($matches);

//
$string = '0123456789abcdefghijk';
$ret = preg_match('/(abc)|(456)|(ABC)/', $string, $matches);
var_dump($ret);
var_dump($matches);

//
$string = '0123456789abcdefghijka.c';
$ret = preg_match('/[abc]/', $string, $matches);
var_dump($ret);
var_dump($matches);

$string = '0123456789abcdefghijka.c';
$ret = preg_match('/[a-z]/', $string, $matches);
var_dump($ret);
var_dump($matches);

// XXX
$string = "javascript code\nhttp://example.com";
$ret = preg_match('/^http:/m', $string, $matches);
var_dump($ret);
var_dump($matches);

//
$string = "0123\n";
$ret = preg_match('/[0-9]$/', $string, $matches);
var_dump($ret);
var_dump($matches);

//
$string = "javascript code\nhttp://example.com";
$ret = preg_match('/\Ahttp:/m', $string, $matches);
var_dump($ret);
var_dump($matches);

//
$string = "0123\n";
$ret = preg_match('/[0-9]\z/', $string, $matches);
var_dump($ret);
var_dump($matches);






