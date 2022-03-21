<?php

namespace Data;

//animal food
class Food
{

}

class AnimalFood extends Food
{
  
}

// Inheritan
abstract class animal
{
  public string $name;
  public abstract function run();
  //Contravariance
  public abstract function eat(AnimalFood $animalFood): void;
}

class Cat extends animal
{
  public function run()
  {
    echo "Cat $this->name is running " . PHP_EOL;
  }

//Contravariance
  public function eat(AnimalFood $animalFood): void
  {
    echo "cat is eating" . PHP_EOL;
  }
}

class Dog extends animal
{
  public function run()
  {
    echo "Dog $this->name is running " . PHP_EOL;
  }
//Contravariance
  public function eat(Food $animalFood): void
  {
    echo "Dog is eating" . PHP_EOL;
  }
}


// Covariance
interface AnimalShelter
{
  function adopt(string $name): Animal;

}

class DogShelter implements AnimalShelter
{
  function adopt(string $name): Dog
  {
    $dog = new Dog();
    $dog->name = $name;
    return $dog;
  }


}

class CatShelter implements AnimalShelter
{
  function adopt(string $name): Cat
  {
    $cat = new Cat();
    $cat->name = $name;
    return $cat;
  }

}