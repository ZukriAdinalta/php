<!-- Tipe Data Array 
  1. array adalah tipe data yg berisikan kosong atau banyak data
  2. array di php bisa berisi data dgn jenis berbeda-beda.
  3. bisa menambahkan data ke array sebanyak-banyaknya, tdk dibatasi kapasitas -->
<!-- Kode Mebuat Array -->
<?php
$value = array(1, 2, 3, 4, 5.5, "apa");
var_dump($value);

$names = ["Zukri", "Adinalta", 26, 1.1];
var_dump($names);
?>

<!-- Operasi Array
  1. '$array[index]' =>  mengakses data di array pada nomor index 
  2. '$array[index] = value'  => mngubah data di array pada nomor index dgn value baru  
  3. '$array[]=value' => menambahkan data di array pada posisi paling belakang
  4. 'unset($array[index])' => menhapus data di array.
  5. 'count($array)' => mengambil total di array
-->
<p>Operasi Array</p>
<?php
$name = ["Zukri", "Adinalta"];
var_dump($name[0]);

$name[0] = "Budi";
var_dump($name);

unset($name[1]);
var_dump($name);

$name[] = "Zukri";
var_dump($name);

var_dump(count($name));
?>

<!-- Array Sebagai MAP
  1. kebanyakan di bahasa pemrograman, terdapat tipe data bernama MAP, Yaitu asosiasi key dan value 
  2. namun di php, Map bisa dibuat menggunakan Array
  3. secara default array menggunakan 'index(number)' sbg key dan value nya bisa bebas memasukan ke dlm array.
  4. bisa juga mengubah index ny tidak menggunakan number, bisa menggunakan tipe data lain, seperti string.  -->

<!-- Kode membuat Map -->
<?php
$zukri = array(
  "id" => "Zukri",
  "Nama" => "Zukri Adinalta",
  "Age" => 26
);
var_dump($zukri);
var_dump($zukri["id"]);

$eko = [
  "id" => "Eko",
  "Nama" => "Eko Kurniawan",
  "Age" => 30
];
var_dump($eko);

?>

<!-- Array Di dalam Array
array diphp bisa berisikan data apapun, jd bisa membuat array di dlm array jika diperlukan-->

<?php
$zukri = array(
  "id" => 1,
  "Nama" => "Zukri Adinalta",
  "Age" => 26,
  "Addres" => [
    "city" => "Padang",
    "Country" => "Indonesia"
  ]
);
var_dump($zukri);
var_dump($zukri["Addres"]["Country"]);
?>