<?php
/* Function Overriding
  1. Function overriding adalah kemampuan mendeklarasikan ulang function di child class, yang sudah ada di parent class
  2. Saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari class child, function yang di class parent tidak bisa diakses lagi
 */

 require_once "Data/11.FunctionOverriding.php";

 $manager = new Manager();
 $manager->name = "Adi";
 $manager->sayHello("eko");

 $vp = new VicePresident();
 $vp->name ="Zukri";
 $vp->sayHello("eko");