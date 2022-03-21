<?php
/* Comparing Object
1. Sama seperti tipe data yang lain, untuk membandingkan dua buah object, kita bisa menggunakan operator == (equals) dan === (identity)
2. Operator == (equals) membandingkan semua properties yang terdapat di object tersebut, dan tiap properties juga akan dibandingkan menggunakan operator == (equals)
3. Sedangkan operator === (identity), maka akan membandingkan apakah object identik, artinya mengacu ke object yang sama
 */

 class Student
 {
  public string $id;
  public string $name;
  public int $value;
 }

$student = new Student();
$student->id = "1";
$student->name = "Zukri";
$student->value = 100;


$student2 = new Student();
$student2->id = "1";
$student2->name = "Zukri";
$student2->value = 100;


var_dump($student == $student2); // properti student dan student2 value nya sama maka hasilnya true
var_dump($student2 === $student); // walaupun properti sama tp object berbeda maka hasilnya false