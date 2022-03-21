<?php

function validateLoginRequest(LoginRequest $request){

  if (!isset($request->userName)){
    throw new ValidationException("Username is Null");
  } else if (!isset($request->Password)){
    throw new ValidationException("Password is Null");
  } else if (trim($request->userName)== ""){
    throw new Exception("Username is Empty");
  }else if (trim($request->Password)== ""){
    throw new Exception("Password is Empty");
  }
  
}