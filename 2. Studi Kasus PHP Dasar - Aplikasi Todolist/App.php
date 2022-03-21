<?php
require_once  __DIR__ . "/Model/Todolist.php";
require_once __DIR__ . "/BusniessLogic/ShowTodoList.php";
require_once __DIR__ . "/BusniessLogic/AddTodoList.php";
require_once __DIR__ . "/BusniessLogic/RemoveTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi Todolist" . PHP_EOL;

viewShowTodoList();









?>