<?php

$to = 'm.furusho+or@gmail.com';
$subject = 'はじめてのemail';
$message = "test \n 日本語の本文\n";
$headers = "From: oichan<furu@dev.m-fr.net>";

$r = mail($to, $subject, $message, $headers);
var_dump($r);
