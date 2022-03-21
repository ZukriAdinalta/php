<?php
require_once "../Model/Todolist.php";
require_once "../BusniessLogic/AddTodoList.php";

addTodoList("Zukri");
addTodoList("Adinalta");
var_dump($todolist);
?>