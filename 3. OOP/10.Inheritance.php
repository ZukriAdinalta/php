<?php
/* Inheritance
  1. Inheritance atau pewarisan adalah kemampuan untuk menurunkan sebuah class ke class lain
  2. Dalam artian, kita bisa membuat class Parent dan class Child
  3. Class Child, hanya bisa punya satu class Parent, namun satu class Parent bisa punya banyak class Child
  4. Saat sebuah class diturunkan, maka semua properties dan function yang ada di class Parent, secara otomatis akan dimiliki oleh class Child
  5. Untuk melakukan pewarisan, di class Child, kita harus menggunakan kata kunci extends lalu diikuti dengan nama class parent nya.
 */

 require_once "Data/7.Inheritance.php";

 $manager = new Manager();
 $manager->name = "Zukri";
 $manager->sayHello("Eko");

 $vp = new VicePresident();
 $vp->name = "Budi";
 $vp->sayHello("Gunawan");

 $mg = new Manager2();
 $mg->name = "Agus";
 $mg->sayHello("Adi");