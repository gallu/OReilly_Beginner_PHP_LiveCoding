<pre>
<?php
//var_dump($_POST);

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

echo 'name is ', h($_POST['name']), "\n";
echo 'email is ', h($_POST['email']), "\n";

// XXX 注意：これは絶対に駄目！ 絶対！
//echo 'name is ', $_POST['name'], "\n";
//echo 'email is ', $_POST['email'], "\n";


/*
// 長い～
echo 'name is '
     , htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8')
     , "\n";

echo 'email is '
     , htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8')
     , "\n";
*/
