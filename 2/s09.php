<pre>
<?php
//
$awk = array(1,2,3,4,5);
$awk[] = 6;
//
$count = count($awk);
for($i = 0; $i < $count; $i ++) {
//for($i = 0; $i < count($awk); $i ++) { // これは重い
  echo $awk[$i], "\n";
}

