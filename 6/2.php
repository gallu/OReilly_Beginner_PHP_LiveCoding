<?php

//  /etc/php.ini
//phpinfo();

/*
error_reporting(E_ALL);
var_dump( ini_get('error_reporting') );
*/

var_dump( ini_get('display_errors') );
ini_set('display_errors', false);
var_dump( ini_get('display_errors') );
// ------------
ini_set('display_errors ', true); // XXX ’ˆÓIII



