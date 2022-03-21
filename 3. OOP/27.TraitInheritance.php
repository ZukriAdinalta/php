<?php
/* Trait Inheritance
  1. Sebelumnya kita sudah tahu bahwa class bisa menggunakan trait lebih dari satu
  2. Lantas bagaimana dengan trait yang menggunakan trait lain?
  3. Trait bisa menggunakan trait lain, mirip seperti interface yang bisa implement interface lain
  4. Untuk menggunakan trait lain dari trait, penggunaannya sama seperti dengan penggunaan trait di class
 */
/*
 trait All{
  use SayGoodBye, SayHello, HasName;
}

class Person
{
  use All;
}
 */

require_once "Data/24.TraitInheritance.php";

use Data\Traits\{Person, SayGoodBye, SayHello};
$person = new Person();
$person->goodBye("Eko");
$person->Hello("Zukri");