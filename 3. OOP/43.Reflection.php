<?php
/* Reflection
  1. Reflection adalah membaca struktur kode pada saat aplikasi sedang berjalan
  2. Reflection adalah materi yang sangat panjang dan banyak, sehingga disini kita hanya akan membahas perkenalannya saja
  3. Reflection adalah fitur yang biasanya digunakan saat kita membuat framework
  4. https://www.php.net/manual/en/book.reflection.php 
 */
/* Studi Kasus : Membuat Validation Framework
  1. Sekarang kita akan coba melakukan studi kasus menggunakan Reflection
  2. Kita akan membuat validation framework menggunakan reflection
  3. Validation framework nya cukup sederhana, kita hanya akan mengecek apakah properties bernilai null atau tidak, kalo null atau belum di set, kita akan throw ValidationException
  4. Tanpa reflection, biasanya untuk melakukan hal ini, kita butuh pengecekan secara manual
 */
class ValidationException extends Exception
 {
   
 }

require_once "41.Exception/LoginRequest.php";
require_once "43.Reflection/Validation.php";

$request = new LoginRequest();
$request->userName = "zukri";
$request->Password = "adinalta";

// ValidationUtil::validate($request);
ValidationUtil::ValidateReflection($request);

// membuat class baru dgn reflection yg udh ada
class RegisterRequest
{
  public string $name;
  public string $address;
  public string $email;
}

$register = new RegisterRequest();
$register->name = "Zukri";
$register->address = "padang";
$register->email = "Zukri";

ValidationUtil::ValidateReflection($register);
// ValidationUtil::validate($register);