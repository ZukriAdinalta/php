<!-- Anonymous Function
  1. Anonymous Function adalah function tanpa nama di PHP disebut dgn closure.
  2. Anonymous Function biasanya digunakan sebagai argument atau sebagai value di variable
  3. Anonymous Function membuat kita bisa mengirim function sebagai argument di function lainnya.  -->

<!-- Kode Anonymous Function -->
<?php
$sayHello = function (string $name) {
  echo "<p>Hello $name </p>";
};

$sayHello("Zukri");
$sayHello("Eko");
?>

<!-- Kode Anonymous Function Argument-->
<?php
function sayGoodBye(string $name, $filter){
  $finalName = $filter($name);
  echo "<p>Good Bye $finalName </p>";
}

sayGoodBye("Zukri", function (string $name){
  return strtoupper($name); //strtoupper huruf kapital
});

// Bisa Juga begini
$finalFilter = function (string $name): string{
  return strtolower ($name); // strtolower huruf kecil
};

sayGoodBye("Zukri", $finalFilter);
?>

<!-- Mengakses Variable di luar Closure 
  1. secara default, anonymous function tdk bisa mengakses variable yg terdapat diluar function
  2. jika kita menggunakan variable yg terdpat dilur anymous function, kita perlu secara explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable - variable yg ingin kita gunakan-->

<!-- Kode Mengakses Variable di luar Closure -->
<?php
  $firstName = "Zukri";
  $lastName = "Adinalta";
$sayHeloZukri = function () use ($firstName, $lastName){
  echo "<p> Hello $firstName $lastName </p>";
};

$sayHeloZukri();
?>