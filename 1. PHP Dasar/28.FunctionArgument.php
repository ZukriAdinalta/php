<!-- Function Argument
  1. Kita bisa mengirim informasi pada function ingin kita panggil.
  2. Untuk melakukan hal tersebut kita perlu menambahkan argument atau prameter di function yang sudah kita buat.
  3. cara membuat argument sama dengan membuat variable 
  4. argument ditempatkan didalam kurung '()' di deklarasi function.
  5. agument bisa lebih dari satu harus di pisahkan dengan tanda koma.-->

<!-- Kode argument Function -->
<?php
function sayHello($name, $lastname){
  echo "<p> Hello $name  $lastname </p>";
}
sayHello("Zukri", "Adinalta");
sayHello("Eko", "Saputra");
?>

<!-- Default Argument Value
  1. Php di dukung default Argumnet value
  2. fitur ini memungkinkan kita memanggil function tdk memasuki parameter, kita bisa menentukan data default nya apa. -->
<!-- Defaukt argument Function -->
<?php
function Hello($name = "Anonymous" )
{
  echo "<p> Hello $name </p>";
}
Hello("Zukri");
Hello();
?>

<!-- Kelasahan Default Argument Value
  1. Default argument value bisa disimpan argument manapun
  2. namun jika argument lebih dari satu, dan kita menyimpan default argument value di parameter awal, maka itu kurang berguna. -->
<?php
// function say($name = "Hai", $lastname) // tidak bisa
function say($name, $lastname = ""){
  echo "<p> Hello $name  $lastname </p>";
}
say("Zukri");
say("Zukri", "Adinalta");
?>

<!-- Type Declaration
  1. sama seperti variable argument di PHP bisa kita masukan data dinamis
  2. kadang terlalu dinamis juga menyuitkan jika kita hanya membuat function yang menggunakan argument dengan tipe dta tertentu
  3. di PHP bisa menambahkan type dat di rgument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value 
  4. jika tipe data tdk sesuai maka akan error
  5. secara default akan melakukan percobaan konversi tipe data secara otomatis misal kita menggunakan tipe data int tapi kita mengirim data string maka php otomatis meng konversi string tersebut ke int  -->
<!-- Valid Type
  1. Class / interface => Parameter harus tipe class/interface
  2. self => Parameter harus  sama dgn class dimana function dibuat
  3. array => Parameter harus  array
  4. callable => Parameter harus callable
  5. bool => Parameter harus boolean
  6. float => Parameter harus floating point
  7. int => Parameter harus interger number
  8. string => Parameter harus string
  9 interable => Parameter harus array atau tipe traversable
  10. object => Parameter harus sebuah object -->

<!-- Kode Type Declaration -->
<?php
function sum(int $first, int $last){
  $total = $first + $last;
  echo "<p> Total $first + $last = $total </p>";
}
sum("100" , "100");
sum(100, 100);
sum(true, false);
// sum([], []); //Error tdk bisa konversi array jd int
?>

<!-- Variable-Length Argument List
  1. variable-length argument list = kemapuan dimana kita bisa membuat sebuah parameter yg menerima banyak value.
  2. variable-length argument list secara otomatis membuat argument tersebut menjaddi array namun tdk perlu mengirim array ke function
  3. variable-length argument list hanya bisa dilakukan di argument di posisi terakhir
  4. untuk membuat variable-length argument list kita bisa menggunakan tanda ... "titik tiga kali" sebelum nama argument -->

<!-- Kode Variable-Length Argument List -->
<?php
function sumAll(...$values){
  $total = 0;
  foreach ($values as $value){
    $total += $value;
  }
  echo "<p> Total " . implode(" + ", $values) . " = $total </p>";
}
sumAll(10, 28, 30, 40);
sumAll(...[10, 28, 30, 40]);
?>