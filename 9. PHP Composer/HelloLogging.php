<?php
require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log =  new Logger("BelajarComposer");
$log->pushHandler(new StreamHandler("Application.log", Logger::INFO));

$log->info("Hello Word");
$log->info("Selmat Belajar Composer");