<?php

$to = 'm.furusho+or@gmail.com';
$subject = '‚Í‚¶‚ß‚Ä‚Ìemail';
$message = "test \n “ú–{Œê‚Ì–{•¶\n";
$headers = "From: oichan<furu@dev.m-fr.net>";

$r = mail($to, $subject, $message, $headers);
var_dump($r);
