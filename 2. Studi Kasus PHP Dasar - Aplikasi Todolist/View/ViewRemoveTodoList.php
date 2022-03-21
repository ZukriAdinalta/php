<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusniessLogic/RemoveTodoList.php";

function viewRemoveTodoList(){

  echo "MENGHAPUS TODO" . PHP_EOL;

  $pilihan = input("Nomor (X Untuk Batal)");

  
  if ($pilihan == "x"){
    echo "Batal Menghapus Todo" . PHP_EOL;
  } else {
    $success = RemoveTodoList($pilihan);
    if($success){
      echo "Sukses Hapus Todo $pilihan" . PHP_EOL;
    }else{
      echo "Gagal  Hapus Todo $pilihan" . PHP_EOL;
    }

  }
  
}
?>