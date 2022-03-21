<?php
class Manager{
  var string $name;
  var string $title;
  
  public function __construct(string $name = "", string $title = "Manager")
  {
    $this->name = $name;
    $this->title = $title;
  }
}

class VicePresident extends Manager{

  public function __construct(string $name = "")
  {
    //tdk wajib tp di rekomendasikan
    parent::__construct($name, "VP");
  }
  
}