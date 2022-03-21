<?php
require_once "../Model/Todolist.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusniessLogic/RemoveTodoList.php";
require_once "../BusniessLogic/ShowTodoList.php";
require_once "../BusniessLogic/AddTodoList.php";

addTodoList("Zukri");
addTodoList("Adinalta");

showTodoList();
viewRemoveTodoList();
showTodoList();

?>