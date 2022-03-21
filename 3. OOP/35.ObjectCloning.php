<?php
/* Objict Clonning
  1. Kadang kita ada kebutuhan untuk menduplikasi sebuah object
  2. Biasanya untuk melakukan hal ini, kita bisa membuat object baru, lalu menyalin semua properties di object awal ke object baru
  3. Untungnya PHP mendukung object cloning
  4. Kita bisa menggunakan perintah clone untuk membuat duplikasi object
  5. Secara otomatis semua properties di object awal akan di duplikasi ke object baru
 */
class Student
{
  public string $id;
  public string $name;
  public int $value;
  private string $sample;

  public function setSample(string $sample): void
  {
    $this->sample = $sample;
  }
}

$student = new Student();
$student->id = "1";
$student->name = "Zukri";
$student->value = 100;
$student->setSample = "Sample"; 
var_dump($student);
//cara manual
/*
$student2 = new Student();
$student2->id = "1";
$student2->name = "Zukri";
$student2->value = 100;
var_dump($student2);
*/

//cara cloning
$student2 = clone $student;
var_dump($student2);




/*__clone() Function
  1. Kadang menyalin semua properties bukanlah yang kita inginkan
  2. Misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya
  3. Jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function di dalam class nya dengan nama function __clone()
  4. Function __clone() akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai
  5. Jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function __clone()

 */

class Pelajar
{
  public string $id;
  public string $name;
  public int $value;

  public function __clone()
  {
    unset($this->value);
  }
}

$student = new Pelajar();
$student->id = "1";
$student->name = "Zukri";
$student->value = 100;


//cara cloning
$student2 = clone $student;
var_dump($student2);