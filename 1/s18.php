<pre>
<?php
/*
$s = "aaaaa
bbbbbbbbbbbb
cccccccccccc";
*/

$i = 100;

$s = <<< EOD
haaaaa
hbb \$i bbb $i bbbbbbb
hcccccc \n cccccc
EOD;

//
echo $s;


