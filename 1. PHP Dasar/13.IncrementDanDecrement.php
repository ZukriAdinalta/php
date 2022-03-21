<!-- Incremen Dan Decrement
  Php mendukung gaya bahasa pemrograman C untk menaikan dan menurunkan data number sejumlah 1. bisa mempersingkat ketika ingin menaikan data. -->
<!-- Operasi Increment dan Decrement
  1. Post Increment => "$a++" => Kembalikan $a lalu naikkan 1 angka
  2. pre Increment => "++$a" => Naikkan $a satu angka, lalu kembalikan $a
  3. Post Decrement => "$a--" => Kembalikan $a lalu turun 1 angka
  4. pre Decrement => "--$a" => Turunkan $a satu angka, lalu kembalikan $a -->

<!-- Kode Operasi Increment dan Decrement -->
<?php
$a = 10;
$b = $a++; // $b = $a dan $a = $a+1;
var_dump($b);
var_dump($a);

$c= 10;
$c++; // c + 1
++$c; // c + 1
var_dump($c); // total 12.
  
?>

<?php
$a = 10;
$b = ++$a; // $a = $a + 1; dan $b = $a;
var_dump($b);
var_dump($a);
  
?>