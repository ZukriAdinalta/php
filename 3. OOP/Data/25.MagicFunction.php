<?php
class Student
{
  public string $id;
  public string $name;
  public int $value;
  
//__toString() Function
  public function __toString(): string
  {
    return "Student id:$this->id, name:$this->name, value:$this->value ";
  }

// __invoke() Function
  public function __invoke(...$arguments): void
  {
    $join = join(",", $arguments );
    echo "Invoke Student with argument $join" . PHP_EOL;
  }

  public function __debugInfo(): array
  {
    return
    [
      "id" => $this->id,
      "name" => $this->name,
      "value" => $this->value,
      "autor" => "Zukri Adinalta"
    ];
  }
}