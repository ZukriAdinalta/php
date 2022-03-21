<?php
class Person{
  const AUTHOR = "Zukri Adinalta";
  const USERNAME = "KUMABBJ";

  function info()
  {
    echo "AUTHOR : " .self::AUTHOR . PHP_EOL;
    echo "USERNAME : " .self::USERNAME . PHP_EOL;
  }
}
?>