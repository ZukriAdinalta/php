<?php
require_once "../Model/Todolist.php";
require_once "../BusniessLogic/AddTodoList.php";
require_once "../BusniessLogic/ShowTodoList.php";
require_once "../BusniessLogic/RemoveTodoList.php";

addTodoList("Zukri");
addTodoList("Adinalta");
addTodoList("budi");
addTodoList("eko");
addTodoList("jon");
addTodoList("asnu");
showTodoList();

RemoveTodoList(3);
showTodoList();

RemoveTodoList(2);
showTodoList();

$success = RemoveTodoList(5);
var_dump($success);
showTodoList();
?>