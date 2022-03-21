<?php
require_once "vendor/autoload.php";

use Kuma\BelajarPhpComposerHello\Customer;

$customer = new Customer("kuma");
$customer->sayHello("zukri");