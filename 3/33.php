<?php
ob_start();
// セッションを開始する
session_start();

//
var_dump($_SESSION);
$_SESSION['counter'] ++;

//
ob_end_flush();
