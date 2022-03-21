<!-- Operator Logika
Operator Logika adalah utk membandingkan dua nilai boolean, hasil dari operator adalah boolean -->
<!-- Operasi Operator Logika
  1. AND => $a && $b dan $a and $b => true jika $a dan $b keduannya true
  2. OR => $a||$b atau $a or $b => true jika $a atau $b salah satu atau keduannya true  
  3. Not => !$a => true jika $a bernilai false
  4. Xor => $a xor $b => true jika $a dan $b salah satu true, tapi tdk keduanya. -->

<!-- Kode Operator Logika  -->
<?php

var_dump(true && false); // false
var_dump(false && true); // false

var_dump(true || false); // true
var_dump(true || true); // true

var_dump(true xor false); // true
var_dump(true xor true); // false

var_dump(!true); // false
var_dump(!false); // true

?>