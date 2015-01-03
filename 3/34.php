<?php

$raw_pass = 'password';
$pass = password_hash($raw_pass, PASSWORD_DEFAULT);
var_dump($pass);
