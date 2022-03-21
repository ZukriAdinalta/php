<?php
/* Non-Capturing Catches
  1. Saat terjadi error di PHP, biasanya kita akan menggunakan try catch
  2. Lalu dalam catch kita akan menangkap error dan menyimpannya dalam variable exception
  3. Walaupun sebenarnya tidak kita gunakan, kita tetap harus membuat variable exception nya
  4. Di PHP 8, sekarang kita tidak wajib membuat variable exception nya jika memang tidak akan menggunakannya
  5. https://wiki.php.net/rfc/non-capturing_catches 
 */
//Kode : Non-Capturing Catches

function validate(string $value)
{
  if(trim($value) ==""){
    throw new Exception("Invalid String");
  }

}

try{
  Validate("      ");
}catch (Exception){
  echo "Invalid";
}