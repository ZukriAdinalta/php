<?php
/* Object Iteration
  1. Saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properties yang terdapat di object tersebut menggunakan foreach
  2. Hal ini mempermudah kita saat ingin mengakses semua properties yang ada di object
  3. Secara default, hanya properties yang public yang bisa diakses oleh foreach
 */

class Data
{
  var string $first = "First";
  public string $second = "Second";
  private string $third = "Third";
  protected string $fourth = "Fourth";
}

$data = new Data();

foreach ($data as $key => $value){
  echo " $key : $value " . PHP_EOL;
}
 
 /* Iterator
  1. Sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach
  2. Jika kita ingin menangani hal ini secara manual, kita bisa menggunakan Iterator
  3. Iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuat Iterator secara manual lumayan cukup ribet, oleh karena itu sekarang kita akan gunakan ArrayIterator, yaitu iterator yang menggunakan array sebagai data iterasi nya
  4. Dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface IteratorAggregate, disana kita hanya butuh meng-override function getIterator() yang mengembalikan data Iterator

  */
// IteratorAggregate implementasi bawaan php
class Data2 implements IteratorAggregate
{
  var string $first = "First";
  public string $second = "Second";
  private string $third = "Third";
  protected string $fourth = "Fourth";

  public function getIterator(): Traversable
  {
    return new ArrayIterator([
      "first" => $this->first,
      "second" => $this->second,
      "third" => $this->third,
      "fourth" => $this->fourth,
    ]);

    /* menggunakan generator
      yield "first" => $this->first,
      yield "second" => $this->second,
      yield "third" => $this->third,
      yield "fourth" => $this->fourth,
    */
  }
}

$data = new Data2();

foreach ($data as $key => $value){
  echo " $key : $value " . PHP_EOL;
}