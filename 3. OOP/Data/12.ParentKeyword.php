<?php

namespace Data;


class Shape{
  function getCorner(): int
  {
    return 0;
  }

}

class Rectangle extends Shape{

  public function getCorner(): int
  {
    return 4;
  }

  public function getParentCorner(): int
  {
    // return $this->getCorner(); // maka yg di akses getcorner rectangle
    return parent::getCorner(); // maka yg diakses adalah class parent (class induk)
  }

}