<?php
/* Exception
  1. Saat kita membuat aplikasi, kita tidak akan terhindar dengan yang namanya error
  2. Di PHP, error direpresentasikan dengan istilah exception, dan semua direpresentasikan dalam bentuk class exception
  4. Kita bisa menggunakan class exception sendiri, atau menggunakan yang sudah disediakan oleh PHP
  5. Jika kita ingin membuat exception, maka kita harus membuat class yang implement interface Throwable atau turunan-turunannya
 */

 class ValidationException extends Exception
 {
   
 }

/* Membuat Exception 
  1. Exception biasanya terjadi di function
  2. Di dalam kode program kita, untuk membuat exception kita cukup menggunakan kata kunci throw, diikuti dengan object exception nya
 */
require_once "41.Exception/LoginRequest.php";
require_once "41.Exception/validation.php";

$loginRequest = new LoginRequest();
$loginRequest->userName = "";
$loginRequest->Password = "eko";

// validateLoginRequest($loginRequest);
// echo "Valid" . PHP_EOL;


/* Try Catch
  1. Saat kita memanggil sebuah function yang bisa menyebabkan exception, maka kita disarankan menggunakan try-catch expression di PHP
  2. Ini gunanya agar kita bisa menangkap exception yang terjadi, karena jika tidak ditangkap, lalu terjadi exception, maka secara otomatis program kita akan berhenti
  3. Cara menggunakan try-catch expression di PHP sangat mudah, di block try, kita tinggal panggil method yang bisa menyebabkan exception, dan di block catch, kita bisa melakukan sesuatu jika terjadi exception
 */
try {
  validateLoginRequest($loginRequest);
} catch (validationException $exception){
  echo "Error : {$exception->getMessage()} " . PHP_EOL;
} catch (Exception $exception){
  echo "Error : {$exception->getMessage()} " . PHP_EOL;
}

// 1 catch bisa menakap beberapa jenis class Exception
try {
  validateLoginRequest($loginRequest);
} catch (validationException | Exception $exception){
  echo "Error : {$exception->getMessage()} " . PHP_EOL;
}

/* Finally Keyword
  1. Dalam try-catch, kita bisa menambahkan block finally
  2. Block finally ini adalah block dimana akan selalu dieksekusi baik terjadi exception ataupun tidak
  3. Ini sangat cocok ketika kita ingin melakukan sesuatu, tidak peduli sukses ataupun gagal, misal di block try kita ingin membaca file, di block catch kita akan tangkap jika terjadi error, dan di block finally error ataupun sukses membaca file, kita wajib menutup koneksi ke file tersebut, biar tidak menggantung di memory
*/
try {
  validateLoginRequest($loginRequest);
  echo "Valid" . PHP_EOL;
} catch (validationException | Exception $exception){
  echo "Error : {$exception->getMessage()} " . PHP_EOL;
} finally {
  echo "ERROR ATAU TIDAK, AKAN DIEKSEKUSI" . PHP_EOL;
}

/* Debug Exception
  1. Exception di PHP memiliki sebuah function bernama getTrace()
  2. Function getTrace() berisikan informasi dari exception yang terjadi, seperti lokasi file, baris ke berapa, function mana sampai argumenty yang dikirim di function tersebut apa
  3. Ini sangat cocok untuk kita jika ingin mendebug ketika terjadi exception
 */

try {
  validateLoginRequest($loginRequest);
  echo "Valid" . PHP_EOL;
} catch (validationException | Exception $exception){
  echo "Error : {$exception->getMessage()} " . PHP_EOL;
  // sbg string
  echo $exception->getTraceAsString(). PHP_EOL;

  // sbg tarce
  var_dump($exception->getTrace());

} finally {
  echo "ERROR ATAU TIDAK, AKAN DIEKSEKUSI" . PHP_EOL;
}