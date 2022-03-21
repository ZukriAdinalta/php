<?php
/* New String Functions
1. Di PHP 8, terdapat beberapa function untuk memanipulasi string
2. https://wiki.php.net/rfc/str_contains
3. https://wiki.php.net/rfc/add_str_starts_with_and_ends_with_functions
 */

/*String Function
1. str_contains($string, $contains) : bool => Mengecek apakah $string mengandung $contains
2. str_starts_with($string, $value) : bool => Mengecek apakah $string memiliki awal $value
3. str_ends_with($string, $value) : bool => Mengececk apakah $string memiliki akhir $value
 */

var_dump(str_contains("Zukri Adinalta", "Zukri")); // true
var_dump(str_contains("Zukri Adinalta", "Adinalta")); // true
var_dump(str_contains("Zukri Adinalta", "Eko")); // false

var_dump(str_starts_with("Zukri Adinalta", "Zukri")); // true
var_dump(str_starts_with("Zukri Adinalta", "Adinalta")); // false

var_dump(str_ends_with("Zukri Adinalta", "Zukri")); // false
var_dump(str_ends_with("Zukri Adinalta", "Adinalta")); // true