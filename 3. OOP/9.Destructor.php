<?php
/* Destructor
  1. Jika constructor adalah function yang akan dipanggil ketika object dibuat
  2. Destructor adalah function yang akan dipanggil ketika object dihapus dari memory
  3. Biasanya ketika object tersebut sudah tidak lagi digunakan, atau ketika aplikasi akan mati
  4. Untuk membuat function destructor, kita bisa menggunakan nama function __destruct()
  5. Khusus untuk destructor, kita tidak boleh menambahkan function argument
  6. Dalam penggunaan sehari-hari, ini misal cocok untuk menutup koneksi ke database atau menutup proses menulis ke file, sehingga tidak terjadi memory leak
 */

 require_once "Data/6.Destructor.php";
 $person = new Person2("Zukri", "Padang");
 $person2 = new Person2("Eko", null);

 echo "Program Selesai" . PHP_EOL;