<?php

require_once('8.php');
mysql_select_db('oreilly');

// SQLを組み立てる
$sql = "INSERT INTO items
           SET item_id='1'
               , item_name='ミート＆デリカ　旭屋の「【最上級の味】ヒレステーキ」'
               , item_price='9400';
       ";

// 実行する
$r = mysql_query($sql);
var_dump($r);
var_dump(mysql_error());
