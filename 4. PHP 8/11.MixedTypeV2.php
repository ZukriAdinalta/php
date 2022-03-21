<?php
/* Mixed Type v2
1. Di PHP 7 terdapat type data mixed, tipe data ini digunakan ketika sebuah argument atau return function mengembalikan data yang bisa berbeda-beda. 
2. Karena tidak bisa menyebutkan tipe data berbeda-beda di PHP 7, maka biasanya ditambahkanlah tipe data baru bernama mixed
3. Di PHP 8, tipe data mixed di perbaharui, karena di PHP 8 sudah ada Uninon Type, jadi sekarang tipe data mixed adalah singkatan dari tipe data array|bool|callable|int|float|null|object|resource|string
4. https://wiki.php.net/rfc/mixed_type_v2 
 */

function testMixed(mixed $parem): mixed
{
  if (is_array($parem)){
    return [];
  } else if (is_string($parem)){
    return "zukri";
  }else if (is_numeric($parem)){
    return 1;
  }else {
    return null;
  }
}

var_dump(testMixed([]));
var_dump(testMixed("zukri"));
var_dump(testMixed(1));
var_dump(testMixed(true));
var_dump(new stdClass());