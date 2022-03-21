<?php
namespace Repository{
  
  require_once __DIR__ . "/../../2.ExecuteSQL/2.ExecuteSQL.php";
  $connection = getConnection();
    use Model\Comment;

interface CommentRepository
  {
    function insert(Comment $comment): Comment; // : Comment -> ritenvalue
    function findById(int $id): ?Comment;
    function findAll(): array;
    
  }

  class CommentRepositoryImpl implements CommentRepository
  {
    public function __construct(private \PDO $connection)
    {
      
    }

    public function insert(Comment $comment): Comment
    {
      $sql = "INSERT INTO comment(email, comment) VALUES (?, ?)";
      $statement = $this->connection->prepare($sql);
      $statement->execute([$comment->getEmail(), $comment->getComment()]);

      $id = $this->connection->lastInsertId();
      $comment->setId($id);

      return $comment;
    }

    public function findById(int $id): ?Comment
    {
      $sql = "select * from comment where id = ?";
      $Statement = $this->connection->prepare($sql);
      $Statement->execute([$id]);

      if ($row = $Statement->fetch()){
        return new Comment(
          id: $row["id"],
          email: $row["email"],
          comment: $row["comment"]
        );
      }else {
        return null;
      }
    }

    public function findAll(): array
    {
      $sql = "select * from comment";
      $Statement = $this->connection->query($sql);
      $array = [];
      

      while ($row = $Statement->fetch()){
        $array[] = new Comment(
          id: $row["id"],
          email: $row["email"],
          comment: $row["comment"]
        );
      }
      return $array;
    }

  }
}