<?php
/* Constructor Property Promotion
 1. Kadang kita sering sekali membuat property sekaligus mengisi property tersebut menggunakan constructor
 2. Sekarang kita bisa otomatis langsung membuat property dengan via constructor
 3. Fitur ini mirip sekali di bahasa pemrograman seperti Kotlin dan TypeScript
 4. https://wiki.php.net/rfc/constructor_promotion 
 */

 // Kode : Property dan Constructor
 class Product
 {
   var string $id;
   var string $name;
   var int $price;
   var int $quality;

   public function __construct(string $id, string $name, int $price, int $quality)
   {
     $this->id = $id;
     $this->name = $name;
     $this->price = $price;
     $this->quality = $quality;
   }
 }

// Kode : Constructor Property Promotion
class Product2
 {
   public function __construct( 
                      public string $id,
                      public string $name,
                      public int $price = 0 ,
                      public int $quality = 0,
                      private bool $expensive = false)
   {
     
   }
 }

$product = new Product2(id: "1", name: "mie ayam", price: 15000);
 var_dump($product);
echo  $product->name . PHP_EOL;
echo $product->price . PHP_EOL;