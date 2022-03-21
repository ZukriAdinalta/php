<?php
/* Static Keyword
  1. Kata kunci static adalah keyword yang bisa kita gunakan untuk membuat properties atau function di class bisa diakses secara langsung tanpa menginstansiasi class terlebih dahulu
  2. Namun ingat, saat kita buat static properties atau function, secara otomatis hal itu tidak akan berhubungan lagi dengan class instance yang kita buat
  3. Untuk cara mengakses static properties dan function sama seperti mengakses constant, kita bisa menggunakan operator ::
  4. static function tidak bisa mengakses function biasa, karena function biasa menempel pada class instance sedangkan static function tidak
 */
class MathHelper
{
  static public string $name = "MathHelper";
  static public function sum(int ...$number):int
  {
      $total = 0;
      foreach ($number as $number){
        $total += $number;
      }
      return $total;
  }
}

echo MathHelper::$name . PHP_EOL;

MathHelper::$name= "Zukri Adinalta";
echo MathHelper::$name . PHP_EOL;

$total = MathHelper::sum(10, 10, 10, 10);
echo "Total $total" . PHP_EOL;