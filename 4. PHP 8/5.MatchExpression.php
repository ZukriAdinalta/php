<?php
/* Match Expression
PHP 8 menambahkan struktur kontrol baru bernama match expression
Match expression adalah struktur kontrol yang mirip dengan switch case, namun lebih baik
Match adalah expression, artinya dia bisa mengembalikan value
https://wiki.php.net/rfc/match_expression_v2
https://www.php.net/manual/en/control-structures.match.php 
 */

//Kode : Switch Statement
$value = "A";

$result = "";
switch ($value)
{
  case "A":
  case "B":
  case "C":
    $result = "Anda Lulus";
    break;
  case "D":
    $result = "Anda Tidak Lulus";
    break;
  case "E":
    $result = "Mungkin Anda Salah Jurusan";
    break;
  default:
    $result = "Tidak ada nilai";
}

echo $result . PHP_EOL;

//Kode : Match Expression
$nilai = "";
$hasil = match ($nilai)
{
  "A", "B", "C" => "Anda Lulus",
  "D" => "Anda Tidak Lulus",
  "E" => "Mungkin Anda Salah Jurusan",
  default => "Tidak Ada Nilai"
};

echo $hasil . PHP_EOL;

/* Non Equals Check di Match Expression 
  1. Selain equals check, berbeda dengan switch case, di match expression, kita bisa melakukan pengecekan kondisi lainnya
  2. Misal pengecekan menggunakan kondisi perbandingan, bahkan pengecekan kondisi berdasarkan boolean expression yang dihasilkan dari sebuah function
 */

// Kode : Match Expression Non Equals
$value = "61";
$result = match (true)
{
  $value >= 80 => "A",
  $value >= 70 => "B",
  $value >= 60 => "C",
  $value >= 50 => "D",
  default => "E"
};

echo $result . PHP_EOL;

// Kode : Match Expression dengan Kondisi
$name = "Mr. Zukri";
$result = match (true)
{
  str_contains($name, "Mr.") => "Hello Sir",
  str_contains($name, "Mrs.") => "Hello Mam",
  default => "Hello"
};

echo $result . PHP_EOL;