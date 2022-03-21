<?php
/* Trait Abstract Function
  1. Selain konkrit function, di trait juga kita bisa menambahkan abstract function
  2. Jika terdapat abstract function di trait, maka secara otomatis function tersebut harus di override di class yang menggunakan trait tersebut
*/

require_once "Data/22.TraitOverriding.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person ();
$person->name = "Zukri";
$person->run();

/* Trait Overriding
  1. Jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait, maka secara otomatis trait akan meng-override function tersebut
  2. Namun jika kita membuat function yang sama di class nya, maka secara otomatis kita akan meng-override function di trait
  3. Sehingga posisinya seperti ini ParentClass =override by=> Trait =override by=> ChildClas
*/

$person->goodBye("Eko");
$person->Hello("Zukri");

/*Trait Visibility Override
  1. Selain melakukan override function di class, kita juga bisa melakukan override visibility function yang terdapat di trait
  2. Namun untuk melakukan ini tidak perlu membuat function baru di class, kita bisa gunakan secara sederhana ketika menggunakan trait nya
 */

 /* Kode utk folder Data
 class Person
{
  use SayGoodBye, SayHello, HasName, CanRun{
    goodBye as private;
    Hello as private;
  }
}
 */