<?php
// 「送られてきたmail」を受信する
$mail_string = file_get_contents('php://stdin');
var_dump($mail_string);

// 受信したmailのFrom行を把握
//^From : XXXXXXXXX[LF]$ // 正規表現が使える！


// mail本文を組み立てておく

// 上述のFromアドレスをToにして、mailを送信


