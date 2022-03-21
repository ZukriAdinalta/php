<?php
trait A
{
    function doA(): void

    {
      echo "a" . PHP_EOL;
    }

    function doB(): void
    {
      echo "b" . PHP_EOL;
    }
}

trait B
{
    function doA(): void
    {
      echo "A" . PHP_EOL;
    }

    function doB(): void
    {
      echo "B" . PHP_EOL;
    }
}

class TraitConflict
{
  use A, B{
    A::doA insteadOf B; // dr function doA kita pakai trait A dr pada B
    B::doB insteadOf A; // dr function doB kita pakai trait B dr pada A
  }
}