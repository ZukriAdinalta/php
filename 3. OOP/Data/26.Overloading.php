<?php
class Zero
{
  private array $properties = [];

  public function __get($name) // mengabil data berdasarkan properti name nya
  {
    // echo "Akses Properti $name" . PHP_EOL;
    // return "CONTOH";

    return $this->properties[$name];
  }

  public function __set($name, $value) // mengubah data berdasarkan propertie namenya
  {
    // echo " Set Properti $name Dengan value $value" . PHP_EOL;
    $this->properties[$name] = $value;
  }

  public function __isset($name): bool // mengecek apakah sudah di set berdasarkan properti name nya
  {
    return isset($this->properties[$name]);
  }

  public function __unset($name) // meng unset berdasarkan propertie namenya
  {
    unset($this->properties[$name]);
  }

// Kode Function Overloading

    public function __call($name, $arguments)
    {
      $join = join(",", $arguments);
      echo "Call function $name dengan arguments $join " . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
      $join = join(",", $arguments);
      echo "Call static function $name dengan arguments $join " . PHP_EOL;
    }
}