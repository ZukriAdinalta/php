<!-- Array Function
  1. di PHP terdpat banyak sekali function bawaan yang bisa di gunakan utk manipulasi array
  2. https://www.php.net/manual/en/ref.array.php -->
<!-- Contoh Array Function 
  1 "array_keys()" => Mengambil semua key milik array
  2. "array_values()" => mngambil semua value milik array
  3. "array_map()" => mengubah semua data array dgn callback
  4. "sort()" => mengurutkan array
  5. "rsort()" => mengurutkan array tebalik
  6. "shuffle" => mengubah posisi aray secara random -->

<!-- Kode Array Function -->
<?php
$data = [1,2,3,4,5,6,7,8,9,10];

$mapFunction = function () use ($data){
  return $data  ;
};
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);

rsort($data);
var_dump($data);

$person = [
  "firstName " => "Zukri",
  "lastName" => "Adinalta"
];
var_dump(array_keys($person));
var_dump(array_values($person));
?>