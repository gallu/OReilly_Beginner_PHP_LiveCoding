<?php
//
ob_start();

//
var_dump($_COOKIE);
//
setcookie('counter', $_COOKIE['counter'] + 1);

//
ob_end_flush();
