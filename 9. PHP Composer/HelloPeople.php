<?php
require_once __DIR__ . '/vendor/autoload.php';

use Kuma\Data\People;

$people = new People("Kuma");

echo $people->sayHello("Zukri");