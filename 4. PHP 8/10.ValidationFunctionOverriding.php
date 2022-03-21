<?php
/* Validation untuk Abstract Function di Trait
  1. Di PHP 8, sekarang terdapat validasi ketika mengimplementasikan abstract function di class dari trait
  2. Di PHP 7, saat kita mengubah seperti parameter dan return value nya, hal itu tidak menjadi masalah
  3. Namun di PHP 8, jika kita mengubah implementasinya dari abstract function nya, maka otomatis akan error
  4. https://wiki.php.net/rfc/abstract_trait_method_validation 
 */

// Kode : Validation di Abstract Function Trait
/* Error
trait SampleTrait
{
  public abstract function sampleFunction(string $name): string; 
}

class SampleTraitImpl
{
  use SampleTrait;

  public function sampleFunction(int $name): int
  {
    
  }
}
*/

 /* Validation di Function Overriding
  1. Sebelumnya kita tahu bahwa melakukan override dengan mengubah signature function hanya akan menimbulkan warning
  2. Di PHP 8, hal tersebut sekarang akan menimbulkan error
  3. Sehingga kita tidak bisa lagi mengubah signature dari function yang kita override, seperti mengubah argument atau mengubah return value
  4. https://wiki.php.net/rfc/lsp_errors 
  */

// Kode : Validation di Function Overriding
/*Eror
class parentClass
{
  public function method(string $a)
  {

  }
}

class ChildClass extends parentClass
{
  public function method(int $a)
  {
    
  }
}
*/


/* Private Function Overriding
  1. Di PHP 7, saat kita membuat function, tapi ternyata di parent nya terdapat function dengan nama yang sama, walaupun private, hal itu dianggap overriding
  2. Padahal sudah jelas bahwa private function tidak bisa diakses oleh turunannya
  3. Di PHP 8, sekarang private function tidak ada hubungannya lagi dengan child class nya, sehingga kita bebas membuat function dengan nama yang sama walaupun di parent ada function private dengan nama yang sama
  4. https://wiki.php.net/rfc/inheritance_private_methods 

 */
// Kode : Private Function Overriding
class manager
{
  private function test(): void
  {

  }
}

class VicePresident extends manager
{
  public function test(string $name): string
  {
    return "hello";
  }
}