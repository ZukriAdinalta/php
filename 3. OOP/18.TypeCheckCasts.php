<?php
/*Type Check & Casts
  1. Sebelumnya kita sudah tau cara melakukan konversi tipe data bukan class
  2. Khusus untuk tipe data object, kita tidak perlu melakukan konversi secara eksplisit
  3. Namun agar aman, sebelum melakukan casts, pastikan kita melakukan type check (pengecekan tipe data), dengan menggunakan kata kunci instanceof
  4. Hasil operator instanceof adalah boolean, true jika tipe data sesuai, false jika tidak sesua
 */

require_once "Data/15.TypeCheckCasts.php";


sayHello(new Programmer("Eko"));
sayHello(new BackendProgrammer("Zukri"));
sayHello(new FontendProgrammer("Budi"));