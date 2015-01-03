<?php

require_once('10.php');

// 準備された文を組み立てる
$sql = 'INSERT INTO items(item_id, item_name, item_price)
             VALUES (:item_id, :item_name, :item_price);';
$pre = $dbh->prepare($sql);

// 値をバインドする
$pre->bindValue(':item_id', 2);
$pre->bindValue(':item_name', "播州ハムの「炭火焼きベーコン」");
$pre->bindValue(':item_price', 1100);

// 実行する
$r = $pre->execute();
//var_dump($r);
