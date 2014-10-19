<?php
// XSS対策用！
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>php sample</title>
</head>

<body>
<form action="./s40_fin.php" method="post">
<?php
if (true === $error_flg_name) {
  echo '名前は必須入力です<br>';
}
?>
名前<input name="name"
<?php
if (true === isset($_POST['name'])) {
  echo 'value="' , h($_POST['name']) , '"';
}
?>
><br>

<?php
if (true === $error_flg_age) {
  echo '年齢は必須入力です<br>';
}
?>
年齢<input name="age"
<?php
if (true === isset($_POST['age'])) {
  echo 'value="' , h($_POST['age']) , '"';
}
?>
><br>

<input type="submit" value="こっち">
</form>
</body>
</html>
