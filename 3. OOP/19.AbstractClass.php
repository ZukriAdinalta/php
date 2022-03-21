<?php
/* Abstract Class
  1. Saat kita membuat class, kita bisa menjadikan sebuah class sebagai abstract class.
  2. Abstract class artinya, class tersebut tidak bisa dibuat sebagai object secara langsung, hanya bisa diturunkan
  3. Untuk membuat sebuah class menjadi abstract, kita bisa menggunakan kata kunci abstract sebelum kata kunci class
  4. Sehingga Abstract Class bisa kita gunakan sebagai kontrak child class
 */

 require_once "Data/16.AbstractClass.php";

 use Data\{Location, City};

//  $location = new Location(); // error 
 $city = new City();