<?php

//require_once('10.php');
/*
 脆弱性たっぷりの、駄目なコード
 書くな！ 危険！ 駄目！ 絶対！！！
 */

// 準備された文を組み立てる
$sql = 'INSERT INTO items(item_id, item_name, item_price)
             VALUES (' . $_GET['item_id'] . ', ' . $_GET['item_name'] . ', ' . $_GET['item_price'] ;
$pre = $dbh->prepare($sql);

// 実行する
$r = $pre->execute();
//var_dump($r);
