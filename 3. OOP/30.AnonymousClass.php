<?php
/* Anonymous class 
  1. Anonymous class atau class tanpa nama.
  2. Adalah kemampuan mendeklarasikan class, sekaligus meng-instansiasi object-nya secara langsung
  3. Anonymous class sangat cocok ketika kita berhadapan dengan kasus membuat implementasi interface atau abstract class sederhana, tanpa harus membuat implementasi class nya
 */
interface HelloWord
{
  function sayHello(): void;
}

$helloWord = new class implements HelloWord
{
  function sayHello(): void
  {
    echo "Hello Anonymous Class" . PHP_EOL;
  }
};

$helloWord->sayHello();


/* Constructor di Anonymous Class
  1. Anonymous class juga mendukung constructor
  2. Jadi kita bisa menambahkan constructor jika kita mau

 */

$Hello = new class("Zukri") implements HelloWord
{

  public string $name;
  public function __construct(string $name)
  {
    $this->name = $name;
  }
  
  function sayHello(): void
  {
    echo "Hello $this->name" . PHP_EOL;
  }
};

$Hello->sayHello();