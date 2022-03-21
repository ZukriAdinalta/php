<?php
/* Visibility
  1. Visibility / Access modifier adalah kemampuan properties, function dan constant dapat diakses dari mana saja
  2. Secara default, properties, function dan constant yang kita buat di dalam class bisa diakses dari mana saja, atau artinya dia adalah public
  3. Selain public, masih ada beberapa visibility lainnya
  4. Secara default kata kunci var untuk properties adalah sifatnya public
 */
/*Access Level
  1. public => class : ya, subClass : ya, World : ya
  2. protected => class : ya, subClass : ya, World : tidak
  3. private => class : ya, subClass : tidak, World : tidk
*/

require_once "Data/10.Visibility.php";

$product = new product("Apple", 1000);

// $product->name; // error karena propertiesnya private
// $product->price; // error karena propertiesnya private

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new productDummy("aggur", 5000);
$dummy->info();