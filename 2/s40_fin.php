<?php
//var_dump($_POST);

//
$error_flg = false;

//
if ('' === (string)@$_POST['name']) {
  //echo '名前でエラー';
  $error_flg_name = true;
  $error_flg = true;
}

if ('' === (string)@$_POST['age']) {
  //echo '年齢でエラー';
  $error_flg_age = true;
  $error_flg = true;
}

// エラーなら
if (true === $error_flg) {
  // 入力Pageを表示して終了させる
  include('s40.php');
  exit;
}

// XXX 本当は、ここで「DBへの登録処理」とかなんとかをやる！

?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>php sample</title>
</head>

<body>
ありがとうございました。

</body>
</html>
