<?php
/* Nullsafe Operator
  1. PHP sekarang memiliki nullsafe operator seperti di bahasa pemrograman Kotlin atau TypeScript
  2. Biasanya ketika kita ingin mengakses sesuatu dari sebuah object yang bisa memungkinan nilai null, maka kita akan melakukan pengecekan apakah object tersebut null atau tidak, jika tidak baru kita akses object tersebut
  3. Dengan nullsafe operator, kita tidak perlu melakukan itu, kita hanya perlu menggunakan karakter ? (tanda tanya), secara otomatis PHP akan melakukan pengecekan null tersebut 
  4. https://wiki.php.net/rfc/nullsafe_operator 
 */

//Kode : Nullable Class
class Address
{
  public ?string $country;
}

class User
{
  public ?Address $address;
}


// Kode : Manual Null Check
function getCountry(?User $user): ?string
{
  if($user != null)
  {
    if ($user->address !=null){
      return $user->address->country;
    }
  }
  return null;
}

echo getCountry(null);

//Kode : Nullsafe Operator

function getCountry2(?User $user): ?string
{
  return $user?->address?->country;
}

echo getCountry2(null);