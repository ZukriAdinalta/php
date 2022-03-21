<!-- Variable
  1. variable adalah tempat penyimpanan data sehingga bisa digunakan di kode programer selanjutnya
  2. di php variable bisa menampung berbagai jenis tipe data dan bisa berubah - ubah tipe data
  3. membuat variable misa menggunakan tanda '$ (dolar)' diikuti nama variablenya
  4. penamaan varible tidk mengadung spasi  -->
<?php
$name = "Zukri Adinalta";
$age = 26;

echo "nama : ";
echo $name;
echo "\n";

echo "Umur : ";
echo $age;
echo "\n";
?>

<!-- Variable Variables
  1. php memiliki kemapuan variable variables, yaitu membuat variable dari string value variable.
  2. fitur ini sangat membingungkan jika digunakan secara luas, jadi disarankan tdk mengunakan fitur ini kecuali emg diperlukan.
  3. membuat variable dari value variable kita menngunaka $$ diikuti dengan nama variable -->

<?php
$name = "Zukri";
$$name = "Keren";

echo "\$name = ";
echo $name;
echo "\n";

echo "\$$name = ";
echo $Zukri;
echo "\n";
?>