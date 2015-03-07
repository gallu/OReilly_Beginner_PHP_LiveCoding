<?php

$to = 'm.furusho+or@gmail.com';
$subject = 'title';
$message = "test \n test\n";
$headers = "From: info@facebook.com";


$r = mail($to, $subject, $message, $headers);
var_dump($r);
