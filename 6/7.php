<?php

$to = 'm.furusho+or@gmail.com';
$subject = '�͂��߂Ă�email';
$message = "test \n ���{��̖{��\n";
$headers = "From: oichan<furu@dev.m-fr.net>";

$r = mail($to, $subject, $message, $headers);
var_dump($r);
