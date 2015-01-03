<?php

/*
 脆弱性たっぷりの、駄目なコード
 書くな！ 危険！ 駄目！ 絶対！！！
 */
//mysql_connect();

$sql = 'SELECT * FROM items WHERE item_id = ' . $_GET['item_id'] .';';
mysql_query($sql);


