<?php

class ValidationUtil
{
  static function validate(LoginRequest $request){
    if (!isset($request->userName)){
      throw new ValidationException("Username is not set");
    } else if (!isset($request->Password)){
      throw new ValidationException("Password is not set");
    } else if (is_null($request->userName)){
      throw new Exception("Username is Empty");
    }else if (is_null($request->Password)){
      throw new Exception("Password is Empty");
    }
  }

  static function ValidateReflection($request)
  {
    $reflection = new ReflectionClass($request);
    $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

    foreach ($properties as $property){
      if (!$property->isInitialized($request)){
        throw new ValidationException("$property->name is no set");
      } else if (is_null($property->getValue($request))){
        throw new ValidationException("$property->name is null");
      }
    }
  }
}