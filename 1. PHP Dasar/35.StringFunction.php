<!-- String Function 
  1. banyak sekali function bawaan PHP yag bisa digunakan utk manipulasi string
  2. https://www.php.net/manual/en/ref.strings.php -->

<!-- Contoh String Function
  1. 'join() / implode' => menggabungkan array jd string
  2. 'explode()' => memcah string menjadi array
  3. 'strolower()' => mengubah string menjadi lowercase
  4. 'strtoupper()' => mengubah string menjadi uppercase
  5. 'substr' => mengabil sebagian string
  6. 'trim()' => menhapus whitespace di depan dn belakang string -->
<!-- Kode String Function -->
<?php
var_dump(join(",", [1,2,3,4,5])); // 1,2,3,4,5
var_dump(explode(" ", "Zukri Adinalta")); // "Zukri" "Adinalta"
var_dump(strtolower("ZUKRI ADINALTA")); // zukri adinalta
var_dump(strtoupper("zukri adinalta")); // ZUKRI ADINALTA
var_dump(trim("     Zukri     ")); // Zukri
var_dump(substr("Zukri Adinalta", 0, 3)); // Zuk
?>