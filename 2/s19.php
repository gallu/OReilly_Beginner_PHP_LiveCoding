<pre>
<?php
$awk = array (
  [  1,  2,  3,  4, 5],
  [  0, 10, 20       ],
  [100,200,300,400   ],
);
//
foreach($awk as $k => $awk2) {
  echo "{$k}の中には…\n";
  foreach($awk2 as $k2 => $v2) {
    echo "{$k2} is {$v2}\n";
  }
  echo "\n";
}


