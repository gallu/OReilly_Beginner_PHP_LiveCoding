<?php

var_dump( file_exists(__FILE__) );
var_dump( is_file(__FILE__) );
echo '<hr>';
var_dump( file_exists(__DIR__) );
var_dump( is_file(__DIR__) );
echo '<hr>';
var_dump( is_readable(__FILE__) );
var_dump( is_writable(__FILE__) );
echo '<hr>';
var_dump( stat(__FILE__) );

$fp = fopen(__FILE__, "r");
var_dump( fstat($fp) );


