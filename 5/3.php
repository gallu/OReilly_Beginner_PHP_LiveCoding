<?php

$s = base64_encode( file_get_contents('./security4.gif') );
?>

ob_start('ob_gzhandler');
<img src="data:image/gif;base64,<?php echo $s; ?>">

//
ob_end_flush();
