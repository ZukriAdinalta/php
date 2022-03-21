<!-- Tipe Data Number
  1. diphp ada 2 jenis tipe data number, int bilangan bulat decimal <base10>, hexadecimal <base16>, octa<bas8>, binary <base2> dan float bilangan pecahan
  2.di php bisa menambahkan _<garis bawah> diangka, ini hanya utk mudah dibaca saat dijalankan, garis bawah akan di ignore
  3. utk angka negatif kita menggunakan tanda - <minus> didepan angka -->

<!-- Int -->
<?php
      echo "<h4>Tipe Data Integer Point</h4>"; 
      echo "Decimal:"; 
      var_dump(1234);
      echo "</br>";

      echo "octal:"; 
      var_dump(0123);
      echo "</br>";

      echo "hexadecimal:"; 
      var_dump(0x1A);
      echo "</br>";

      echo "binary:"; 
      var_dump(0b11111111);
      echo "</br>";
    ?>
<!-- Tipe Data Floating Point -->
<?php
    echo "<h4>Tipe Data Floating Point</h4>"; 
    echo "Floating Point:"; 
    var_dump(1.123);
    echo "</br>";

    echo "Floating Point dengan E notation Plus = (1.2 x 1000):"; 
    var_dump(1.2e3);
    echo "</br>";

    echo "Floating Point dengan E notation Minu = (7 x 0.001):"; 
    var_dump(7e-3);
    echo "</br>";

?>

<!-- Integer Overflow
    1. secara default kapasitas interger di php ada batasanya, 2147483647 utk sistem operasi 32bit, dan 9223372036854775807 utk operasi sitem 64bit
    2. membuat number integer yg melebihi nilai tersebut maka secara otomatis tipe number akan berubah menjadi floating point  -->

<?php
  echo "<h4>Integer Overflow</h4>"; 
  echo "Integer Overflow 32bit:"; 
  var_dump(2147483647);
  echo "</br>";

  echo "Integer Overflow 64bit:"; 
  var_dump(9223372036854775807 );
  echo "</br>";

?>