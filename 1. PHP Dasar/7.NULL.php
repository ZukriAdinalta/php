<!-- NULL
  1. Nilai NULL Merepresentasikan sebuah variable tanpa nilai.
  2. saat membuat variable, ingin menghapus data yg terdapat di variable tersebut, kita bisa menggunakan NULL utk mengosongkan variable tersebut.
  3. membuat data NULL, menggunakan kata kunci NULL 'case insenitive' -->

<!-- Kode NULL -->
<?php
$name = "Zukri";

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Umur : ";
echo $age;
echo "\n";
?>

<!-- Mengecek Apakah Data NULL 
  untuk mengecek apakah sebuah data bernilai null, bisa menggunakan 'function is_null($variable)'. hasilnya boolean 'true nilai 1 dan false nilai 0' -->
<?php
$name = "Zukri";
$name = null;

echo "Is Name Null? : ";
echo is_null($name );
echo " Boolean : ";
echo var_dump(is_null($name));
echo "\n";
?>

<!-- Menghapus Variable
  1. di php juga bisa menghapus variable dgn cara menggunakan 'fucntion unset($variable)'
  2. ketika hapus variable tidak bisa lg mengakses variable tersebut, bahkan 'function is_null(variable)' pun menjadi error jika mengakses variable tersebut.
  3. lebih aman kita menggunakan 'function isset($variable)' utk mengecek apakah sebuah variable ada dan nilainya tidak NULL -->


<?php
$contoh = "apa";
unset($contoh);

echo "Hasil: ";
var_dump(isset($contoh))
?>