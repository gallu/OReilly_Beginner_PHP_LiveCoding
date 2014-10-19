<pre>
<?php

//var_dump($_POST);
if (true === isset($_POST['hoge'])) {
  echo 'こっちがおされた';
} else
if (true === isset($_POST['foo'])) {
  echo 'あっちがおされた';
}

