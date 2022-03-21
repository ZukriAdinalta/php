<?php
/* Trait Conflict
  1. Jika kita menggunakan lebih dari satu trait, lalu terdapat function yang sama di trait tersebut
  2. Maka hal tersebut akan menyebabkan konflik
  3. Jika terjadi konflik seperti ini, kita bisa mengatasinya dengan menggunakan kata kunci insteadof
 */

 require_once "Data/23.TraitConflict.php";


 $trait = new TraitConflict();
 $trait->doA();
 $trait->doB();