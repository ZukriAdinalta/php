<?php
/* Final Class
  1. Kata kunci final bisa digunakan di class, dimana jika kita menggunakan kata kunci final sebelum class, maka kita menandakan bahwa class tersebut tidak bisa diwariskan lagi
  2. Secara otomatis semua class child nya akan error
 */

 class SosialMedia
 {
   public string $name;
 }

final class Facebook extends SosialMedia
{

}

//erro
/*
class FakeFacebook extends Facebook
{
  
} 
*/