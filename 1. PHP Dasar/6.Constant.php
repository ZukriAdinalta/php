<!-- Constant
  1. variable di php sifatnya mutable, artinya bis dirubah
  2. Jika kita menggunakan variable immutable 'tidak bisa dirubah', tidak bisa dilakukan diphp
  3. sebangai gantinya, terdapat fitur yang namanya constant
  4. constant adalah penyimpanan data yang tidak bisa di rubah lagi setelah di deklarasikan.
  5. membuat constant menggunakan 'function define()'
  6. pembuat nama constant menggunakan UPPER_CASE
-->

<!-- Kode Constant -->
<?php
define("AUTHOR", "KUMABBJ");
define("APP_VERSION", 100);

echo "Author : ";
echo AUTHOR;
echo "\n";

echo "APP Version : ";
echo APP_VERSION;
echo "\n";
?>