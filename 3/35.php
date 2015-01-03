<?php

$id = 'id';
$raw_pass = 'password';
$pass = $raw_pass;
for($i = 0; $i < 100000; $i ++) {
  //$pass = sha1($id . $pass);
  $pass = hash('sha512', $id . $pass);
}
var_dump($pass);


