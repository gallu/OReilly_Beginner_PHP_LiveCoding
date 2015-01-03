<?php
ob_start();
// セッションを開始する
session_start();

//
$_SESSION['key'] = 'value';
$_SESSION['counter'] = 1;

//
ob_end_flush();
