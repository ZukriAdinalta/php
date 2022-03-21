<!-- Manipulasi String -->
<!-- 1. Dot Operator
  Dot <titik> operator digunakan utk menambahkan string dgn data lain <bisa string atau tipe data lainya>. sebenarnya kita juga bisa menggunkan + <plus> untuk menambahkan string, namun jika kita tambah data dgn number maka akan terjadi error, oleh karena itu di rekomendasikan menggunakan dot <.> utk menabah string dgn data lain. -->

<!-- Kode Dot Operator -->
<?php
$name = "Zukri Adinalta";

echo "Nama : " . $name . PHP_EOL; // PHP_EOL = enter atau \n
echo "Nilai : " . 100 . "\n";

?>

<!-- 2. Konveksi ke Number atau Sebaliknya
  - kita sering melakukan tipe data dr string ke number <int/float> atau sebaliknya.
  - Di php cukup mudah kita hanya perlu menggunakan tanda kurung '(tipe data)'
  - Tipe data string adalah string, sedangkan number bisa menggunakan integer <int> dan floating point <float>. -->

<!-- Kode Konveksi ke Number atau Sebaliknya -->
<?php
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.120";
var_dump($valueFloat);
?>

<!-- 3. Mengakses Karakter
  - String di PHP sbg Array karakter, dimana kita bisa mengakses data tiap  karakternya menggunakan kurung siku'[]'.
  - sama seperti diarray index pertama 0
  - jika mengakses index melebihi karakter di string, maka akan menjadi error -->

<!-- Kode Mengakses Karakter  -->
<?php
$names = "Zukri";

echo $names[0] . PHP_EOL;
echo $names[1] . PHP_EOL;
echo $names[2] . PHP_EOL;
echo $names[3] . PHP_EOL;
echo $names[4] . PHP_EOL;
?>

<!-- 4. Variable Parsing 
  - Khusus string menggunakan double quote atau heredoc bisa menggunakan karakter $ utk mengakses variable.
  - Ini memudahkan kita menggabungkan string dgn variable.
  - cara menggunkannya adalah karakter $ lalu diikuti dgn nama variable nya.-->

<!-- Kode Variable Parsing  -->
<?php
$name = "Zukri";
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL; 
?>

<!-- 5. Curly Brace
  - Kadang kita butuh mengabungkan variable tanpa menggunakan spasi. hal ini akan menyulitkan jika hanya menggunakan variable passing.
  - Di PHP bisa menambahkan kurung kurwal sebelum menggunakan passing  -->

<!-- Kode Curly Brace  -->
<?php
$name = "Zukr";
echo "Hello {$name}i, Selamat Belajar PHP" . PHP_EOL; 
?>