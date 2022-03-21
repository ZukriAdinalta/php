<?php
/* Polymorphism
  1. Polymorphism berasal dari bahasa Yunani yang berarti banyak bentuk.
  2. Dalam OOP, Polymorphism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain
  3. Polymorphism erat hubungannya dengan Inheritance
 */

 require_once "Data/14.Polymorphism.php";

 $company = new Company();

 $company->programmer = new Programmer("Eko");
 var_dump($company);
 $company->programmer = new BackendProgrammer("Zukri");
 var_dump($company);
 $company->programmer = new FontendProgrammer("Budi");
 var_dump($company);

 sayHello(new Programmer("Eko"));
 sayHello(new BackendProgrammer("Zukri"));
 sayHello(new FontendProgrammer("Budi"));