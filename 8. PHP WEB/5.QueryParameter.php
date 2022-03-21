<!-- Query Parameter
  1. Saat mengakses Web, kita akan menggunakan URL, dan di dalam URL, terdapat bagian yang bernama query parameter
  2. Query parameter adalah informasi tambahan yang bisa kita kirimkan dari client ke server secara dinamis
  3. Untuk menambahkan query parameter, cukup gunakan ? diikuti dengan key=value pada URL 
  4. Di PHP, semua query parameter akan secara otomatis disimpan dalam global variable bernama $_GET
 -->

<!-- Query Parameter
  1. Saat mengakses Web, kita akan menggunakan URL, dan di dalam URL, terdapat bagian yang bernama query parameter
  2. Query parameter adalah informasi tambahan yang bisa kita kirimkan dari client ke server secara dinamis
  3. Untuk menambahkan query parameter, cukup gunakan ? diikuti dengan key=value pada URL 
  4. Di PHP, semua query parameter akan secara otomatis disimpan dalam global variable bernama $_GET
-->

<!-- Kode : Query Parameter -->

<?php
$say = "Hello " . $_GET['name'];
?>
<html>

<body>
  <h1><?= $say ?></h1>
</body>

</html>


<!-- Hasil: http://localhost/10.%20PHP/8.%20PHP%20WEB/5.QueryParameter.php?name=zukri%20adinalta -->

<!-- Multiple Query Parameter
  1. Query parameter di URL bisa memiliki banyak parameter
  2. Jika kita ingin mengirim banyak query parameter, kita cukup gunakan tanda & diikuti dengan query 3.parameter selanjutnya
 -->

<!-- Kode : Multiple Query Parameter -->
<!-- 
<?php
$hello = "Hello " . $_GET['first_name'] . " " . $_GET['last_name']  ;
?>
<html>

<body>
  <h1><?= $hello ?></h1>
</body>

</html> 
-->

<!-- Hasil: http://localhost/10.%20PHP/8.%20PHP%20WEB/5.QueryParameter.php?first_name=zukri&last_name=adinalta -->

<!-- 
  1. Secara default, query parameter berisikan data key=value, artinya 1 key akan berisi 1 value
  2. di PHP ada kemampuan untuk mengirim query parameter dengan data lebih dari satu
  3. Data tersebut akan otomatis dikonversi menjadi Array oleh PHP
  4. Caranya adalah kita wajib menambahkan tanda '[]' diakhir nama query parameter nya
  5. Dan kita bisa menambah query parameter dengan nama yang sama berkali-kali, misal
  6. 'name[]=Eko&name[]=Budi&name[]=Joko, maka secara otomatis parameter name akan berisi [Eko, Budi dan Joko]'
 -->

<!-- <?php
 $numbers = $_GET['numbers'];
 $total = 0;

 foreach ($numbers as $number){
   $total += $number;
 }
 ?>

<html>

<body>
  <h1>Total <?= $total ?></h1>
</body>

</html> -->

<!-- hasil: http://localhost/10.%20PHP/8.%20PHP%20WEB/5.QueryParameter.php?numbers[]=3&numbers[]=5 -->