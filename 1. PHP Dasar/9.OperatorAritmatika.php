<!-- Operator Aritmatika -->
<!-- Positif '+$variable', Negatif '-$variable', Penambahan '$variable + $variable', Pengurangan '$variable - $variable', Perkalian '$variable * $variable', Pembagian '$variable / $variable', sisa bagi '$variable % $variable', Pangkat '$variable ** $variable'.  -->

<!-- Kode Operator Aritmatika -->
<?php
$a = 5;
$b = 2;
$result = $a * $b;
var_dump($result);

$resultNegatif = -$result;
var_dump($resultNegatif);

$resultPositif = +$result;
var_dump($resultPositif);

$resultModulo = 100 % 3;
var_dump($resultModulo);
?>