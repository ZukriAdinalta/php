<?php

require_once __DIR__ .  "/../Entity/Todolist.php";
require_once __DIR__ .  "/../Repository/TodolistRepository.php";
require_once __DIR__ .  "/../Service/TodolistService.php";
require_once __DIR__ .  "/../Config/Database.php";

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
use Entity\Todolist;

function testShowTodolist(): void
{
  $connection = \Config\Database::getConnection();
  $todolistRepository = new TodolistRepositoryImpl($connection);
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistService->addTodolist("Belajar PHP");
  $todolistService->addTodolist("Belajar OPP");
  $todolistService->addTodolist("Belajar PHP Database");
  $todolistService->showTodolist();
}


function testAddTodolist(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar OPP");
    $todolistService->addTodolist("Belajar PHP Database");

    // $todolistService->showTodolist();
}

function testRemoveTodolist(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);


    echo $todolistService->removeTodolist(6) . PHP_EOL;
    echo $todolistService->removeTodolist(4) . PHP_EOL;
    echo $todolistService->removeTodolist(3) . PHP_EOL;
    echo $todolistService->removeTodolist(2) . PHP_EOL;
    echo $todolistService->removeTodolist(1) . PHP_EOL;
}

testShowTodolist();
// testRemoveTodolist();