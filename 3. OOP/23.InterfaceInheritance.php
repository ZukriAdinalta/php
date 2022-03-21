<?php
/* Interface Inheritance
  1. Sebelumnya kita sudah tahu kalo di PHP, child class hanya bisa punya 1 class parent
  2. Namun berbeda dengan interface, sebuah child class bisa implement lebih dari 1 interface
  3. Bahkan interface pun bisa implement interface lain, bisa lebih dari 1. Namun jika interface ingin mewarisi interface lain, kita menggunakan kata kunci extends, bukan implements
 */

 require_once "Data/20.InterfaceInheritance.php";

 $car = new Avanza();
 $car->drive(). PHP_EOL ;
echo "{$car->grtTire()}" . PHP_EOL;
echo "{$car->getBrand()}" . PHP_EOL;
echo "{$car->IsMaintenance()}" . PHP_EOL;