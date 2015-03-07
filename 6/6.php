<?php

$to = 'm.furusho+or@gmail.com';
$subject = 'title';
$message = "test \n test\n";

$r = mail($to, $subject, $message);
var_dump($r);
