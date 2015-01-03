<form action="" method="post">
  検索条件１<input name="find_key_1"><input name="find_value_1"><br>
  検索条件２<input name="find_key_2"><input name="find_value_2"><br>
</form>

<?php

require_once('10.php');

/*
 幾分、非推奨
SELECT * FROM items;
SELECT * FROM items WHERE item_name = XXX
SELECT * FROM items WHERE item_price = XXX
SELECT * FROM items WHERE item_price = XX and item_name = XXX
 */

// 準備された文を組み立てる
$sql = 'SELECT * FROM items ';
$awk = array();
if ('' !== $_POST['find_key_1']) {
  $awk[] = $dbh->quote($_POST['find_key_1']) . ' = :1';
}
if ('' !== $_POST['find_key_2']) {
  $awk[] = $dbh->quote($_POST['find_key_2']) . ' = :2';
}
if (false === empty($awk)) {
  $sql .= ' WHERE ' . implode(' and ', $awk);
}
$sql .= ';';

$pre = $dbh->prepare($sql);

// 値をバインドする
// 以降は省略
