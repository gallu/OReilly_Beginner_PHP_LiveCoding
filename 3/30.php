<?php

//
setcookie('counter', $_COOKIE['counter'] + 1);

// 出力は「setcookie」よりも後ろで！
var_dump($_COOKIE);

