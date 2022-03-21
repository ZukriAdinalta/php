<!-- Callback Function
  1. callback function sebuah mekanisme sebuah function memanggil function lainya sesuai dgn yg diberikan argument.
  2. Namun di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable
  3. dan untuk mennggil callback function tersebut, kita menggunakan function 'call_user_func(callable, argument)' -->

<!-- Callback Function -->
<?php
function sayHello(string $name, callable $filter)
{
  //   $filter($name);
  // echo "<p> Hello $name</p>";
  $finalName = call_user_func($filter, $name);
  echo "<p> Hello $finalName </p>";
}

sayHello("Zukri", function($name) {return strtoupper($name); });
// sayHello("Zukri", fn() => strtoupper($name)); // allow
sayHello("zukri", "strtoupper");
sayHello("ZUKRI", "strtolower" );
?>