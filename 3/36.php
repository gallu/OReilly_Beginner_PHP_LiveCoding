<?php
//
ob_start();
session_start();

// IDとパスワードを取り出す
//$id = $_POST['id'];
//$pass = $_POST['pass'];
$id = 'id';
$raw_pass = 'pass';

/*
// DBから情報を取り出す、という想定。
$sql = 'SELECT * FROM auth_user WHERE id = :id';
$pre = $dbh->prepere($sql);
$pre->bindValue(';id', $id);
*/
// ハッシュされた、DB格納のパスワード(という想定)
$db_pass = '$2y$10$wsWw1r67gMuMokl9OCvUmuiz71utf8EIhqVW53ep8tYWg4xHqP4Gy'; 

$r = password_verify($raw_pass, $db_pass);
var_dump($r);
if (true === $r) {
  $_SESSION['auth_user_id'] = $id;
  session_regenerate_id(true); // ログイン直後に必ず発行すること！
}
var_dump($_COOKIE);
var_dump($_SESSION);
var_dump(session_id());

if ( empty($_SESSION['auth_user_id']) ) {
  echo '未ログインです';
} else {
  echo 'ログイン中です！！';
}

ob_end_flush();

