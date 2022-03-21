<?php
/*Named Argument
1. Biasanya saat kita memanggil function, maka kita harus memasukkan argument atau parameter sesuai dengan posisinya
2. Dengan kemampuan named argument, kita bisa memasukkan argument atau parameter tanpa harus mengikuti posisi nya
3. Namun penggunaan named argument harus disebutkan nama argument atau parameter nya
4. Named argument juga menjadikan kode program mudah dibaca ketika memanggil function yang memiliki argument yang sangat banyak
5. https://wiki.php.net/rfc/named_params 
 */

// Kode Function
function sayHello(string $first, string $last): void
{
  echo "Hello $first $last" . PHP_EOL;
}
echo sayHello("Zukri", "Adinalta") . PHP_EOL;

// Kode : Named Argument
echo sayHello(last: "Adinalta", first: "Zukri") . PHP_EOL;