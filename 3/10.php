<?php
$dsn = 'mysql:dbname=oreilly;host=localhost;charset=utf8';
$user = 'oreilly';
$pass = 'oreilly';

  try {
    $dbh = new PDO($dsn, $user, $pass);
  } catch (PDOException $e) {
    echo "connect error!! ({$e->getMessage()})";
    return false;
  }

var_dump($dbh);
