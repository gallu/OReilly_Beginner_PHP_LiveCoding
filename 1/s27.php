<pre>
<?php

var_dump( (bool)10 );
var_dump( (bool)-10 );
var_dump( (bool)0 );
var_dump( (bool)"hoge" );
var_dump( (bool)"" );
var_dump( (bool)array(1,2,3) );
var_dump( (bool)array() );
var_dump( (bool)"0" ); // PHPの闇！！
var_dump( (bool)"00" );



