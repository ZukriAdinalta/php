<?php
/* Aturan Pembuatan Source Code
1. Pada composer.json sebelumnya, kita sudah menggunakan namespace ProgrammerZamanNow di directory src
2. Artinya jika kita import class di namespace ProgrammerZamanNow, nama dia akan include file di directory src
3. Jika namespace nya ProgrammerZamanNow, maka foldernya adalah src, jika namespace nya ProgrammerZamanNow\Data, maka foldernya adalah src/Data
4. Sedangkan untuk nama file, harus sama dengan nama class, jika nama class nya People, maka nama file harus People.php
 */
namespace Kuma\Data;

class People 
{
  public function __construct(private string $name)
  {
    
  }

  public function sayHello(string $name)
  {
    echo "Hello $name, my name is $this->name ";
  }

}