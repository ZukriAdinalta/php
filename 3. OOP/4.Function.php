<?php
/* Function
  1. Selain menambahkan properties, kita juga bisa menambahkan function ke object
  2. Cara dengan mendeklarasikan function tersebut di dalam block class
  3. Sama seperti function biasanya, kita juga bisa menambahkan return value dan parameter
  4. Untuk mengakses function tersebut, kita bisa menggunakan tanda -> dan diikuti dengan nama method nya. Sama seperti mengakses properties
 */

require_once "Data/Function.php";

$orang = new Person();
$orang->sayHello("Zukri");
$orang->Alamat("Padang");

?>