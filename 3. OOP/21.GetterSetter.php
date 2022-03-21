<?php
//Getter and Setter

/* Encapsulation
  1. Encapsulation artinya memastikan data sensitif sebuah object tersembunyi dari akses luar
  2. Hal ini bertujuan agar kita bisa menjaga agar data sebuah object tetap baik dan valid
  3. Untuk mencapai ini, biasanya kita akan membuat semua properties menggunakan access modifier private, sehingga tidak bisa diakses atau diubah dari luar
  4. Agar bisa diubah, kita akan menyediakan function untuk mengubah dan mendapatkan properties tersebut
 */

 /*Getter dan Setter
  1. Di PHP, proses encapsulation sudah dibuat standarisasinya, dimana kita bisa menggunakan Getter dan Setter method.
  2. Getter adalah function yang dibuat untuk mengambil data field
  3. Setter ada function untuk mengubah data field
 */

/* Getter dan Setter Method
1. boolean => getter: isXxx(): bool dan setter: setXxx(bool value)
2. Lainnya => getter: getXxx(): tipeData dan setter: setXxx(tipeData value)
 */

require_once "Data/18.GetterSetter.php";

$category = new Category();
$category->setName("Eko");
$category->setExpensive(true);

$category->setName("");
echo " Name : {$category->getName()} " . PHP_EOL;
echo " Expensive : {$category->isExpensive()} " . PHP_EOL;