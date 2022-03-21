<?php
/* Auto Increment
  1. Kadang kita membuat sebuah table dengan id auto increment
  2. Dan kadang pula, kita ingin mengambil data id yang sudah kita insert ke dalam MySQL
  3. Sebenarnya kita bisa melakukan query ulang ke database menggunakan SELECT LAST_INSERT_ID()
  4. Tapi untungnya di PDO ada cara yang lebih mudah
  5. Kita bisa menggunakan function lastInsertId() untuk mendapatkan Id terakhir yang dibuat secara auto increment
*/
// Kode : Membuat Table COMMENT
/*
CREATE TABLE COMMENT
(
id int NOT NULL AUTO_INCREMENT,
email varchar(100) NOT NULL,
comment text,
PRIMARY KEY(id)
) ENGINE = INNODB;
*/ 

// Kode : Function lastInsertId()
require_once __DIR__ . "/2.ExecuteSQL/2.ExecuteSQL.php";
$connection = getConnection();

$connection->exec("INSERT INTO comment(email, comment) values('zukri@test.com', 'hello')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;
$connection = null;