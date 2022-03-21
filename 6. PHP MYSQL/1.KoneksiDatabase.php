<?php
/*
1. Sebelum kita melakukan manipulasi data ke database dengan mengirimkan perintah SQL, hal yang perlu kita lakukan terlebih dahulu adalah membuat koneksi ke database
2. Untuk membuat koneksi ke database MySQL menggunakan PDO sangatlah mudah, kita hanya butuh membuat object PDO
3. Dan saat kita membuat koneksi ke MySQL menggunakan PDO, kita perlu tentukan host, port, database name, username dan juga password nya
*/

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

// $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
// echo "Sukses Terkoneksi ke Database" . PHP_EOL;

/*
  1. Hampir semua error yang terjadi di PDO merupakan class exception dari PDOException atau class turunannya
  2. Sehingga jika kita ingin melakukan sesuatu jika terjadi komunikasi error ke database, kita bisa gunakan try catch 
 */
try {
  $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
  echo "Sukses Terkoneksi ke Database" . PHP_EOL;

  // menutup koneksi
  $connection = null;
}catch (PDOException $exception){
  echo "Error Terkoneksi ke database " . $exception->getMessage() . PHP_EOL;
}

/* Menutup Koneksi
  1. Jika kita telah selesai melakukan operasi ke database, lalu kita sudah tidak memerlukannya lagi, maka kita wajib menutup koneksi ke database nya
  2. Setiap database punya batas maksimal koneksi ke database, contohnya MySQL secara default batas maksimal nya adalah 151 koneksi
  3. Jika sampai kita lupa menutup koneksi sehingga koneksi dianggap masih terbuka, maka lama kelamaan koneksi bisa cepat mencapai maksimal koneksi, sehingga ketika kita ingin membuat koneksi baru, maka akan ditolak oleh MySQL
 */

// menutup koneksi
// $connection = null;