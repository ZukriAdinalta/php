<!-- Recursive Function
  1. Recursive Function adalah kemapuan memanggil function diri sendiri
  2. kadang memang ada banyak problem yang lebih mudah selesaikan menggunakan recursive function, seperti contoh factorial -->
<!-- Kode Factorial Loop -->
<?php
function factorialLoop(int $value): int 
{
  $total = 1;
  for ($i =1; $i <= $value; $i++){
    $total *= $i;
  }
  return $total;
}

var_dump(factorialLoop(6)); // 1*2*3*4*5*6
?>

<!-- Kode Recursive Function -->
<?php
function factorialRecursive(int $value): int 
{
  if ($value == 1){
    return 1;
  } else {
    return $value * factorialRecursive($value -1);
  }
}

var_dump(factorialRecursive(5)); // 1*2*3*4*5
?>

<!-- Problem Dengan Recursive
  1. Jika rcursive terlalu dalam maka akan terjadi memory overflow yaitu error dimana memory terlalu banyak di lakukan di PHP.
  2. karena memanggil function PHP akan menyimpannya dalam stack, jika function tersebut memanggil function lain, maka stack akan menumpuk terus, dan jika terlalu banyak, maka akan membutuhkan konsumsi memory besar jika sudah melewati batas, maka akan terjadi error memory. -->
<!-- Kode Problem Dengan Recursive -->
<?php
function loop(int $value){

  if($value == 0){
    echo "<p> Loop End </p>";
  } else {
    echo "<p>Loop - $value</p>";
    loop($value -1);
  }
}
loop(30); // kalau sampai 30jt memory error
?>