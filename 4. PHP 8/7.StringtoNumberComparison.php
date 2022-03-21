<?php
/* String to Number Comparison
1. Salah satu yang membingungkan di PHP adalah ketika kita melakukan perbandingan number dan string
2. Misal saat kita bandingkan 0 == “eko”, maka hasilnya true
3. Kenapa true? Karena PHP akan melakukan type jugling dan mengubah “eko” menjadi 0, sehingga hasilnya true
4. Di PHP 8, khusus perbandingan String ke Number diubah, agar tidak membingungkan
5. https://wiki.php.net/rfc/string_to_number_comparison 
*/

/*String to Number Comparison di PHP 8
1. 0 == "0" -> Sebelum php8: true , Sesudah php8: true
2. 0 == "0.0" -> Sebelum php8: true , Sesudah php8: true
3. 0 == "foo" -> Sebelum php8: true , Sesudah php8: false
4. 0 == "" ->  Sebelum php8: true , Sesudah php8: false
5. 42 => "   42" ->  Sebelum php8: true  , Sesudah php8: true
6. 42 => "42foo" Sebelum php8: true , Sesudah php8: false */