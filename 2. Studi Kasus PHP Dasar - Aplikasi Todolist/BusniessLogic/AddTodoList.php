<?php
// Menambah Todo ke list
function addTodoList(string $todo){
  global $todolist;

  $number = sizeof($todolist) + 1;
  $todolist[$number] = $todo;
}
?>