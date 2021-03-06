<?php

namespace Repository {

  use Entity\Todolist;
    use PDO;

interface TodolistRepository
    {
      
      function save(Todolist $todolist): void;

      function remove(int $number): bool;

      function findAll(): array;

    }

  class TodolistRepositoryImpl implements TodolistRepository
  {
      public array $todolist = array();
      
      private PDO $connection;

      public function __construct(PDO $connection)
      {
        $this->connection = $connection;
      }

      function save(Todolist $todolist): void
      {
          // $number = sizeof($this->todolist) + 1;
          // $this->todolist[$number] = $todolist;

          $sql = "INSERT INTO todolist(todo) VALUES (?)";
          $statement = $this->connection->prepare($sql);
          $statement->execute([$todolist->getTodo()]);
      }

      function remove(int $number): bool
      {
          // if ($number > sizeof($this->todolist)){
          //     return false;
          // }
          // for($i = $number; $i < sizeof($this->todolist); $i++){
          //     $this->todolist[$i] = $this->todolist[$i + 1];
          // }
          // unset($this->todolist[sizeof($this->todolist)]);
          // return true;

          $sql = "SELECT id FROM todolist WHERE id = ?";
          $statement = $this->connection->prepare($sql);
          $statement->execute([$number]);

          if ($statement->fetch()){
            // todo list ada
            $sql = "DELETE FROM todolist WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);
            return true;

          }else{
            // jika todolist tdk ada
            return false;
          }
      }

      function findAll(): array
      {
        // return $this->todolist;
      $sql = "select id, todo from todolist";
      $Statement = $this->connection->prepare($sql);
      $Statement->execute();
      
      $array = [];
      
      foreach ($Statement as $row){
        $todolist = new Todolist();
        $todolist->setId($row['id']);
        $todolist->setTodo($row['todo']);

        $array[] = $todolist;

      }
      return $array;
      }
  }

}