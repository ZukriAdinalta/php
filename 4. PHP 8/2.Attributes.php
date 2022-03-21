<?php
/* Attributes
  1. Attributes adalah menambahkan metadata terhadap kode program yang kita buat.
  2. Fitur ini adalah fitur yang sangat baru sekali di PHP, dan bisa memungkinkan fitur ini bakal diadopsi sangat banyak oleh framework-framework di PHP di masa yang akan datang
  3. Fitur ini jika di bahasa pemrograman seperti Java bernama Annotation, Attributes di C# atau Decorator di Python dan JavaScript
  4. https://www.php.net/manual/en/language.attributes.php 
  5. https://wiki.php.net/rfc/attributes_v2 
 */

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)]
class NotBlank
{
  
}

//Attribute Class  
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class Length
{
  public int $min;
  public int $max;

  public function __construct(int $min, int $max)
  {
    $this->min = $min;
    $this->min = $max;
  }
}

/* Menggunakan Attribute
  1. Attribute bisa kita gunakan di berbagai tempat, seperti di Class, Function, Method, Property, Class Constant dan Parameter
  2. Untuk menggunakan Attribute, kita cukup gunakan tanda #[NamaAttribute] di target yang kita tentukan
 */
class LoginRequest
{
  #[Length(min:4, max:10)] // Kode : Menggunakan Attribute Class
  #[NotBlank]
  public ?string $username;

  #[Length(min:8, max:10)] // Kode : Menggunakan Attribute Class
  #[NotBlank]
  public ?string $password;
}

function validate(object $object): void
{
  $class = new ReflectionClass($object);
  $properties = $class->getProperties();
  foreach ($properties as $property){
    validateNotBlank($property, $object);
    validateLength($property, $object);
  }
}

function validateNotBlank(ReflectionProperty $property, object $object): void
{
  $attributes = $property->getAttributes(NotBlank::class);
  if (count($attributes) > 0){
    if (!$property->isInitialized($object))
    throw new Exception("Property $property->name is null");
  } if (!$property->getValue($object) == null) {
  throw new Exception("Property $property->name is null");
  } 
}


function validateLength(ReflectionProperty $property, object $object): void
{

  if ( !$property->isInitialized($object) || $property->getValue($object) == null)
    return;
    
  $value = $property->getValue($object);
  $attributes = $property->getAttributes(Length::class);
  foreach ($attributes as $attribute){
    $length = $attribute->newInstance();
    if (strlen($value)< $length->min)
        throw new Exception("Properties $property->name size is too short");
    if (strlen($value)< $length->max)
        throw new Exception("Properties $property->name size is too long");
  }
}


$request = new LoginRequest();
$request->username = "Zukri";
$request->password = "Rahasia";
echo "username : $request->username" . PHP_EOL ;
echo "password : $request->password" . PHP_EOL ;

// validate($request);

/* Attribute Target
  1. Secara default, attribute bisa digunakan di semua target (class, function, method, property, dan lain-lain)
  2. Jika kita ingin membatasi hanya bisa digunakan di target tertentu, kita bisa tambahkan informasinya ketika membaut class attribute
 */
// #[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)]

 /* Attribute Class 
  1. Attribute class  adalah class biasa, kita bisa menambahkan property, function / method dan constructor jika kita mau
  2. Ini cocok ketika kita butuh menambahkan informasi tambahan di attribute class
  */