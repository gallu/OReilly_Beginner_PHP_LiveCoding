<pre>
<?php

function hoge($i) {
  if (0 === $i) {
    return ;
  }
  // else
  $i --;
  echo "{$i}\n";
  hoge($i);
}
//
hoge(5);
