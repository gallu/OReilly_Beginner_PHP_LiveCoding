<?php

// MDB2をロードする
require_once('MDB2.php');

// データベースへ接続する
//$dsn = "mysql://ユーザー名:パスワード@ホスト名/データベース名";
$dsn = "mysql://oreilly:oreilly@localhost/oreilly";
$dbh = MDB2::connect($dsn);
var_dump($dbh);

// 接続エラーのチェック
if (MDB2::isError($dbh)) {
  // XXX
  exit;
}
