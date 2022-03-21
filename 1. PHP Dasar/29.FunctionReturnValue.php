<!-- Function Return Value
  1. secara default, function tdk menghasilkan value apapun, namun jika kita ingin kita bisa membuat sebuah function mengembailkan nilai.
  2. Dan di dlm blok function utk menghasilkan nilai tersebut kita harus menggunakan kata kunci return, lalu diikuti dgn data yg inggin dihasilkan.
  3. Kta hanya perlu menghasilkan satu data di sebuah function tdk bisa lebih. -->

<!-- Kode function Return Value 1-->
<?php
function sum(int $first, int $second){
  return $first + $second;
}

$total = sum(10, 10);
var_dump($total);

$total = sum(20, 20);
var_dump($total);
?>

<!-- Kode function Return Value 2-->
<?php
function getFinalValue(int $value)
{
if ($value >= 80){
  return "A";
} else if ($value >= 70){
  return "B";
}else if ($value >= 60){
  return "C";
} else if ($value >= 50){
  return "D";
} else {
  return "E";
}

}

$score = getFinalValue(70);
var_dump($score);

$score = getFinalValue(30);
var_dump($score);
?>

<!-- Return Type Declarations
  1. sama seperti pada argument, pada return value pun bisa mendeklarasikan tipe data.
  2. Hal ini selain memepermudah kita ketika membaca tipe data kembalikan function, bisa juga digunakan utk menjaga jangan sampai kita mengembalikan tipe data yang salah satu di function.
  3. untk mendeklarasikan tipe data kembalikan function, setelh kurung '()' kita bisa tambahkan : diikuti tipe data kembalianya -->
<!-- Kode Return Type Declarations -->

<?php
// function sum(int $first, int $second): int
// {
//   return $first + $second;
// }

// $total = sum(10, 10);
// var_dump($total);

// $total = sum(20, 20);
// var_dump($total);

// function getFinalValue(int $value):string
// {
// if ($value >= 80){
//   return "A";
// } else if ($value >= 70){
//   return "B";
// }else if ($value >= 60){
//   return "C";
// } else if ($value >= 50){
//   return "D";
// } else {
//   return "E";
// }

// }

// $score = getFinalValue(70);
// var_dump($score);

// $score = getFinalValue(30);
// var_dump($score);

?>