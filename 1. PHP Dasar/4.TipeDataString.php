<!-- Tipe Data String
    1. Tipe Data string adalah tipe data representasi dari teks
    2. String bisa mengandung kosong atau banyak karakter.
    3. Hasil tipe data string bisa di lihat pada cmd. -->

<!-- Single Quote <''> = untuk membuat String di PHP.  -->
<?php
echo 'Nama : ';
echo 'Zukri Adinalta ';
echo "\n";
echo "</br>";
?>

<!-- Double Quote <""> = kelebihan menggunakan double quote kita dpt menggunakan escpe sequence utk beberapa hal, seperti \n enter \t untuk TAB dll -->

<?php

echo "Nama :";
echo " Zukri\t Adinalta\n ";
echo "</br>";
?>



<!-- Multiline String -->
<!-- 1. Membuat data string yg lebih dari satu baris. utk melakukan itu sebnarnya kita bisa menggunakan \n sbg Enter.
    2. Namun PHP memiliki fitur yg lebih baik, yaitu bernama Heredoc dan Nowdoc. -->

<!-- Herdoc = fitur utk membuat string yg pajang, sehingga kita perlu manual melakukan enter, tab dan lainya secara manual  -->
<?php
echo <<<ZUKRI
ini adlah string yang sngat
panjang, dan juga gak perlu ngetik enter secara
manual, "bisa quote" juga 
ZUKRI;
?>

<!-- Nowdoc = mirip seperti herdoc yg membedakannya adalah pada newdow tdk memiliki kemapuan parsing seperti di heredoc atau double qoute.  -->
<?php
echo <<<'ZUKRI'

ini adlah string yang sngat
panjang, dan juga gak perlu ngetik enter secara
manual, "bisa quote" juga 
ZUKRI;
?>