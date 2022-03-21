<?php
// IMPORT
/* use Keyword
  1. Sebelumnya kita sudah tahu bahwa untuk menggunakan class, function atau constant di namespace kita perlu menyebutkan nama namespace nya di awal
  2. Jika terlalu sering menggunakan class, function atau constant yang sama, maka terlalu banyak duplikasi dengan menyebut namespace yang sama berkali-kali
  3. Hal ini bisa kita hindari dengan cara mengimport class, function atau constant tersebut dengan menggunakan kata kunci use
 */
require_once "Data/9.Import.php";

use Data\One\Conflict; // cuma boleh 1 namespace tdk bisa gunakan data\two\conflict;
use function Helper\helpme;
use const Helper\APPLICATION;

$conflict = new Conflict();
$conflict2 = new \Data\One\Conflict;

helpme();
echo APPLICATION . PHP_EOL;

/*  Alias
  1. Saat kita menggunakan use, artinya kita tidak perlu lagi menggunakan nama namespace diawal class ketika kita ingin membuat class tersebut
  2. Namun bagaimana jika kita ternyata nama class nya sama?
  3. Untungnya PHP memiliki fitur yang namanya alias
  4. Alias adalah kemampuan membuat nama lain dari class, function atau constant yang ada
  5. Kita bisa menggunakan kata kunci 'as' setelah melakukan use
 */
use Data\One\Conflict as Conflict3;
use Data\two\Conflict as Conflict4;
use function Helper\helpme as help;
use const Helper\APPLICATION as APP;

$conflict3 = new Conflict3();
$conflict4 = new Conflict4();

help();
echo APP . PHP_EOL;

/* Group use Declaration
  1. Kadang kita butuh melakukan import banyak hal di satu namespace yang sama
  2. PHP memiliki fitur grup use, dimana kita bisa import beberapa class, function atau constant dalam satu perintah use
  3. Untuk melakukan itu, kita bisa menggunakan kurung { } 
 */

use Data\One\{Conflict as conflict5, Sample, Dummy};
use function Helper\{helpme as helpSaya};

$conflict5 = new conflict5();
$sample = new Sample();
$dummy = new Dummy();

helpSaya();