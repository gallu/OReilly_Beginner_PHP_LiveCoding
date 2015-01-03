<?php

/*
 ログイン中か否かをチェックするサンプル
 */


ob_start();
session_start();

var_dump($_COOKIE);
var_dump($_SESSION);
var_dump(session_id());

if ( empty($_SESSION['auth_user_id']) ) {
  echo '未ログインです';
} else {
  echo 'ログイン中です！！';
}


ob_end_flush();
