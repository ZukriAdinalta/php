<?php
/* Abstract Function
  1. Saat kita membuat class yang abstract, kita bisa membuat abstract function juga di dalam class abstract tersebut
  2. Saat kita membuat sebuah abstract function, kita tidak boleh membuat block function untuk function tersebut
  3.Artinya, abstract function wajib di override di class child
  4. Abstract function tidak boleh memiliki access modifier private
 */

 require_once "Data/17.AbstractFunction.php";

 use Data\Cat;

 $cat = new Cat();
 $cat->name = "Luna";
 $cat->run();