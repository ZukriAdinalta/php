<?php
/*
    1. PHP adalah bahasa pemrograman yang dynamic
    2. Kita tahu sebenarnya saat membuat variabel, parameter, argument, return value, sebenarnya di PHP kita tidak wajib menyebutkan tipe datanya, dan PHP bisa berubah-ubah tipe data
    3. Saat kita tambahkan tipe data, maka secara otomatis PHP akan memastikan tipe data tersebut harus sesuai dengan tipe data yang sudah kita definisikan
    4. Di PHP 8, ada fitur Union Types, dimana kita bisa menambahkan lebih dari satu tipe data ke property, argument, parameter, atau return value
    5. Penggunaan Union Types bisa menggunakan tanpa | diikuti dengan tipe data selanjutnya
    6. https://wiki.php.net/rfc/union_types_v2

*/

// Kode : Union Types di Property

class Example
{
    public string|int|bool|array $data;


}

$example = new Example();
$example->data = "zukri";
$example->data = 1;
$example->data = true;
$example->data = ["zukri"];

function sampleFunction(string|array $data): void
{
    if (is_string($data)){
        echo "Argument is String" . PHP_EOL;
    }else if (is_array($data)){
        echo "Argument is Array" . PHP_EOL;
    }
}

sampleFunction("zukri");
sampleFunction(["zukri"]);

//Kode : Union Type di Return Value
function sample(string|array $data): string|array 
{
    if (is_array($data)){
        return ["Array"];
    }else if (is_string($data)){
        return "String";
    }
}

// echo sample("zukri") . PHP_EOL ;
// echo sample([]) . PHP_EOL ;
var_dump(sample([]));
var_dump(sample("zukri"));