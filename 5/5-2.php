<?php

class クラス名 {
  public function setプロパティ($v) {
    $this->プロパティ = $v;
  }

  public function メソッド() {
    echo 'メソッド<br>';
    echo $this->プロパティ , '<br>';
  }

private $プロパティ;
}
//
$インスタンス = new クラス名();
//$インスタンス->プロパティ = 20;
$インスタンス->setプロパティ(999);
$インスタンス->メソッド();



