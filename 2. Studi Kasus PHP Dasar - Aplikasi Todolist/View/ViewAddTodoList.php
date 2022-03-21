<?php
require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusniessLogic/AddTodoList.php";


function viewAddTodoList(){
  
  echo "MENAMBAH TODO" . PHP_EOL;

  $todo = input("Todo (X untuk batal) ");

  if ($todo == "x"){
    echo "Batal Menambahkan Todo" . PHP_EOL;
  }else{
    addTodoList($todo);
  }
}
?>