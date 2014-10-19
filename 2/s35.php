<meta charset="UTF-8">
<pre>
<?php
/*
// これは駄目：漏れる
if ('' === $_POST['name']) {
  echo '名前が未入力です！';
}
*/

/*
// 綺麗なやりかた
if ( (false === isset($_POST['name']))
      OR
     ('' === trim($_POST['name'])) ) {
  echo '名前が未入力です！';
}
*/

/*
// おいちゃんはよくつかう、荒っぽい書き方
if ('' === trim((string)@$_POST['name'])) {
  echo '名前が未入力です！';
}
*/

$name = @$_POST['name'];
if (true === empty($name)) {
  echo '名前が未入力です！';
}

$age = @$_POST['age'];
if (true === empty($age)) {
  echo '年齢が未入力です！';
}

echo 'fin';
