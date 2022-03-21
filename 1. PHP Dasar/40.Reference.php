<!-- Reference
  1. reference adalah mengakses variable yg sma dgn nama variable yang beda
  2. reference di PHP tdk sama dgn reference di bahasa programan sperti c/c++ yg memiliki fitur pointer
  3. Analogi reference itu seperti file, jika variable adalah file dan value adalah isi file maka refeerence adalah membuat shorcut di windows atau alias di linux/mac terdapt file yg sama
  4. saat kita mengubah isi value dr reference maka secara otomastis value variable aslinya pun berubah
  5. untuk membuat reference terhadap variable kita bisa menggunakan karater & -->

<!-- Assign By Reference
  Php reference bisa memungkinkan kita bisa membuat beberapa variable menuju ke value yang sama -->

<!-- Kode Assign By Reference -->
<?php
$name = "Eko";

$otherName = &$name;
$otherName = "Zukri";

echo $name;
?>

<!-- Pass By Reference
  selanjutnya mengirim data ke function dgn reference -->

<!-- Kode Pass By Reference -->
<?php
function increment(int &$value){
  $value++;
}
$counter = 1;
increment($counter);

echo " <p> $counter </p>";
?>

<!-- Return Reference
  Php bisa mengebalikan refference pd function namun hati-hati, gunakan fitur ini jika memang ada alasanya karena fitur ini bisa membingungkan -->

<!-- Kode return reference -->
<?php
function &getValue()
{
  static $value = 100;
  return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo "$b";

?>