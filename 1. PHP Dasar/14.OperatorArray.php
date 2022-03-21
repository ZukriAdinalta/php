<!-- Operator Array 
Di PHP array memiliki operator khusus, mungkin mirip dgn operator sebelumnya tapi cara kerja nya sedikit berbeda-->

<!-- Operasi Operator Array 
  1. Union => "$a + $b" => menggabungkan array $a dan $b
  2. Equality => "$a == $b" => true jika $a dan $b memiliki key-valeu sama
  3. Identity => "$a === $b" => true jika $a dan $b memiliki key-value sama dan posisi sama
  4. Inequality => "$a != $b" dan "$a <> $b" => true jika $a dan $b tdk sama
  5. NonIdentity => "$a !== $b" => true jika $a dan $b tdk identik -->

<!-- Operasi Array -->
<?php
$first = [
  "first_name" => "Zukri"
];

$last = [
  "first_name" => "Eko",
  "last_name" => "Adinalta"
];

var_dump($first + $last); // di utamakan $first jika di balik maka $last di utamakna yaitu "first_name" => "Eko".
?>

<?php
$a = [
  "first_name" => "Zukri",
  "last_name" => "Adinalta"
];
$b = [
  "last_name" => "Adinalta",
  "first_name" => "Zukri"
];

var_dump($a == $b); // walaupun posisi beda diagap sama karena key-value nya sama maka hasilnya true.
var_dump($a === $b); // mengecek urutan/posisi key valuenya maka hasilnya false. karena posisnya beda
?>