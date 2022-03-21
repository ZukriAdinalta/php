<?php
namespace Data;

abstract class animal
{
  public string $name;
  public abstract function run();
}

class Cat extends animal
{
  public function run()
  {
    echo "Cat $this->name is running " . PHP_EOL;
  }
}

class Dog extends animal
{
  public function run()
  {
    echo "Dog $this->name is running " . PHP_EOL;
  }
}