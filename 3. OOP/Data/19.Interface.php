<?php
namespace Data;

interface Car
{
  function drive():void;

  function grtTire(): int;
}


class Avanza implements Car
{
  function drive(): void
  {
    echo "Drive Avanza" . PHP_EOL;
  }

  function grtTire(): int
  {
    return 4;
  }
}