<?php


interface HasBrand
{
  function getBrand(): string;
}

interface IsMaintenance
{
  function IsMaintenance(): bool;
}

interface Car extends HasBrand
{
  function drive():void;

  function grtTire(): int;
}


class Avanza implements Car , IsMaintenance
{
  function drive(): void
  {
    echo "Drive Avanza" . PHP_EOL;
  }

  function grtTire(): int
  {
    return 4;
  }

  function getBrand(): string{
    
    return "Toyota";
  }

  function IsMaintenance(): bool{
    return "True";
  }

}