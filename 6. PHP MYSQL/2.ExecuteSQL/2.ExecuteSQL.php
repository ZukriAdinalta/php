<?php
/* ExecuteSQL
  1. Setelah kita terkoneksi ke database, sudah pasti kita ingin mengirim perintah SQL ke database tersebut dari aplikasi PHP kita
  2. Untuk mengirim perintah SQL, kita bisa menggunakan function execute(sql) yang terdapat di object PDO yang sudah kita buat
  3. Function execute(sql) bisa kita gunakan untuk semua jenis SQL yang tidak membutuhkan result data, misal CREATE TABLE, INSERT, UPDATE, DELETE, ALTER TABLE, dan lain-lain
 */
//  Kode : Membuat getConnection()

function getConnection():PDO
{
  $host = "localhost";
  $port = 3306;
  $database = "belajar_php_database";
  $username = "root";
  $password = "";

  return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}