<?php

require_once __DIR__ . '/exception/ValidationException.php';
require_once __DIR__ . '/data/LoginRequest.php';
require_once __DIR__ . '/helper/Validation.php';


$loginRequest = new LoginRequest;
$loginRequest->username = " ";
$loginRequest->password = " ";

try{
  validateLoginRequest($loginRequest);
  echo "sukses\n";
}catch(ValidationException | Exception $exception){
  echo "Error : {$exception->getMessage()}" . PHP_EOL;
  echo $exception->getTraceAsString() . PHP_EOL;
  var_dump($exception->getTrace());
}finally{
  echo "error atau enggak, ini tetap di eksekusi\n";
}