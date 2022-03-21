<!-- Operator Penugasan
  1. operator penugasan di PHP sama seperti bahasa pemrograman lain, yaitu dgn menggunakan karakter = 'Sama Dengan'.
  2. OPertator penugasan sering digunakn utk merubah value variable dan juga bisa digunakan utk operasi aritmatika -->
<!-- Operator Penugasan  Aritmatika 
$a=$a+b => "$a += $b", $a=$a-b => "$a -= $b", $a=$a*b => "$a *= $b", $a=$a/b => "$a /= $b", $a=$a%b => "$a %= $b". -->

<!-- Kode Operator Penungasan Aritmatika -->
<?php
$total =0;

$fruit = 10000;
$chicken = 35000;
$OrangeJuice = 1000;

// Cara biasa aritmatika
// $total = $total + $fruit;
// $total = $total + $chicken;
// $total = $total + $OrangeJuice;

$total += $fruit;
$total += $chicken;
$total += $OrangeJuice;

var_dump($total);
?>