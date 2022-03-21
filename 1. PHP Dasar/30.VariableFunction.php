<!-- Variable Function
  1. PHP Mendukung konsep yg bernama variable function
  2. variable function adalah kemapuan memanggil sebuah function dari value yang terdapat di sebuah variable
  3. Untuk menggunakan variable function bisa secara langsung memanggil "$namaVariable()", jika ingin menabahkan argument, kita menggunaakan "$namaVariable(argument)" -->

<!-- Kode Variable Function -->
<?php
function foo(){
  echo "<p>FOO</p>";
}
function bar(){
  echo "<p>BAR</p>";
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();
?>

<?php
function sayHello(string $name, $filter){
  $finalName = $filter($name);
  echo "<p>Hello $finalName </p>";
}

function sampleFunction(string $name): string{
  return"<p>Sample $name </p>";
}
SayHello("Zukri", "sampleFunction");
SayHello("zukrI", "strtoupper");
SayHello("ZUKRi", "strtolower");
?>