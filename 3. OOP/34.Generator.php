<?php
/* Generator
  1. Sebelumnya kita tahu bahwa untuk membuat object yang bisa di iterasi, kita menggunakan Iterator
  2. Namun pembuatan Iterator secara manual sangatlah ribet
  3. Untungnya di PHP, terdapat fitur generator, yang bisa kita gunakan untuk membuat Iterator secara otomatis hanya dengan menggunakan kata kunci yield
 */
// Menggunakan Array Interator
function getGenap(int $Max): Iterator
{
  $array = [];
  for ($i=1; $i <= $Max; $i++){
    if ($i % 2 == 0){
      $array[] = $i;
    }
  }
  return new ArrayIterator($array);
}

$genap = getGenap(20);
foreach ($genap as $value) {
  echo "Genap $value" . PHP_EOL;
}

//menggunakan Generator
function getGanjil(int $Max): Iterator
{
  for ($i=0; $i <= $Max; $i++){
    if ($i % 2 == 1){
      yield $i;
    }
  }
}

$ganjil = getGanjil(20);
foreach ($ganjil as $value) {
  echo "Ganjil $value" . PHP_EOL;
}