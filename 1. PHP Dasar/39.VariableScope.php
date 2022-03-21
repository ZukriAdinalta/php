<!-- Variable Scope
  1. DiPHP bisa membuat variable dimanapun yg kita mau
  2. scope variable adalah bagian mana saja sebuah variable bisa diakses
  3. PHP memiliki 3 jenis variable score: global, local dan static -->

<!-- Global Scope
  1. Variable di buat diluar function memiliki scope global
  2. variable di scope global hanya bisa dikses dari luar function
  3. artinya di dalam function kita tdk bisa mengakses variable di global scopes -->

<!-- Kode Global scope -->
<?php
$name = "Zukri"; // global scope
function sayName()
{
  echo $name; //eror
}
sayName();
?>

<!-- Local Scope
  1. Variable yang dibuat di dlm function memiliki scope lokal
  2. variable di scope local hanya bisa diakses dr dlm function itu sendiri
  3. artinya vriable tersebut tdk bisa diakses dr luar function ataupun dari function lain   -->
<!-- Kode Local Scope -->
<?php

function sayHello()
{
  $names = "Zukri"; //Local scope
}
sayHello();
echo $names; //error
?>

<!-- Global Keyword
  1. Jika kita ingin mengakses variable di luar function 'global scope' dr dlm function kita bisa menggunakan karakter kunci global.
  2. dgn menggunakan kata kunci global, mka bisa mengakses variable yg ada di global scope dr dlm function -->

<!-- Kode global keyword -->
<?php
$names = "Zukri"; // global scope
function createName()
{
  global $names; // global keyword
  echo "<p> Hello $names </p>"; //eror
}
createName();
?>

<!-- $GLOBAL Variable
  1. selain menggunakan global keyword, setiap variable yg dibuat di global scope secara otomatis akan disimpan di dlm array $GLOBAL oleh PHP
  2. jadi kita bis menggunkan $GLOBAL vriable degan key nama variable nya dr dlm function jika ingin mengakses global variable
  3. $GLOBAL adalah variable yg bersifat superglobal, artinya bisa diakses dari scope manapun -->
<!-- Kode $GLOBAL variable -->
<?php
$nama = "Zukri"; // global scope
function createNama()
{
  echo "<p> Hei {$GLOBALS["nama"]} </p>"; // $GLOBAL Variable
}
createNama();
?>

<!-- Static Scope
  1. Secara default local variable itu siklus hidupnya hanya terbatas function nya dieksekusi
  2. jika sebuah function selesai di eksekusi maka siklus hidup lokal variable nya selesai 
  3. di PHP memiliki yg bernama static 
  4. static scope hanya di set ke local variable
  5. saat kita membuat sebuah ocal ariable menjadi static maka siklus hidupnya tdk akan berhenti ketika sebuah function selesai dieksekusi
  6. artinya jika funtion tersebut dieksekusi lagi maka static variable tersebut kan memliki value dr sebelumnya-->
<!-- Kode Static Scope -->
<?php
  function increment(){
    static $counter = 1; //static scope
    echo "<p> Counter : $counter </p>";
    $counter++;
  }

  increment();
  increment();
  increment();
?>