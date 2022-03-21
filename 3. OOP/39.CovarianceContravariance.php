<?php
/* Covariance
  1. Saat kita meng override function dari parent class, biasanya di child class kita akan membuat function yang sama dengan function yang di parent
  2. Covariance memungkinkan kita meng override return function yang di parent dengan return value yang lebih spesifik
 */
require_once "Data/27.CovarianceContravariance.php";
use Data\CatShelter;
use Data\DogShelter;
use Data\AnimalFood;

$catShelter = new CatShelter;
$cat = $catShelter->adopt("Luna");

$dogShelter = new DogShelter;
$dog = $dogShelter->adopt("Momo");

 /*Contravariance
  1. Sedangkan contravariance adalah memperbolehkan sebuah child class untuk membuat function argument yang lebih tidak spesifik dibandingkan parent nya
  */
$cat->eat(new AnimalFood);
$dog->eat(new AnimalFood);