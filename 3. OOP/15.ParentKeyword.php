<?php
/* Parent Keyword
  1. Kadang kita ingin mengakses function yang terdapat di class parent yang sudah terlanjur kita override di class child
  2. Untuk mengakses function milik class parent, kita bisa menggunakan kata kunci parent
  3. Sederhananya, parent digunakan untuk mengakses class parent
 */

 require_once "Data/12.ParentKeyword.php";
 use Data\{Shape, Rectangle};

 $shape = new Shape();
 echo $shape->getCorner() . PHP_EOL;

 $rectangle = new Rectangle();
 echo $rectangle->getCorner() . PHP_EOL ;
 echo $rectangle->getParentCorner() . PHP_EOL ;