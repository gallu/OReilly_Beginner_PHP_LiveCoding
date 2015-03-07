function dump_string($s, $flg = true)
{
//var_dump($s);
  $len = strlen($s);
  if (true === $flg) {
    $ret = $s . '(';
  } else {
    $ret = '(';
  }
  for($i = 0; $i < $len; $i ++) {
    $ret .= sprintf("(%02x)", ord($s[$i]));
  }
  $ret .= ')';
  return $ret;
}
