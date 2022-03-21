<!-- Switch Statement
  1. kadang kita butuh menggunakan kondisi if statement sederhana, seperti menggunaka perbadingan ==
  2. Switch adalah statement percabangan yg sama dgn if, namun lebih sederhana pembuatannya
  3. kondisi di switch statement hanya utk perbadingan. -->

<!-- Kode Menggunakan If Statement  -->
<?php
$nilai = "A";

if ($nilai == "A"){
  echo "Anda Lulus dengan sangat baik" . PHP_EOL;
} else if ($nilai == "B" || $nilai == "C"){
  echo "Anda Lulus" . PHP_EOL;
}else if ($nilai == "D"){
  echo "Anda Tidak Lulus" . PHP_EOL;
}else {
  echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
}
echo "</br>";

?>

<!-- Kode menggukan Switch Statement  -->
<?php
$nilai = "D";

switch($nilai){
  case "A":
    echo "Anda Lulus dengan sangat baik" . PHP_EOL;
    break;
  case "B":
  case 'C':
    echo "Anda Lulus" . PHP_EOL;
    break;
  case 'D':
    echo "Anda Tidak Lulus" . PHP_EOL;
    break;
  default:
    echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
    break;
}
echo "</br>"
?>

<!-- Syntak alternatif 
sama dengan if, switch statement juga bisa tanpa menggunaka kurung kurawan '{}', namun menggunakan switch sttement kita hrus menambahkan endswitch.-->

<!-- Syntak alternatif -->
<?php
$nilai = "E";

switch($nilai):
  case "A":
    echo "Anda Lulus dengan sangat baik" . PHP_EOL;
    break;
  case "B":
  case 'C':
    echo "Anda Lulus" . PHP_EOL;
    break;
  case 'D':
    echo "Anda Tidak Lulus" . PHP_EOL;
    break;
  default:
    echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
    break;
  endswitch;
?>