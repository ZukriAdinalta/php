<?php
/*
  1. Kata kunci final juga bisa digunakan di function
  2. Jika sebuah function kita tambahkan kata kunci final, maka artinya function tersebut tidak bisa di override lagi di class child nya
  3. Ini sangat cocok jika kita ingin mengunci implementasi dari sebuah method agar tidak bisa diubah lagi oleh class child nya
 */

class SosialMedia
{
  public string $username;
  public string $password;
}

class Facebook extends SosialMedia
{
  final public function login(string $username, string $password): bool
  {
      return true;
  }
}


class FakeFacebook extends Facebook
{
  //error
  /*
  public function login(string $username, string $password): bool
  {
      return false;
  } */
}