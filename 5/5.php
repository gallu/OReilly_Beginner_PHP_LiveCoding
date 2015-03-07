<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL);

class クラス名 {
  public function メソッド() {
    echo 'メソッド<br>';
  }

public $プロパティ;
}
//
$インスタンス = new クラス名();
//var_dump($インスタンス);
$インスタンス->メソッド();
//
$インスタンス->プロパティ = 10;
echo $インスタンス->プロパティ , "<br>\n";
