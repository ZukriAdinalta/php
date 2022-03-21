<?php
/* Interface
  1. Sebelumnya kita sudah tahu bahwa abstract class bisa kita gunakan sebagai kontrak untuk class child nya.
  2. Namun sebenarnya yang lebih tepat untuk kontrak adalah Interface
  3. Jangan salah sangka bahwa Interface disini bukanlah User Interface
  4. Interface mirip seperti abstract class, yang membedakan adalah di Interface, semua method otomatis abstract, tidak memiliki block
  5. Di interface kita tidak boleh memiliki properties, kita hanya boleh memiliki constant 
  6. Untuk mewariskan interface, kita tidak menggunakan kata kunci extends, melainkan implements
  7. Dan berbeda dengan class, kita bisa implements lebih dari satu interface
 */

 require_once "Data/19.Interface.php";

 use Data\Avanza;

 $car = new Avanza();
 $car->drive(). PHP_EOL ;
echo "{$car->grtTire()}";
 