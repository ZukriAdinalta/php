<?php
/* DateTime
  1. Biasanya dalam bahasa pemrograman sudah disediakan cara untuk memanipulasi data waktu, termasuk di PHP
  2. Di PHP, kita bisa menggunakan class DateTime untuk memanipulasi data waktu
  3. Ada banyak sekali function di class DateTime yang bisa kita gunakan untuk memanipulasi data waktu
 */

/*DateTime Function 
1. setTime($hour, $minute, $second) => Mengubah waktu DateTime
2. setDate($year, $month, $day) =>  Mengubah tanggal DateTime
3. setTimestamp($unixTimestamp) => Mengubah unix timestamp DateTime
*/

$dateTime = new DateTime(); // class DateTime Bawaan php
$dateTime->setDate(1995, 12, 10);
$dateTime->setTime(10, 10, 10);
var_dump($dateTime);

/* DateInterval
  1. Kadang kita hanya ingin memanipulasi waktu dan tanggal sebagian saja, misal hanya menambah 1 tahun, atau mengurai beberapa hari
  2. Hal ini bisa dilakukan dengan function add milik DateTime
  3. Namun function add tersebut menerima parameter berupa DateInterval
  4. Saat menggunakan DateInterval duration, kita perlu menentukan berapa banyak kita menambah interval 
  5. Kita bisa lihat detailnya disini : https://www.php.net/manual/en/dateinterval.construct.php 
  6. Untuk pembuatan duration, harus diawali dengan karakter P yang artinya period
 */

$dateTime->add(new DateInterval("P1Y")); // P1Y period 1 tahun

$minus1bulan = new DateInterval("P1M"); // P1M Period 1 bulan
$minus1bulan->invert = true;
$dateTime->add($minus1bulan);
var_dump($dateTime);


 /* DateTimeZone
  1. Saat kita membuat object DateTime, dia akan secara otomatis membuat waktu saat ini sesuai dengan timezone yang di setting di konfigurasi date.timezone di file php.ini
  2. Atau kita bisa menggunakan function setTimeZone untuk mengubah timezone DateTime
  */

$NowTime = new DateTime();
$NowTime->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($NowTime);


/* Format DateTime
  1. Kadang kita ingin membuat representasi string dari DateTime yang sudah kita buat
  2. Hal ini bisa kita lakukan menggunakan function format()
  3. Function format() menerima argument berupa format string, ini bisa kita gunakan untuk memanipulasi cara kita menampilkan string format waktu
  4. Untuk detailnya kita bisa lihat di halaman dokumentasi resminya
  5. https://www.php.net/manual/en/datetime.format.php 
 */
echo "Waktu Saat ini: " . $NowTime->format("Y-m-d H:i:s") . PHP_EOL; // Y=Tahun, m=bulan, d=hari. H=Jam, i=menit, s=detik

 /* Parse DateTime
  1. Selain format DateTime menjadi string, di PHP juga kita bisa melakukan hal sebaliknya, yaitu memparsing string menjadi DateTime sesuai dengan format yang kita mau
  2. Untuk melakukan itu, kita bisa menggunakan static function createFromFormat() dari class DateTime
 */
$date = DateTime::createFromFormat("Y-m-d H:i:s", "1995-12-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($date);